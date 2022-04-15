<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


***
Please note I removed a lot of files from gitignore on the second commit so that all the files are available to see.
***

***How to run this project.***

Programs I used:
* Visual Studio Code
* XAMPP - Apache and MySQL - In windows environment

XAMPP setup:
* Everything is on default settings.
Please see the .env file for MySQL Host, port, username and password. All settings left on default. If your settings are different please adjust them in .env

*Note, do not change any mail settings in the.env - unless you would like your own email set up.



Instructions:
* Open XAMPP, run Apache and MySQL.
* In the browser, go to phpmyadmin and create a database named "proPayDB"

* Open the project in the IDE -  in my case I opened in Visual Studio Code.
* Then go to your terminal in the IDE (easiest and quickest way to run the program)
* In the IDE run the following commands:
    * php artisan migrate  (this will create the tables you need to run the project - make sure it goes through, check the data "proPayDB" created tables)
    * php artisan serve    (this will run your project)

Follow the link provided in IDE, I use "localhost:8000" and my project opens in the browser.


***Working through the Web application***
 
Top right you should see a Login and register function. Register yourself and after you have registered you can use the Web application.

*When you go register a new client on the Web app, the person will receive an email to notify them they have been added to the system. Please ensure you enter the email correct so that the person receives the email when they have been added.


Enjoy!
  
