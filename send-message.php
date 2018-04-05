<?php

require_once ('vendor/autoload.php');
use Twilio\Rest\Client;

// El SID de su cuenta y el Token de autenticación de twilio.com/console
$account_sid = 'AC443e2436f41e96aaaccaf046cfcd65ad';
$auth_token = '26b163b072935fab99f4715689254694';
// In production, these should be environment variables. E.g.:
// $auth_token = $_ENV["TWILIO_ACCOUNT_SID"]

// número de Twilio que tenemos con capacidades de SMS
$twilio_number = "+56945950470";

$client = new Client($account_sid, $auth_token);
$client->messages->create(
    // Donde se envia el sms (telefono persona que se logea?)
    '56990855454',
    array(
        'from' => $twilio_number,
        'body' => 'CHUPALO!'
    )
);

?>