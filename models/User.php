<?php

namespace models;

class User
    implements HasEmailAndName
{
    public $id;
    public $phone;

    use EmailAndName;

    public function getEmail()
    {
        return $this->email;
    }

    public function hasName()
    {
        return $this->name;
    }
}