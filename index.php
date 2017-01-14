<?php

require __DIR__ . '/autoload.php';

$client = new \models\Client();
$user = new \models\User();
$person = new \models\Person();


function sendMail($name, $email) {
    echo 'почта для ' . $name . ' отправлена на адрес ' . $email;
}