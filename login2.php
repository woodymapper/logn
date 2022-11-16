<?php


require_once('login.php');

$user = new User('jkowalski','haslo');

echo '<pre>';
var_dump($user);

?>