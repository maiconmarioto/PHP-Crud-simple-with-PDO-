<?php

namespace MM\Database;

use MM\Interfaces\IModel;
use MM\Database\Attributes;
use MM\Database\Database;
use PDOException;

class Model implements IModel
{

    private $db;

    public function __construct()
    {
        $db = new Database();
        $this->db = $db->Connect();
    }

    public function create($attributes)
    {
        $attr = new Attributes;
        $fields = $attr->createFields($attributes);
        $values = $attr->createParams($attributes);

        $query = "INSERT INTO $this->table ($fields) VALUES ($values)";
        $pdo = $this->db->prepare($query);
        $bindParams = $attr->bindCreateParameters($attributes);

        try {
            $pdo->execute($bindParams);
            return $this->db->lastInsertId();
        } catch (PDOException $e) {
            dump($e->getMessage());
        }


    }

    public function read()
    {
        $query = "select * from $this->table";
        $pdo = $this->db->prepare($query);
        try{
            $pdo->execute();
            return $pdo->fetchAll();
        }catch(PDOException $e){
            dump($e->getMessage());
        }

    }

    public function update($field,$value,$attributes)
    {
        $attrUpd = new Attributes();
        $fields = $attrUpd->updateFields($attributes);

        $query = "update $this->table set $fields where $field = $value";
        $pdo = $this->db->prepare($query);
        $bindParams = $attrUpd->bindCreateParameters($attributes);
        try{
            $pdo->execute($bindParams);
            return $pdo->rowCount();
        } catch (PDOException $e){
            dump($e->getMessage());
        }
    }

    public function delete($field, $value)
    {
        $query = "delete from $this->table where $field = :value";
        $pdo = $this->db->prepare($query);
        try{
            $pdo->bindParam(":value", $value);
            $pdo->execute();
            return $pdo->rowCount();
        }catch (PDOException $e){
            dump($e->getMessage());
        }
    }

    public function findBy($field, $value)
    {
        $query = "select * from $this->table where $field = :value";
        $pdo = $this->db->prepare($query);
        try{
            $pdo->bindParam(":value", $value);
            $pdo->execute();
            return $pdo->fetch();
        }catch (PDOException $e){
            dump($e->getMessage());
        }    }
}