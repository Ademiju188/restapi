PHP version 8.1 is required

Run Composer 

    $ composer install

Set Environment

    $ cp .env.example .env

Set the application key

    $ php artisan key:generate

Create Database in .env

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=restapi_db
    DB_USERNAME=root
    DB_PASSWORD=


Run migrations

    $ php artisan migrate 

Start PHP Server

    $ php artisan serve

To insert Data to database using POSTMAN

    API LINK: http://127.0.0.1:8000/api/users/takes
    METHOD:    POST
    
Use this JSON form to insert data to database 

    { 
        "first_name":"", 
        "last_name":"", 
        "email":"", 
        "mobile":"", 
        "password":"" 
    }

To Records from Database

    API LINK: http://127.0.0.1:8000/api/users
    METHOD:    GET

Thanks
