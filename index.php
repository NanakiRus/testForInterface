<?php

require __DIR__ . '/autoload.php';

$client = new \models\Client();
$user = new \models\User();
$person = new \models\Person();


$user->email = 'test@test.ru';
$user->name = 'Уася';

$client->firm_name = 'ВариМет и Ко';

function sendMail($name, $email) {
    echo 'почта для ' . $name . ' отправлена на адрес ' . $email;
}

sendMail($user->name, $user->getEmail());

sendMail($client->firm_name, $client->getEmail());