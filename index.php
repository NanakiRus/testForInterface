<?php

require __DIR__ . '/autoload.php';

$client = new \models\Client();
$user = new \models\User();
$person = new \models\Person();


$user->email = 'test@test.ru';
$user->name = 'Уася';

$client->firm_name = 'ВариМет и Ко';

$person->email = 'someshit@shit.net';
$person->name = 'Георг';

function sendMail(\models\HasEmailAndName $obj) {
    echo 'почта для ' . $obj->hasName() . ' отправлена на адрес ' . $obj->getEmail();
}

sendMail($user);

sendMail($client);

sendMail($person);