<?php

namespace models;

class User
    implements HasEmail
{
    public $id;
    public $email;
    public $name;
    public $phone;

    public function getEmail()
    {

    }
}