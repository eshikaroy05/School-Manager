# School Management System - Setup Guide

This guide will help you set up and run the School Management System on your local server.

## Prerequisites

- Web server (XAMPP, WAMP, or LAMP)
- PHP 7.1 or higher
- MySQL 5.6 or higher
- Modern web browser

## Installation Steps

### 1. Database Setup

1. **Start your web server** (XAMPP/WAMP)
2. **Open phpMyAdmin** or MySQL console
3. **Create the database** by running the SQL script:

   ```sql
   -- Run the contents of school_management_system.sql
   -- This will create the database and all necessary tables
   ```

   Or import the `school_management_system.sql` file directly in phpMyAdmin.

### 2. Configuration

1. **Verify config.php** - The database configuration file is already created with default settings:
   ```php
   $servername = "localhost";
   $username = "root";
   $password = ""; // Default for XAMPP/WAMP
   $dbname = "Student_Management_System";
   ```

2. **Update database credentials** if your setup is different:
   - Change `$password` if you have set a MySQL password
   - Update `$username` if using different MySQL user

### 3. File Structure

The system includes the following key files:

#### Core Files
- `config.php` - Database configuration
- `index.html` - Home page
- `404.php` - Error page

#### Parent Module Files
- `parent_Login.php` - Parent login page
- `parent_Registration.php` - Parent registration page
- `registration.html` - Registration options page
- `master_Page_Parent.php` / `masterPageParent.php` - Parent dashboard
- `parent_View_Profile.php` - View parent profile
- `parent_Update_Profile.php` - Update parent profile
- `parent_Student_Marks.php` - View student marks
- `parent_Result_Analysis.php` - Analyze results
- `parent_Fee_Details.php` - Fee information
- `parent_Check_Attendance.php` - Check attendance
- `parent_Academic_Calendar.php` - Academic calendar

#### Assets
- `css/` - Stylesheets (Bootstrap, custom styles)
- `js/` - JavaScript files (jQuery, Bootstrap, custom scripts)
- `images/` - Images and icons
- `fonts/` - Font files

### 4. Access the System

1. **Start your web server**
2. **Place all files** in your web server's root directory (htdocs for XAMPP)
3. **Open browser** and go to: `http://localhost/School-Manager/`

### 5. Default Login Credentials

After setting up the database, you can use these sample accounts:

#### Admin
- **Admin ID**: ADMIN001
- **Password**: admin123

#### Teacher
- **Teacher ID**: TCH001
- **Password**: teacher123

#### Student
- **Student ID**: STU001
- **Password**: student123

#### Parent
- **Parent ID**: PAR001
- **Password**: parent123

## Database Schema Overview

The system includes these main tables:

1. **Parent** - Parent/guardian information
2. **Student** - Student details and academic info
3. **Teacher** - Teacher information and subjects
4. **Admin_Table** - Administrator accounts
5. **Subject_Table** - Subject management
6. **Student_Attendance** - Daily attendance records
7. **Fee_Payment_Details** - Fee payment tracking
8. **Marks_Table** - Student marks and grades
9. **Book_Registration** - Library book management
10. **Book_Issue** - Book borrowing records
11. **Bus_Registration** - School bus information
12. **Student_Transport_Registration** - Student transport subscriptions
13. **Academic_Calendar** tables - Event management
14. **Salary** tables - Teacher salary management

## Features Available

### For Parents
- View student profile and information
- Check attendance records
- View academic performance and marks
- Access fee payment details
- View academic calendar events
- Update personal profile

### For Students
- View personal information
- Check attendance
- View marks and grades
- Access downloadable materials

### For Teachers
- Manage student attendance
- Upload assignments and materials
- View student performance

### For Administrators
- Manage users (students, teachers, parents)
- Configure class and fee structures
- Generate reports
- Manage academic calendar
- Handle book library operations
- Manage transportation services

## Troubleshooting

### Common Issues

1. **Database Connection Error**
   - Check if MySQL service is running
   - Verify database credentials in `config.php`
   - Ensure database is created and accessible

2. **File Not Found Errors**
   - Ensure all files are in the correct directories
   - Check file permissions
   - Verify web server configuration

3. **CSS/JavaScript Not Loading**
   - Check if CSS and JS folders exist and contain files
   - Verify file paths in HTML/PHP files

### Support

For technical support or questions, refer to the documentation in the `screenshots and docs/` folder.

## Security Notes

- Change default passwords after first login
- Use strong passwords for all accounts
- Regularly backup the database
- Keep the system updated
- Use HTTPS in production environments

---

**Installation Complete!** 🎉

Your School Management System is now ready to use. Access it through your web browser and start managing your school's operations efficiently.