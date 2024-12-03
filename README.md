# Project Management System

![Laravel](https://img.shields.io/badge/Laravel-v8.x-orange) ![Jetstream](https://img.shields.io/badge/Jetstream-v2.x-brightgreen) ![MySQL](https://img.shields.io/badge/MySQL-v5.x-blue)

This is a **Laravel-based web application** designed to manage projects efficiently. The system is connected to a **MySQL database** and offers a comprehensive **CRUD functionality**, allowing users to create, read, update, and delete project records. It also utilizes **Jetstream** for authentication and role-based access control.

## Features
- **Project Management**: Perform CRUD operations to manage project details, deadlines, and descriptions.
- **User Roles**: Secure authentication and authorization with two primary roles:
  - **Admin**: Admins have full control over the system, including managing all projects and users.
  - **User**: Users can manage their own projects, update details, and view assigned projects with restricted access.
- **Jetstream Authentication**: Jetstream is used for robust, out-of-the-box authentication with features like registration, login, and two-factor authentication.
- **MySQL Integration**: Seamless interaction with MySQL for storing and retrieving data.


## Technologies Used

- **Backend**: ![Laravel](https://img.shields.io/badge/Laravel-8.x-ff2d20) (PHP Framework)
- **Frontend**: Blade templates with integrated styling
- **Jetstream Authentication**: Jetstream is used for robust, out-of-the-box authentication with features like registration, login, and two-factor authentication.
- **Database**: ![MySQL](https://img.shields.io/badge/MySQL-v5.x-blue)
- **Authentication**: Laravel’s built-in authentication with role-based access control

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/yourusername/school_platform.git
2. Navigate to the project directory:
   ```bash
   cd school_platform
3. Install dependencies:
   ```bash
   composer install
4. Set up the .env file:
   ```bash
   cp .env.example .env
5. Generate the application key:
   ```bash
   php artisan key:generate
6. Set up the MySQL database connection in the .env file.
7. Run database migrations:
   ```bash
   php artisan migrate
8. Load vite
   ```bash
   npm run build

## Seeding Default Users
To create default users for the application, including an admin and a student user, you can run the database seeder.

1. Run the seeder
   ```bash
   php artisan db:seed
2. Default user credentials
- Admin
  - Email: **admin@example.com**
  - Password: **password**
- Student
  - Email: **student@example.com**
  - Password: **password**

After running the seeder, these users will be created and can log in immediately using the provided credentials.


