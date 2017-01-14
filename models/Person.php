<?php

namespace models;

class Person
    implements HasEmailAndName
{
    public $id;
    public $phone;
    public $client_id;

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