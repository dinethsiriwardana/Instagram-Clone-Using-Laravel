
  

# Instagram Clone Using Laravel

  

This repository contains the code for an Instagram clone built using Laravel. The project was developed following a course on `freeCodeCamp.org` and implements the following features:

  
  

[![ImtZ5yENzgE-HD](https://user-images.githubusercontent.com/91774218/226859715-a37c1b52-ee03-473d-a92b-8be68cb626dd.jpg)](https://www.youtube.com/watch?v=ImtZ5yENzgE)

  

![Screenshot 2023-03-22 at 2 30 17 PM](https://user-images.githubusercontent.com/91774218/226861306-91898c69-e09c-4f91-ad08-7eb2cc51c725.png)

![Screenshot 2023-03-22 at 2 30 12 PM](https://user-images.githubusercontent.com/91774218/226861317-cc11b924-ed89-4d9d-ab30-7648e4f76159.png)

  
  

- Migrations and Setting Up SQLite

- Profiles Controller

- RESTful Resource Controller

- Passing Data to the View

- Eloquent Relationships

- Posts to the Database & Many To Many Relationship

- Uploading/Saving the Image to the Project

- Resizing Images with Intervention Image PHP Library

- Restricting/Authorizing Actions with a Model Policy

- Default Profile Image

- Follow/Unfollow Profiles Using a Vue.js Component

- Many To Many Relationship

- Calculating Followers Count and Following Count

- Showing Posts from Profiles The User Is Following

  

## Usage

  

To use this project, follow the steps below:

  

1. Clone the repository:

  
  

```sh

git clone  https://github.com/dinethsiriwardana/Instagram-Clone-Using-Laravel.git

```

  

2. Navigate into the project directory:

  

```sh

cd  Instagram-Clone-Using-Laravel

```

  

3. Install the dependencies:

  

```sh

composer install

```

  

```sh

npm install

```

  

4. Set up the database:

  
  

```sh

vim database/database.sqlite

```

```sh

php artisan  migrate

```

  

5. Link the storage directory:

  
  

```sh

php artisan  storage:link

```

  

6. Run the application:

  
  

```sh

php artisan  serve

```

  

7. Access the application by navigating to `http://localhost:8000` in your web browser.



8. For major Ui chage

```sh
npm run dev
```

  

## Additional Commands Used in the Project

  

The following commands were used to develop the project:

  

-  `php artisan make:auth`: Generates the authentication views and routes.

  

		if any error Command "make:auth" is not defined.

		`
        composer require laravel/ui
        `
        ```sh
		php artisan ui vue --auth
        ```
        ```sh
		php artisan migrate
        ```

-  `composer require laravel/ui`: Installs the Laravel UI package.

-  `php artisan ui vue --auth`: Generates the authentication views using Vue.js.

-  `php artisan make:controller ProfilesControllers`: Creates the profiles controller.

-  `composer require intervention/image`: Installs the Intervention Image package.

-  `php artisan make:policy ProfilePolicy -m Profile`: Creates the profile policy.

-  `php artisan telescope:install`: Installs Laravel Telescope for debugging and profiling.
