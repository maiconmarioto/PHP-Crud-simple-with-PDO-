<?php

namespace MM\Database;

use PDO;
define('DRIVER', 'mysql');
define('HOST', '172.17.0.2');
define('DATABASE','crud');
define('CHARSET', 'utf8');
define('USER','homestead');
define('PASS','secret');

class Database{

    public function Connect(){
        $pdo = new PDO("mysql:host=" . HOST . "; dbname=" . DATABASE . "; charset=" . CHARSET . ";", USER, PASS);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        return $pdo;
    }

}

