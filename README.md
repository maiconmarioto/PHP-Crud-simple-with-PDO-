## Simple Crud using Materialize and PHP with PDO and OO


* MariaDB 5.5
* Nginx 1.8.0
* PHP 5.6
* Docker

## Usage
* run `docker-compose up -d` in terminal 
* then run ` docker-compose ps ` to get the name of mysql container
* with the container name, run `docker inspect container_name` and the ip of container will appear
* run `mysql -u homestead -r -h 172.17.0.2` to enter on mysql console inside the container
* inside mysql console run the script 'database.sql' 
* after that go to localhost (on linux, or docker-machine ip if you're on a windows or mac)



