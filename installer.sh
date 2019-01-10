#!/bin/bash

composer install

php artisan key:generate

composer require "laravelcollective/html":"^5.4.0"

mv .env.example .env

php artisan serve
