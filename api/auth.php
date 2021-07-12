<?php 
// Generating JWT

//Application Key
$key = '123456';

//Header Token
$header = [
    'typ' => 'JWT',
    'alg' => 'HS256'
];

//Payload - Content
$payload = [
    'name' => 'Gabriel Oliveira',
    'email' => 'gabriel.olv2002@gmail.com',
];

//JSON
$header = json_encode($header);
$payload = json_encode($payload);

//Base 64
$header = base64_encode($header);
$payload = base64_encode($payload);

//Sign
$sign = hash_hmac('sha256', $header . "." . $payload, $key, true);
$sign = base64_encode($sign);

//Token
$token = $header . '.' . $payload . '.' . $sign;

