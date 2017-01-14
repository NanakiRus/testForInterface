<?php

require __DIR__ . '/autoload.php';

$client = new \models\Client();
$user = new \models\User();
$person = new \models\Person();


$user->email = 'test@test.ru';
$user->name = 'Уася';

function sendMail($name, $email) {
    echo 'почта для ' . $name . ' отправлена на адрес ' . $email;
}

sendMail($user->name, $user->email);