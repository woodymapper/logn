<?php


require_once('login.php');

$user = new User('jkowalski','haslo');
$user->register();
echo '<pre>';
var_dump($user);

?>