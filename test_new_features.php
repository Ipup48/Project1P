<?php
// Simple test script to verify new features are working

require_once 'vendor/autoload.php';

// Test database connections and model relationships
echo "Testing new features...\n\n";

// Test Faculty Achievement relationship
echo "1. Testing Faculty Achievement relationship:\n";
try {
    $faculty = \App\Models\Faculty::first();
    if ($faculty) {
        echo "   - Found faculty member: " . $faculty->name . "\n";
        $achievements = $faculty->achievements;
        echo "   - Number of achievements: " . $achievements->count() . "\n";
        echo "   ✓ Faculty-Achievement relationship working\n";
    } else {
        echo "   - No faculty members found\n";
    }
} catch (Exception $e) {
    echo "   ✗ Error: " . $e->getMessage() . "\n";
}

echo "\n";

// Test Student Achievements
echo "2. Testing Student Achievements:\n";
try {
    $studentAchievements = \App\Models\StudentAchievement::count();
    echo "   - Number of student achievements: " . $studentAchievements . "\n";
    echo "   ✓ Student Achievements model working\n";
} catch (Exception $e) {
    echo "   ✗ Error: " . $e->getMessage() . "\n";
}

echo "\n";

// Test Alumni
echo "3. Testing Alumni:\n";
try {
    $alumniCount = \App\Models\Alumni::count();
    echo "   - Number of alumni: " . $alumniCount . "\n";
    echo "   ✓ Alumni model working\n";
} catch (Exception $e) {
    echo "   ✗ Error: " . $e->getMessage() . "\n";
}

echo "\n";

// Test Videos
echo "4. Testing Videos:\n";
try {
    $videosCount = \App\Models\Video::count();
    echo "   - Number of videos: " . $videosCount . "\n";
    echo "   ✓ Video model working\n";
} catch (Exception $e) {
    echo "   ✗ Error: " . $e->getMessage() . "\n";
}

echo "\n";
echo "All tests completed!\n";
?>