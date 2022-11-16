<?php


require_once('login.php');

$user = new User('jkowalski','haslo');
$user->login();
echo '<pre>';
var_dump($user);

?>