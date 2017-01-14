<?php

namespace models;

class Person
    implements HasEmail, HasName
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