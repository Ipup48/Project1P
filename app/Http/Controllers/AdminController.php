<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Models\AboutContent;
use App\Models\ContactContent;
use App\Models\CoursesContent;
use App\Models\Faculty;
use App\Models\FacultyAchievement;
use App\Models\StudentAchievement;
use App\Models\Alumni;
use App\Models\Video;
use App\Models\HomeContent;
use App\Models\NewsEvent;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Validation\ValidationException;

class AdminController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    /**
     * Show the admin dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.dashboard');
    }

    // About Content CRUD
    public function aboutIndex()
    {
        try {
            $aboutContents = AboutContent::orderBy('sort_order')->get();
            return view('admin.about.index', compact('aboutContents'));
        } catch (\Exception $e) {
            Log::error('Error fetching about content: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to load about content.');
        }
    }

    public function aboutCreate()
    {
        return view('admin.about.create');
    }

    public function aboutStore(Request $request)
    {
        try {
            $request->validate([
                'title' => 'required|string|max:255',
                'content' => 'nullable|string',
                'section' => 'required|string|max:255',
                'image' => 'nullable|string|max:255',
                'list_items' => 'nullable|string',
                'sort_order' => 'required|integer',
            ]);

            // Convert list_items to array if provided as JSON string
            $listItems = $request->list_items;
            if (is_string($listItems)) {
                $listItems = json_decode($listItems, true) ?? $listItems;
            }

            AboutContent::create([
                'title' => $request->title,
                'content' => $request->content,
                'section' => $request->section,
                'image' => $request->image,
                'list_items' => $listItems,
                'sort_order' => $request->sort_order
            ]);

            return redirect()->route('admin.new-about.index')->with('success', 'About content created successfully.');
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            Log::error('Error creating about content: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to create about content.')->withInput();
        }
    }

    public function aboutEdit($id)
    {
        try {
            $aboutContent = AboutContent::findOrFail($id);
            return view('admin.about.edit', compact('aboutContent'));
        } catch (ModelNotFoundException $e) {
            return redirect()->route('admin.new-about.index')->with('error', 'About content not found.');
        } catch (\Exception $e) {
            Log::error('Error fetching about content for edit: ' . $e->getMessage());
            return redirect()->route('admin.new-about.index')->with('error', 'Failed to load about content.');
        }
    }

    public function aboutUpdate(Request $request, $id)
    {
        try {
            $request->validate([
                'title' => 'required|string|max:255',
                'content' => 'nullable|string',
                'section' => 'required|string|max:255',
                'image' => 'nullable|string|max:255',
                'list_items' => 'nullable|string',
                'sort_order' => 'required|integer',
            ]);

            // Convert list_items to array if provided as JSON string
            $listItems = $request->list_items;
            if (is_string($listItems)) {
                $listItems = json_decode($listItems, true) ?? $listItems;
            }

            $aboutContent = AboutContent::findOrFail($id);
            $aboutContent->update([
                'title' => $request->title,
                'content' => $request->content,
                'section' => $request->section,
                'image' => $request->image,
                'list_items' => $listItems,
                'sort_order' => $request->sort_order
            ]);

            return redirect()->route('admin.new-about.index')->with('success', 'About content updated successfully.');
        } catch (ModelNotFoundException $e) {
            return redirect()->route('admin.new-about.index')->with('error', 'About content not found.');
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            Log::error('Error updating about content: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to update about content.')->withInput();
        }
    }

    // Real-time update for about content
    public function aboutUpdateRealtime(Request $request, $id)
    {
        try {
            $aboutContent = AboutContent::findOrFail($id);
            
            // Update only the specific field that was changed
            $field = $request->input('field');
            $value = $request->input('value');
            
            // Validate that we're only updating allowed fields
            $allowedFields = ['title', 'content', 'section', 'image', 'list_items', 'sort_order'];
            if (!in_array($field, $allowedFields)) {
                return response()->json(['error' => 'Invalid field'], 400);
            }
            
            // Special handling for list_items to ensure it's properly formatted
            if ($field === 'list_items' && is_string($value)) {
                $value = json_decode($value, true) ?? $value;
            }
            
            // Update the specific field
            $aboutContent->update([$field => $value]);
            
            return response()->json(['success' => true, 'message' => 'Content updated successfully']);
        } catch (ModelNotFoundException $e) {
            return response()->json(['error' => 'Content not found'], 404);
        } catch (\Exception $e) {
            Log::error('Error updating about content realtime: ' . $e->getMessage());
            return response()->json(['error' => 'Failed to update content'], 500);
        }
    }

    public function aboutDestroy($id)
    {
        try {
            $aboutContent = AboutContent::findOrFail($id);
            $aboutContent->delete();

            return redirect()->route('admin.new-about.index')->with('success', 'ลบสำเร็จ');
        } catch (ModelNotFoundException $e) {
            return redirect()->route('admin.new-about.index')->with('error', 'About content not found.');
        } catch (\Exception $e) {
            Log::error('Error deleting about content: ' . $e->getMessage());
            return redirect()->route('admin.new-about.index')->with('error', 'Failed to delete about content.');
        }
    }

    // Home Content CRUD
    public function homeIndex()
    {
        $homeContents = HomeContent::orderBy('sort_order')->get();
        return view('admin.home.index', compact('homeContents'));
    }

    public function homeCreate()
    {
        return view('admin.home.create');
    }

    public function homeStore(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'nullable|string',
            'section' => 'required|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'image' => 'nullable|string|max:255',
            'list_items' => 'nullable|string',
            'link' => 'nullable|string|max:255',
            'link_text' => 'nullable|string|max:255',
            'sort_order' => 'required|integer',
        ]);

        // Convert list_items to array if provided as JSON string
        $listItems = $request->list_items;
        if (is_string($listItems)) {
            $listItems = json_decode($listItems, true) ?? $listItems;
        }

        HomeContent::create([
            'title' => $request->title,
            'content' => $request->content,
            'section' => $request->section,
            'subtitle' => $request->subtitle,
            'image' => $request->image,
            'list_items' => $listItems,
            'link' => $request->link,
            'link_text' => $request->link_text,
            'sort_order' => $request->sort_order
        ]);

        return redirect()->route('admin.new-home.index')->with('success', 'Home content created successfully.');
    }

    public function homeEdit($id)
    {
        $homeContent = HomeContent::findOrFail($id);
        return view('admin.home.edit', compact('homeContent'));
    }

    public function homeUpdate(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'nullable|string',
            'section' => 'required|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'image' => 'nullable|string|max:255',
            'list_items' => 'nullable|string',
            'link' => 'nullable|string|max:255',
            'link_text' => 'nullable|string|max:255',
            'sort_order' => 'required|integer',
        ]);

        // Convert list_items to array if provided as JSON string
        $listItems = $request->list_items;
        if (is_string($listItems)) {
            $listItems = json_decode($listItems, true) ?? $listItems;
        }

        $homeContent = HomeContent::findOrFail($id);
        $homeContent->update([
            'title' => $request->title,
            'content' => $request->content,
            'section' => $request->section,
            'subtitle' => $request->subtitle,
            'image' => $request->image,
            'list_items' => $listItems,
            'link' => $request->link,
            'link_text' => $request->link_text,
            'sort_order' => $request->sort_order
        ]);

        return redirect()->route('admin.new-home.index')->with('success', 'Home content updated successfully.');
    }

    // Real-time update for home content
    public function homeUpdateRealtime(Request $request, $id)
    {
        $homeContent = HomeContent::findOrFail($id);
        
        // Update only the specific field that was changed
        $field = $request->input('field');
        $value = $request->input('value');
        
        // Validate that we're only updating allowed fields
        $allowedFields = ['title', 'content', 'section', 'subtitle', 'image', 'list_items', 'link', 'link_text', 'sort_order'];
        if (!in_array($field, $allowedFields)) {
            return response()->json(['error' => 'Invalid field'], 400);
        }
        
        // Special handling for list_items to ensure it's properly formatted
        if ($field === 'list_items' && is_string($value)) {
            $value = json_decode($value, true) ?? $value;
        }
        
        // Update the specific field
        $homeContent->update([$field => $value]);
        
        return response()->json(['success' => true, 'message' => 'Content updated successfully']);
    }

    public function homeDestroy($id)
    {
        $homeContent = HomeContent::findOrFail($id);
        $homeContent->delete();

        return redirect()->route('admin.new-home.index')->with('success', 'ลบสำเร็จ');
    }

    // Courses Content CRUD
    public function coursesIndex()
    {
        $coursesContents = CoursesContent::orderBy('sort_order')->get();
        return view('admin.courses.index', compact('coursesContents'));
    }

    public function coursesCreate()
    {
        return view('admin.courses.create');
    }

    public function coursesStore(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'nullable|string',
            'section' => 'required|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'image' => 'nullable|string|max:255',
            'list_items' => 'nullable|string',
            'year' => 'nullable|integer',
            'sort_order' => 'required|integer',
        ]);

        // Convert list_items to array if provided as JSON string
        $listItems = $request->list_items;
        if (is_string($listItems)) {
            $listItems = json_decode($listItems, true) ?? $listItems;
        }

        CoursesContent::create([
            'title' => $request->title,
            'content' => $request->content,
            'section' => $request->section,
            'subtitle' => $request->subtitle,
            'image' => $request->image,
            'list_items' => $listItems,
            'year' => $request->year,
            'sort_order' => $request->sort_order
        ]);

        return redirect()->route('admin.new-courses.index')->with('success', 'Courses content created successfully.');
    }

    public function coursesEdit($id)
    {
        $coursesContent = CoursesContent::findOrFail($id);
        return view('admin.courses.edit', compact('coursesContent'));
    }

    public function coursesUpdate(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'nullable|string',
            'section' => 'required|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'image' => 'nullable|string|max:255',
            'list_items' => 'nullable|string',
            'year' => 'nullable|integer',
            'sort_order' => 'required|integer',
        ]);

        // Convert list_items to array if provided as JSON string
        $listItems = $request->list_items;
        if (is_string($listItems)) {
            $listItems = json_decode($listItems, true) ?? $listItems;
        }

        $coursesContent = CoursesContent::findOrFail($id);
        $coursesContent->update([
            'title' => $request->title,
            'content' => $request->content,
            'section' => $request->section,
            'subtitle' => $request->subtitle,
            'image' => $request->image,
            'list_items' => $listItems,
            'year' => $request->year,
            'sort_order' => $request->sort_order
        ]);

        return redirect()->route('admin.new-courses.index')->with('success', 'Courses content updated successfully.');
    }

    // Real-time update for courses content
    public function coursesUpdateRealtime(Request $request, $id)
    {
        $coursesContent = CoursesContent::findOrFail($id);
        
        // Update only the specific field that was changed
        $field = $request->input('field');
        $value = $request->input('value');
        
        // Validate that we're only updating allowed fields
        $allowedFields = ['title', 'content', 'section', 'subtitle', 'image', 'list_items', 'year', 'sort_order'];
        if (!in_array($field, $allowedFields)) {
            return response()->json(['error' => 'Invalid field'], 400);
        }
        
        // Special handling for list_items to ensure it's properly formatted
        if ($field === 'list_items' && is_string($value)) {
            $value = json_decode($value, true) ?? $value;
        }
        
        // Update the specific field
        $coursesContent->update([$field => $value]);
        
        return response()->json(['success' => true, 'message' => 'Content updated successfully']);
    }

    public function coursesDestroy($id)
    {
        $coursesContent = CoursesContent::findOrFail($id);
        $coursesContent->delete();

        return redirect()->route('admin.new-courses.index')->with('success', 'ลบสำเร็จ');
    }

    // Contact Content CRUD
    public function contactIndex()
    {
        $contactContents = ContactContent::orderBy('sort_order')->get();
        return view('admin.contact.index', compact('contactContents'));
    }

    public function contactCreate()
    {
        return view('admin.contact.create');
    }

    public function contactStore(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'nullable|string',
            'section' => 'required|string|max:255',
            'address' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:255',
            'email' => 'nullable|string|max:255',
            'fax' => 'nullable|string|max:255',
            'image' => 'nullable|string|max:255',
            'map_url' => 'nullable|string|max:255',
            'sort_order' => 'required|integer',
        ]);

        ContactContent::create([
            'title' => $request->title,
            'content' => $request->content,
            'section' => $request->section,
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
            'fax' => $request->fax,
            'image' => $request->image,
            'map_url' => $request->map_url,
            'sort_order' => $request->sort_order
        ]);

        return redirect()->route('admin.new-contact.index')->with('success', 'Contact content created successfully.');
    }

    public function contactEdit($id)
    {
        $contactContent = ContactContent::findOrFail($id);
        return view('admin.contact.edit', compact('contactContent'));
    }

    public function contactUpdate(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'nullable|string',
            'section' => 'required|string|max:255',
            'address' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:255',
            'email' => 'nullable|string|max:255',
            'fax' => 'nullable|string|max:255',
            'image' => 'nullable|string|max:255',
            'map_url' => 'nullable|string|max:255',
            'sort_order' => 'required|integer',
        ]);

        $contactContent = ContactContent::findOrFail($id);
        $contactContent->update([
            'title' => $request->title,
            'content' => $request->content,
            'section' => $request->section,
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
            'fax' => $request->fax,
            'image' => $request->image,
            'map_url' => $request->map_url,
            'sort_order' => $request->sort_order
        ]);

        return redirect()->route('admin.new-contact.index')->with('success', 'Contact content updated successfully.');
    }

    // Real-time update for contact content
    public function contactUpdateRealtime(Request $request, $id)
    {
        $contactContent = ContactContent::findOrFail($id);
        
        // Update only the specific field that was changed
        $field = $request->input('field');
        $value = $request->input('value');
        
        // Validate that we're only updating allowed fields
        $allowedFields = ['title', 'content', 'section', 'address', 'phone', 'email', 'fax', 'image', 'map_url', 'sort_order'];
        if (!in_array($field, $allowedFields)) {
            return response()->json(['error' => 'Invalid field'], 400);
        }
        
        // Update the specific field
        $contactContent->update([$field => $value]);
        
        return response()->json(['success' => true, 'message' => 'Content updated successfully']);
    }

    public function contactDestroy($id)
    {
        $contactContent = ContactContent::findOrFail($id);
        $contactContent->delete();

        return redirect()->route('admin.new-contact.index')->with('success', 'ลบสำเร็จ');
    }

    // Faculty CRUD
    public function facultyIndex()
    {
        $faculties = Faculty::orderBy('sort_order')->get();
        return view('admin.faculty.index', compact('faculties'));
    }

    public function facultyCreate()
    {
        return view('admin.faculty.create');
    }

    public function facultyStore(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'bio' => 'nullable|string',
            'image' => 'nullable|string|max:255',
            'type' => 'required|string|in:faculty,special',
            'sort_order' => 'required|integer',
        ]);

        Faculty::create([
            'name' => $request->name,
            'position' => $request->position,
            'description' => $request->bio,
            'image' => $request->image,
            'type' => $request->type,
            'sort_order' => $request->sort_order
        ]);

        return redirect()->route('admin.new-faculty.index')->with('success', 'Faculty member created successfully.');
    }

    public function facultyEdit($id)
    {
        $faculty = Faculty::findOrFail($id);
        return view('admin.faculty.edit', compact('faculty'));
    }

    public function facultyUpdate(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'bio' => 'nullable|string',
            'image' => 'nullable|string|max:255',
            'type' => 'required|string|in:faculty,special',
            'sort_order' => 'required|integer',
        ]);

        $faculty = Faculty::findOrFail($id);
        $faculty->update([
            'name' => $request->name,
            'position' => $request->position,
            'description' => $request->bio,
            'image' => $request->image,
            'type' => $request->type,
            'sort_order' => $request->sort_order
        ]);

        return redirect()->route('admin.new-faculty.index')->with('success', 'Faculty member updated successfully.');
    }

    // Real-time update for faculty
    public function facultyUpdateRealtime(Request $request, $id)
    {
        $faculty = Faculty::findOrFail($id);
        
        // Update only the specific field that was changed
        $field = $request->input('field');
        $value = $request->input('value');
        
        // Validate that we're only updating allowed fields
        $allowedFields = ['name', 'position', 'description', 'image', 'type', 'sort_order'];
        if (!in_array($field, $allowedFields)) {
            return response()->json(['error' => 'Invalid field'], 400);
        }
        
        // Special handling for description field (which is called 'bio' in the form)
        if ($field === 'bio') {
            $field = 'description';
        }
        
        // Update the specific field
        $faculty->update([$field => $value]);
        
        return response()->json(['success' => true, 'message' => 'Faculty member updated successfully']);
    }

    public function facultyDestroy($id)
    {
        $faculty = Faculty::findOrFail($id);
        $faculty->delete();

        return redirect()->route('admin.new-faculty.index')->with('success', 'ลบสำเร็จ');
    }

    // Faculty Achievements CRUD
    public function facultyAchievementsIndex($facultyId)
    {
        $faculty = Faculty::findOrFail($facultyId);
        $achievements = FacultyAchievement::where('faculty_id', $facultyId)->orderBy('sort_order')->get();
        return view('admin.faculty.achievements.index', compact('faculty', 'achievements'));
    }

    public function facultyAchievementsCreate($facultyId)
    {
        $faculty = Faculty::findOrFail($facultyId);
        return view('admin.faculty.achievements.create', compact('faculty'));
    }

    public function facultyAchievementsStore(Request $request, $facultyId)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|string|max:255',
            'link' => 'nullable|string|max:255',
            'date' => 'nullable|date',
            'sort_order' => 'required|integer',
        ]);

        FacultyAchievement::create([
            'faculty_id' => $facultyId,
            'title' => $request->title,
            'description' => $request->description,
            'image' => $request->image,
            'link' => $request->link,
            'date' => $request->date,
            'sort_order' => $request->sort_order
        ]);

        return redirect()->route('admin.new-faculty.achievements.index', $facultyId)->with('success', 'Faculty achievement created successfully.');
    }

    public function facultyAchievementsEdit($facultyId, $id)
    {
        $faculty = Faculty::findOrFail($facultyId);
        $achievement = FacultyAchievement::findOrFail($id);
        return view('admin.faculty.achievements.edit', compact('faculty', 'achievement'));
    }

    public function facultyAchievementsUpdate(Request $request, $facultyId, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|string|max:255',
            'link' => 'nullable|string|max:255',
            'date' => 'nullable|date',
            'sort_order' => 'required|integer',
        ]);

        $achievement = FacultyAchievement::findOrFail($id);
        $achievement->update([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $request->image,
            'link' => $request->link,
            'date' => $request->date,
            'sort_order' => $request->sort_order
        ]);

        return redirect()->route('admin.new-faculty.achievements.index', $facultyId)->with('success', 'Faculty achievement updated successfully.');
    }

    public function facultyAchievementsDestroy($facultyId, $id)
    {
        $achievement = FacultyAchievement::findOrFail($id);
        $achievement->delete();

        return redirect()->route('admin.new-faculty.achievements.index', $facultyId)->with('success', 'ลบสำเร็จ');
    }

    // Student Achievements CRUD
    public function studentAchievementsIndex()
    {
        $achievements = StudentAchievement::orderBy('sort_order')->get();
        return view('admin.student-achievements.index', compact('achievements'));
    }

    public function studentAchievementsCreate()
    {
        return view('admin.student-achievements.create');
    }

    public function studentAchievementsStore(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|string|max:255',
            'link' => 'nullable|string|max:255',
            'date' => 'nullable|date',
            'sort_order' => 'required|integer',
        ]);

        StudentAchievement::create($request->only([
            'title',
            'description',
            'image',
            'link',
            'date',
            'sort_order'
        ]));

        return redirect()->route('admin.new-student-achievements.index')->with('success', 'Student achievement created successfully.');
    }

    public function studentAchievementsEdit($id)
    {
        $achievement = StudentAchievement::findOrFail($id);
        return view('admin.student-achievements.edit', compact('achievement'));
    }

    public function studentAchievementsUpdate(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|string|max:255',
            'link' => 'nullable|string|max:255',
            'date' => 'nullable|date',
            'sort_order' => 'required|integer',
        ]);

        $achievement = StudentAchievement::findOrFail($id);
        $achievement->update($request->only([
            'title',
            'description',
            'image',
            'link',
            'date',
            'sort_order'
        ]));

        return redirect()->route('admin.new-student-achievements.index')->with('success', 'Student achievement updated successfully.');
    }

    public function studentAchievementsDestroy($id)
    {
        $achievement = StudentAchievement::findOrFail($id);
        $achievement->delete();

        return redirect()->route('admin.new-student-achievements.index')->with('success', 'ลบสำเร็จ');
    }

    // Alumni CRUD
    public function alumniIndex()
    {
        $alumni = Alumni::orderBy('sort_order')->get();
        return view('admin.alumni.index', compact('alumni'));
    }

    public function alumniCreate()
    {
        return view('admin.alumni.create');
    }

    public function alumniStore(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'graduation_year' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'bio' => 'nullable|string',
            'image' => 'nullable|string|max:255',
            'email' => 'nullable|string|max:255',
            'linkedin' => 'nullable|string|max:255',
            'company' => 'nullable|string|max:255',
            'sort_order' => 'required|integer',
        ]);

        Alumni::create($request->only([
            'name',
            'graduation_year',
            'position',
            'bio',
            'image',
            'email',
            'linkedin',
            'company',
            'sort_order'
        ]));

        return redirect()->route('admin.new-alumni.index')->with('success', 'Alumni created successfully.');
    }

    public function alumniEdit($id)
    {
        $alumnus = Alumni::findOrFail($id);
        return view('admin.alumni.edit', compact('alumnus'));
    }

    public function alumniUpdate(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'graduation_year' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'bio' => 'nullable|string',
            'image' => 'nullable|string|max:255',
            'email' => 'nullable|string|max:255',
            'linkedin' => 'nullable|string|max:255',
            'company' => 'nullable|string|max:255',
            'sort_order' => 'required|integer',
        ]);

        $alumnus = Alumni::findOrFail($id);
        $alumnus->update($request->only([
            'name',
            'graduation_year',
            'position',
            'bio',
            'image',
            'email',
            'linkedin',
            'company',
            'sort_order'
        ]));

        return redirect()->route('admin.new-alumni.index')->with('success', 'Alumni updated successfully.');
    }

    public function alumniDestroy($id)
    {
        $alumnus = Alumni::findOrFail($id);
        $alumnus->delete();

        return redirect()->route('admin.new-alumni.index')->with('success', 'ลบสำเร็จ');
    }

    // Videos CRUD
    public function videosIndex()
    {
        $videos = Video::orderBy('sort_order')->get();
        return view('admin.videos.index', compact('videos'));
    }

    public function videosCreate()
    {
        return view('admin.videos.create');
    }

    public function videosStore(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'youtube_link' => 'required|string|max:255',
            'image' => 'nullable|string|max:255',
            'is_primary' => 'nullable|boolean',
            'sort_order' => 'required|integer',
        ]);

        // Ensure only one video can be primary
        if ($request->is_primary) {
            Video::where('is_primary', true)->update(['is_primary' => false]);
        }

        Video::create($request->only([
            'title',
            'description',
            'youtube_link',
            'image',
            'is_primary',
            'sort_order'
        ]));

        return redirect()->route('admin.new-videos.index')->with('success', 'Video created successfully.');
    }

    public function videosEdit($id)
    {
        $video = Video::findOrFail($id);
        return view('admin.videos.edit', compact('video'));
    }

    public function videosUpdate(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'youtube_link' => 'required|string|max:255',
            'image' => 'nullable|string|max:255',
            'is_primary' => 'nullable|boolean',
            'sort_order' => 'required|integer',
        ]);

        $video = Video::findOrFail($id);

        // Ensure only one video can be primary
        if ($request->is_primary) {
            Video::where('is_primary', true)->update(['is_primary' => false]);
        }

        $video->update($request->only([
            'title',
            'description',
            'youtube_link',
            'image',
            'is_primary',
            'sort_order'
        ]));

        return redirect()->route('admin.new-videos.index')->with('success', 'Video updated successfully.');
    }

    public function videosDestroy($id)
    {
        $video = Video::findOrFail($id);
        $video->delete();

        return redirect()->route('admin.new-videos.index')->with('success', 'ลบสำเร็จ');
    }

    // News & Events CRUD
    public function newsIndex()
    {
        $newsEvents = NewsEvent::orderBy('date', 'desc')->get();
        return view('admin.news.index', compact('newsEvents'));
    }

    public function newsCreate()
    {
        return view('admin.news.create');
    }

    public function newsStore(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date',
            'type' => 'required|string|in:news,event',
            'image' => 'nullable|string|max:255',
        ]);

        NewsEvent::create($request->all());

        return redirect()->route('admin.new-news.index')->with('success', 'News/Event created successfully.');
    }

    public function newsEdit($id)
    {
        $newsEvent = NewsEvent::findOrFail($id);
        return view('admin.news.edit', compact('newsEvent'));
    }

    public function newsUpdate(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date',
            'type' => 'required|string|in:news,event',
            'image' => 'nullable|string|max:255',
        ]);

        $newsEvent = NewsEvent::findOrFail($id);
        $newsEvent->update($request->all());

        return redirect()->route('admin.new-news.index')->with('success', 'News/Event updated successfully.');
    }

    // Real-time update for news & events
    public function newsUpdateRealtime(Request $request, $id)
    {
        $newsEvent = NewsEvent::findOrFail($id);
        
        // Update only the specific field that was changed
        $field = $request->input('field');
        $value = $request->input('value');
        
        // Validate that we're only updating allowed fields
        $allowedFields = ['title', 'description', 'date', 'type', 'image'];
        if (!in_array($field, $allowedFields)) {
            return response()->json(['error' => 'Invalid field'], 400);
        }
        
        // Update the specific field
        $newsEvent->update([$field => $value]);
        
        return response()->json(['success' => true, 'message' => 'News/Event updated successfully']);
    }

    public function newsDestroy($id)
    {
        $newsEvent = NewsEvent::findOrFail($id);
        $newsEvent->delete();

        return redirect()->route('admin.new-news.index')->with('success', 'ลบสำเร็จ');
    }
}