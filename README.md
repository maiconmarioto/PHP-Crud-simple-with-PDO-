## Simple Crud using Materialize and PHP with PDO and OO
* MariaDB 5.5
* Nginx 1.8.0
* PHP 5.6
* Docker
[More info](https://github.com/dydx/alpine-nginx-php-mariadb)

## Usage
* Run `docker-compose up -d` in terminal 
* Then run ` docker-compose ps ` to get the name of mysql container
* With the container name, run `docker inspect container_name | grep IPAddress` and you'll see the container ip
* Run `mysql -u homestead -r -h 172.17.0.2` to enter on mysql console inside the container
* Inside mysql console run the script 'database.sql' 
* After that go to localhost (on linux, or docker-machine ip if you're on a windows or mac)



