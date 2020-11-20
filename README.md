# Learning Journal

A journal where a user can add entries for online courses that they have taken created with Laravel and with a help from
[this helpful Laravel tutorial](https://www.itsolutionstuff.com/post/laravel-8-crud-application-tutorial-for-beginnersexample.html).

* Laravel 8
* MySQL 8
* PHP 7

![license](https://img.shields.io/github/license/josephyhu/learning-journal?style=plastic)

## Routes
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
* `/users/{user_id}`: Listing of all entries for a user.

## Updates
### Update 2
* Fixed the bug that enabled users to see other users' entries.

### Update 1
* Implemented user authentication.
