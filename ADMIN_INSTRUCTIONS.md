# Admin System Setup and Usage Instructions

## Overview
This document provides instructions for setting up and using the newly created admin system for the Software Engineering website. The admin system allows authorized users to perform CRUD (Create, Read, Update, Delete) operations on all website content.

## Database Configuration

The system is now properly configured to use MySQL instead of SQLite. The `.env` file has been updated with the MySQL database credentials:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=se_admin
DB_USERNAME=root
DB_PASSWORD=
```

Laravel will automatically create the database if it doesn't exist when you run migrations.

## Setup Instructions

### 1. Install Dependencies
```bash
composer install
```

### 2. Database Creation
Laravel will automatically create the MySQL database named `se_admin` when you run migrations. If you want to use a different database name, update the DB_DATABASE value in your `.env` file before running migrations.

### 3. Run Database Migrations
```bash
php artisan migrate
```

### 4. Create an Admin User

You can create an admin user in two ways:

**Option 1: Using the provided seeder (easier)**
```bash
php artisan db:seed --class=AdminUserSeeder
```

This creates an admin user with:
- Email: admin@example.com
- Password: password

**Option 2: Using tinker**
```bash
php artisan tinker
```

Then in the tinker shell:
```php
$user = new App\Models\User;
$user->name = 'Admin User';
$user->email = 'admin@example.com';
$user->password = bcrypt('password');
$user->is_admin = true;
$user->save();
```

Press Ctrl+C to exit tinker.

### 5. Start the Development Server
```bash
php artisan serve
```

## Admin Access

The system implements role-based access control with a single login endpoint:

- **Admin Login**: `/admin/login`

Only users with the `is_admin` flag set to `true` can access the admin panel.

The login page now uses the appropriate layout:
- Admin login extends the public layout (before authentication)
- Admin panel pages extend the admin layout (after authentication)

## Content Management

The system is now populated with sample data for the Software Engineering program. All content types support bilingual input for Thai and English as required by project specifications.

## Success Messages

All deletion operations now properly display the Thai success message 'ลบสำเร็จ' prominently at the top of the page, following project specifications.

## Fixing Common Issues

### Middleware Linting Errors
If you see linting errors about middleware in your IDE, these are typically just IDE issues and not actual PHP errors. The middleware is implemented correctly.

### Model Field Mismatches
Some models have been updated to ensure consistency between the admin controller and the database schema. Make sure you're using the latest versions of all model files.

### List Items Handling
For content that includes list items (like About and Home content), the system now properly handles JSON-encoded arrays for better data management.

### Success Message Format
All delete operations now show only the Thai success message 'ลบสำเร็จ' without any checkmark icon or additional graphics, following project specifications.

### Field Consistency
All controller methods have been updated to properly handle all available fields in each model, ensuring data integrity and preventing errors.

## Accessing the Admin System

1. Visit the website at `http://localhost:8000`
2. Click on the "Admin Login" link in the navigation menu
3. Log in with the admin credentials created in step 3 above
4. After logging in, you'll see an "Admin Panel" link in the navigation menu
5. Click on "Admin Panel" to access the admin dashboard

## Admin System Features

### Dashboard
- Overview of all content types
- Quick links to manage each content section

### Content Management Sections

1. **Home Content**
   - Manage content displayed on the home page
   - Sections: Hero, Introduction, Features, Statistics, Testimonials

2. **About Content**
   - Manage content displayed on the about page
   - Sections: Overview, Mission, Vision, General Info, Careers, Objectives, Outcomes, History

3. **Courses Content**
   - Manage content displayed on the courses page
   - Sections: Overview, Curriculum, Requirements, Career Opportunities

4. **Faculty**
   - Manage faculty members and special faculty
   - Add, edit, or remove faculty profiles

5. **Contact Content**
   - Manage content displayed on the contact page
   - Sections: Contact Information, Contact Form, Map, Office Hours

6. **News & Events**
   - Manage news articles and events
   - Add, edit, or remove news and events

## Using CRUD Operations

### Create (Add New Content)
1. Navigate to the desired content section in the admin panel
2. Click the "Add New [Content Type]" button
3. Fill in the required fields
4. Click "Create" to save

### Read (View Content)
1. Navigate to the desired content section in the admin panel
2. All existing content will be displayed in a table format
3. View details of any content item

### Update (Edit Content)
1. Navigate to the desired content section in the admin panel
2. Find the content item you want to edit
3. Click the "Edit" button
4. Make your changes
5. Click "Update" to save

### Delete (Remove Content)
1. Navigate to the desired content section in the admin panel
2. Find the content item you want to delete
3. Click the "Delete" button
4. Confirm the deletion in the popup dialog

## Security Notes
- Always use strong passwords for admin accounts
- The admin system is protected by authentication
- Only logged-in users can access admin functions
- All admin routes are prefixed with `/admin/new/` to separate them from the main website

## Troubleshooting
- If you encounter any issues, check the Laravel logs in `storage/logs/laravel.log`
- Ensure all dependencies are properly installed
- Verify that the database connection is configured correctly in `.env` file