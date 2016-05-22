<?php

namespace MM\Interfaces;

interface IModel{
    public function create($attributes);
    public function read();
    public function update($field,$value , $attributes);
    public function delete($field,$value);
    public function findBy($field,$value);
}