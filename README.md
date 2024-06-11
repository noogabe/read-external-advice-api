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

3. **Create a file called .env and copy and paste the contents of env.example**

4. **Start Xampp**

5. **In Mysql, at http://localhost:80/phpmyadmin/ create a database called 'events'**

6. **Run the migrations**
```bash
php artisan migrate
```

7. **Start the server**
```bash
php artisan serve
```
