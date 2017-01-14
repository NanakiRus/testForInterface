<?php

namespace models;


trait EmailAndName
{

    public $email;
    public $name;

    public function getEmail()
    {
        return $this->email;
    }

    public function hasName()
    {
        return $this->name;
    }
}