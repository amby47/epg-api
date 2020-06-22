# EPG API


# Setup

## Pre-requisites 

### PHP Requirements
- PHP >= 7.2.5
- BCMath PHP Extension
- Ctype PHP Extension
- Fileinfo PHP extension
- JSON PHP Extension
- Mbstring PHP Extension
- OpenSSL PHP Extension
- PDO PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension
- Laravel utilizes Composer to manage its dependencies. So, before using Laravel, make sure you have Composer installed on your machine.

### Laravel Installation
Please use the following commands to installed laravel once PHP and composer are installed

`composer global require laravel/installer`

### MySQL Requirements
This application requires MySQL server. Please install MySQL server for your operating machine. Once installed, create a fresh database for this applicaiton.


## Getting started

In order to get the application setup, please fulfil all the requirements in the Pre-requisites section above. Once filled and the application repository is cloned into your machine, follow the instructions below:

Step 1 - Rename .env.example file in the application folder to .env file.
Step 2 - Open .env file and change the following variables to your own personal database credentials and details
```
DB_CONNECTION=mysql
DB_HOST=
DB_PORT=
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
```
Step 3 - Run the following commands while in the application folder:

`$ php artisan migrate`

`$ php artisan db:seed`

The commands above will ensure that your database schema is created and the database is seeded.

Step 4 - To start the application, run the command below while in the application folder:

`$ php artisan serve`

The command above will start the application on `http://localhost:8000`. 


## Testing

There are tests created for this application. In order to run the automated unit tests, please run the following command while being in the application directory folder:

`$ php artisan test`


## Extra files
As per the requirements, two extra files were requested as part of this project. These files can be found in the extra/ folder. Below is the list of files in `extra` folder:

- `extra/epg-api-postman` - Postman collection file with 3 requests to EPG api
- `extra/epg-erd.png` - ERD Diagram of EPG API database.
