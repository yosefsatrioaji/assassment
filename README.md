# How To Run Locally

- Make sure php 7.4 or newer and composer is installed
- Rename .env.production to .env
- Make assessment database at local phpMyAdmin
- Open cmd on root of project folder
- Run this command
```sh
composer install
```
```sh
php spark migrate
```
- (optional) seed the database with dummy data
```sh
php spark db:seed KategoriSeeder
```
```sh
php spark db:seed PracticeOneSeeder
```
```sh
php spark db:seed PracticeTwoSeeder
```
