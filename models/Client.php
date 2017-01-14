<?php

namespace models;

class Client
    implements HasEmail, HasName
{
    public $id;
    public $phone;
    public $inn;
    public $firm_name;

    public function getEmail()
    {
        return 'client@mail.ru';
    }

    public function hasName()
    {
        return 'Фирма';
    }

}