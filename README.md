# Learning Journal

A journal where a user can add entries for online courses that they have taken created with Laravel and with a help from
[this helpful Laravel tutorial](https://www.itsolutionstuff.com/post/laravel-8-crud-application-tutorial-for-beginnersexample.html).

* Laravel 8
* MySQL 8
* PHP 7

## How to Run the Program
1. Download and unzip the project.
2. Run `composer install`.
3. Set up a MySQL database and connect to it.
4. Create an .env file and put in the relevant data (look at the example file).
    * If you want to enable email functionality (like sending a password reset email), you will have to edit the mail settings in the .env file as well.
5. Run `php artisan migrate`.
6. (*Optional*) If you want to use the provided categories, run `php artisan db:seed --class=CategoryTableSeeder`.
6. Run `php artisan serve`.
7. Go to `localhost:{PORT_NUMBER}` in your browser.

## Routes
### Main Routes
* `/`: Index
* `/dashboard`: Home
* `/register`: Registration form
* `/login`: Login form

### Category Routes
* `/categories`: Listing of all categories
* `/categories/{category_id}`: Listing of all entries for a category
* `/categories/create`: Add a new category
* `/categories/{category_id}/edit`: Edit an existing category

### Entry Routes
* `/users/{user_id}/entries`: Listing of all entries in descending order by date added
* `/users/{user_id}/entries/{entry_id}`: A single entry
* `/users/{user_id}/entries/create`: Add a new entry
* `/users/{user_id}/entries/{entry_id}/edit`: Edit an existing entry

### User Routes
* `/users`: Listing of all registered users
* `/users/{user_id}`: Listing of all entries for a user
* `/user/profile`: User settings

## Updates
### Update 2
* Fixed the bug that enabled users to see other users' entries.

### Update 1
* Implemented user authentication.
