<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Cronjob Laravel

Laravel's command scheduler allows you to fluently and expressively define your command schedule within Laravel itself. When using the scheduler, only a single Cron entry is needed on your server. This responsitory introduces you how to create a simple Cronjob.

You can read more about Taks scheduling [here](https://laravel.com/docs/5.6/scheduling)

## Setup project

First create new project, In your terminal, cd to your root folder of your server. I assume you have composer installed. Then run this command:
```console
composer create-project laravel/laravel Cronjob-demo-laravel
```

## Create Command

After installation is complete, cd into your project and run this command:
```console
php artisan make:command TestCronjob
```

This is going to create a command file inside ..\app\Console\Commands, TestCronjob.php. You can replace 'TestCrojob' with anything you want. After that, change these two files below follow my files:
- TestCronjob.php
- app\Console\Kernel.php

## Run Cronjob

First, run this command to check if your Cronjob is registered to Artisan. You must see it in the list:
```console
php artisan list
```
After your command registered to the command, run the below command:
```console
php artisan TestCronjob:testCronjobFunction
```

## More

What if you want to set the crone job to run automatically without initiating using command. Just run this command:
```console
crontab -e
```

This will open server crontab file, paste this code inside, save it and exit.
```console
* * * * * php /path/to/artisan schedule:run >> /dev/null 2>&1
```
