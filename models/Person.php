<?php

namespace models;

class Person
    implements HasEmailAndName
{
    public $id;
    public $email;
    public $name;
    public $phone;
    public $client_id;

    public function getEmail()
    {
        return $this->email;
    }

    public function hasName()
    {
        return $this->name;
    }

}