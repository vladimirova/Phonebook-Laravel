=======
## Phonebook with Laravel 5.0 PHP Framework
	http://phonebook-applaravel.rhcloud.com/home
##How to install:
* [Step 1: Get the code](#step1)
* [Step 2: Use Composer to install dependencies](#step2)
* [Step 3: Create database](#step4)
* [Step 4: Start Page](#step6)

-----
<a name="step1"></a>
### Step 1: Get the code - Download the repository

    https://github.com/vladimirova/Phonebook-Laravel/archive/master.zip

Extract it in www(or htdocs if you using XAMPP) folder and put it for example in Phonebook-Laravel folder.

-----
<a name="step2"></a>
### Step 2: Use Composer to install dependencies

Laravel utilizes [Composer](http://getcomposer.org/) to manage its dependencies. First, download a copy of the composer.phar.
Once you have the PHAR archive, you can either keep it in your local project directory or move to
usr/local/bin to use it globally on your system.
On Windows, you can use the Composer [Windows installer](https://getcomposer.org/Composer-Setup.exe).

Then run:

    composer install
to install dependencies Laravel and other packages.

-----

<a name="step3"></a>
### Step 3: Create database

If you finished first three steps, now you can create database on your database server(MySQL). You must create database
with utf-8 collation(uft8_general_ci), to install and application work perfectly.
After that, copy .env.example and rename it as .env and put connection and change default database connection name, only database connection, put name database, database username and password.


Now that you have the environment configured, you need to create a database configuration for it. For create database tables use this command:

    php artisan migrate

And to initial populate database use this:

    php artisan db:seed

If you install on your localhost in Phonebook-Laravel folder , you can type on web browser:

	http://localhost/Phonebook-Laravel/public
	
You can create virtual host for better work.

If you want you can run

    php artisan key:generate
    
this will generate APP_KEY and save it in .evn file automatically. This command it's not necessary.

-----
<a name="step4"></a>
### Step 4: Start Page

You can now login with:

    username: admin@admin.com
    password: admin
OR user

    username: user@user.com
    password: user

-----

