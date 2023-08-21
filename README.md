# Pizzeria App

This is a sample web application that allows users to manage a pizza menu. It enables users to create, view, edit, and delete pizzas through a web interface. The application is built using the Laravel framework and follows the MVC (Model-View-Controller) pattern for code organization.

## Features

- Create a new pizza with name and price.
- View the complete list of pizzas in the menu.
- View details of a specific pizza.
- Edit information of an existing pizza.
- Delete pizzas from the menu.

## Technologies Used

- Laravel Framework: Backend in PHP for server-side logic.
- MySQL: Relational database for storing pizzas.
- Blade: Laravel's template engine for generating HTML views.
- Bootstrap: CSS framework for styles and responsive design.
- JavaScript: For frontend interactions.

## Requirements

- PHP 7.4 or higher.
- Composer installed.
- MySQL Database.
- Web server like Apache or Nginx.

## Installation and Execution

1. Clone this repository on your local machine:

   ```bash
   git clone https://github.com/AngelCampa/pizzeria.git

2. Navigate to the project directory:
    ```bash
    cd pizzeria

3. Install dependencies using Composer:
    ```bash
    composer install

4. Copy the .env.example file and rename it to .env. Then, set up your database credentials in the .env file.

5. Generate a new application key:
    ```bash
    php artisan key:generate


6. Run migrations to create database tables:
    ```bash
    php artisan migrate

7. Start the development server:
    ```bash
    php artisan serve