<?php


require_once('logn/User.class.php');

$user = new User('jkowalski','haslo');

echo '<pre>';
var_dump($user);

?>