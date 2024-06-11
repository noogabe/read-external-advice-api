# Read external advice api
## Requirements
* [Composer](https://getcomposer.org/download/)
* [Xampp (Apache, PHP and Mysql)](https://www.apachefriends.org/download.html)

## Installation
1. **Clone the repository**
 ```bash
 git clone git@github.com:noogabe/events-laravel.git
 ```

2. **Install dependencies**
```bash
composer install
```
3. **Generate the application key**
```bash
php artisan key:generate
```

4. **Create a file called .env and copy and paste the contents of env.example**

5. **Start Xampp**

6. **In Mysql, at http://localhost:80/phpmyadmin/ create a database called 'events'**

7. **Run the migrations**
```bash
php artisan migrate
```

8. **Start the server**
```bash
php artisan serve
```

9. **Run this command to get an advice from the api**
```bash
php artisan inspire
```   
