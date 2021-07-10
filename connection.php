<?php

$conn = mysqli_connect('localhost','root','root','ligamagic');

if(!$conn){
    echo('error mysql');
    exit;
}
