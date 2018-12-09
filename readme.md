# Post-It: firstLaravelApp

## About

Laravel is MVC framework for php. This is a simple Blog app created to get familiar with php and Laravel.

## Features 

- CRUD functionality for Posts
- Role based users with different dashboard for Default and Admin User

## Deploying App
> MySQL should be installed.
- Edit database credentials in .env file.
- Run migrations to create table.
- Creating Admin:
  - Register using normal registeration link.
  - Use either phpAdmin or tinker artisan command 
    - `php artisan tinker`
    - `use App\User`;
    - `User::where('email', 'xyz@gmail.com')->update(['role' => 'admin']);`
