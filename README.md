# Api PHP/Laravel backend for News feed with endless news loading

## Installation
****Prerequisites:****

- PHP >= 8.1
- Composer
- MySQL
- Git

Clone the repository by running the following command in your terminal:

```bash
git clone https://github.com/alexindima/NewsFeed-api-laravel.git
```

**Installation**

Install the project dependencies by running the following command:

```bash
composer install
```

Copy the .env.example file to .env

```bash
cp .env.example .env
```

Update the .env file with your database credentials and other settings

```makefile
APP_NAME=NewsFeed
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost
APP_PORT=8000
SANCTUM_STATEFUL_DOMAINS="localhost:4200,localhost:8000"

LOG_CHANNEL=stack

DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret

SESSION_SECURE_COOKIE=false
SESSION_DRIVER=cookie
SESSION_LIFETIME=240
SESSION_DOMAIN="localhost"
```
Update the DB_DATABASE, DB_USERNAME, and DB_PASSWORD variables to match your MySQL database credentials.

Generate a new application key

```bash
php artisan key:generate
```

Run the database migrations and seeding

```bash
php artisan migrate:fresh --seed
```

**Running the application**
To run the application, run the following command:

```bash
php artisan serve
```

Once the application has compiled successfully, application runs on  http://localhost:4200/admin/
