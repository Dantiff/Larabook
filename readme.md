## Larabook
A complete blogging application. The app is powered by PHP (Laravel) and a combination of HTML, CSS, and JavaScript and has been architected to form a light version of Facebook, called Larabook. Other development technologies used include:

* `Vagrant and Laravel Homestead` as the virtual machine
* `Composer` for dependency management
* `Twitter Bootstrap` css framework
* `MySQL` database, configurations in `.env.*.php` files
* `Gulp` for css and JS module bundling
* `Gulp, Sass and Autoprefixing` for watching Sass files for changes, compile them, and then autoprefix any relevant CSS3
* `Twitter Bootstrap` css framework

## Features Included:

### 1. Registration with BDD

Naturally, before a user can begin posting status updates, they first need to register for Larabook. 

### 2. Registration Validation

Of course, form validation is essential for any web app. Larabook is no different.

### 3. Domain Events
Creation, queueing, and listening for domain events. 

### 4. Super Easy Flash Messaging

Very important for notifying users on system actions and responses.

### 5. Signing In

Now that a user can successfully register, we next need to give them a way to login and logout!

### 6. Functional tests

Functional tests implemented using Laravel's Codeception.

### 7. Publishing Statuses

Authenticated users can publish statuses to their profile. 

### 8. Integration Testing Repositories

Codeception configured to execute integration tests.

### 9. Gravatars and View Presenters

Rather than making Larabook users upload profile images, the application simply leverage the popular Gravatar service. 

### 10. Dummy Users and Statuses

Use of Laravel Eloquent's Seeders to create dummy database records.

### 11. Browsing Users With Pagination

Use of Laravel Paginator to paginate frontend page views.

### 12. Profiles

Personalized profiles for each users with profile editing functions.

### 13. Following Users

Functionality allowing Larabook users to follow one another. This way, in their respective feeds, they can see, not only their own statuses, but all the statuses of those they follow. 

### 14. Handlers & Mailers

Using event handlers and mailers to email user when they sign up for Larabook.

### 15. The Password Reset Process

What if one of our Larabook members forgets their password? The app allows users to comfortably reset their passwords.

### 16. Status Comments

Users have the ability to comment on existing statuses. 


## Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/downloads.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, and caching.

Laravel aims to make the development process a pleasing one for the developer without sacrificing application functionality. Happy developers make the best code. To this end, we've attempted to combine the very best of what we have seen in other web frameworks, including frameworks implemented in other languages, such as Ruby on Rails, ASP.NET MVC, and Sinatra.

Laravel is accessible, yet powerful, providing powerful tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## Official Documentation

Documentation for the entire framework can be found on the [Laravel website](http://laravel.com/docs).

### Contributing To Laravel

**All issues and pull requests should be filed on the [laravel/framework](http://github.com/laravel/framework) repository.**

### License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
