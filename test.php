<?php
require_once('config.php');

$v = array(
    'testVariable'=>"Wartość Testu",
);

$twig->display('test.html.twig', $v );

?>