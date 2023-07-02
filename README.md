# Simple MVC Web Development Project

This is a simple web development project following the MVC (Model-View-Controller) architecture, implemented in PHP using the Eloquent ORM (Illuminate/Database) for database queries.

## Project Structure

The project has the following directory structure:

- `app`
  - `controllers`
    - `HomeController.php`
    - ...
  - `models`
    - `User.php`
    - ...
- `public`
  - `css`
  - `js`
  - `index.php`
- `resources`
  - `views`
    - `home.php`
    - ...
- `vendor`
- `database.php`
- `composer.json`
- `README.md`

The `app` directory contains the controllers and models for the application. The `public` directory contains publicly accessible files like CSS, JavaScript, and the entry point (`index.php`) for the application. The `resources` directory contains the views/templates for the application. The `vendor` directory contains the dependencies installed via Composer. The `database.php` file contains the database configuration (you can modify it according to your own database settings). The `composer.json` file lists the project dependencies. The `README.md` file contains information about the project.

## Getting Started

1. Clone the project repository.
2. Run `composer install` to install the project dependencies.
3. Configure the database connection in the `database.php` file.
4. Start your web server and make sure the root directory is set to the `public` directory.
5. Access the application in your web browser.

## Usage

- The entry point of the application is `public/index.php`. This file routes the incoming requests to the appropriate controllers.
- Controllers are located in the `app/controllers` directory. They handle the logic for different routes and interact with models and views.
- Models are located in the `app/models` directory. They represent the data structure and handle the database interactions using Eloquent ORM.
- Views are located in the `resources/views` directory. They define the presentation layer of the application.

Feel free to explore and modify the existing controllers, models, and views to fit your specific needs. You can add more routes, create new controllers, and define additional models as required.

## Dependencies

This project relies on the following dependencies:

- `illuminate/database` (Eloquent ORM): Used for database query operations.
- Other dependencies specified in the `composer.json` file.

Make sure to run `composer install` to install the dependencies before running the application.

## Contributing

Contributions to this project are welcome. If you find any issues or have suggestions for improvements, please open an issue or submit a pull request.

## License

This project is licensed under the MIT License.
