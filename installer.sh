#!/bin/bash

composer install

mv .env.example .env

php artisan key:generate

composer require "laravelcollective/html":"^5.4.0"

php artisan serve
