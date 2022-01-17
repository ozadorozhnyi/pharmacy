
## System Requirements

- PHP v.7.4 or higher
- Composer v.2.x or higher
- Git v.2.30.x or higher
- Database, on your choice:
  - MySQL 8.x or higer
  - PostgreSQL 12.9 or higher
  - MariaDB 10.x or higher

## Installation Instructions

Use commands, listed bellow to install a fresh copy of your application. 

- ```git clone https://github.com/ozadorozhnyi/pharmacy.git```
- ```cd pharmacy``` 
- ```composer install``` 
- ```php artisan key:generate```
- ```cp .env.sample .env```. Change settings (if needed).
- ```php artisan migrate:fresh --seed```
