<?php

namespace models;

class User
    implements HasEmailAndName
{
    public $id;
    public $email;
    public $name;
    public $phone;

    public function getEmail()
    {
        return $this->email;
    }

    public function hasName()
    {
        return $this->name;
    }
}