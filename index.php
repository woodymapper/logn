<?php
use  Steampixel\Route;
require_once('config.php');
require_once('login.php');

Route::add('/', function(){ 
    echo "Strona Główna";
});

Route::add('/login', function(){ 
    //echo "Strona Logowania";
    global $twig;
    $twig->display("login.html.twig");
});
Route::add('/register', function(){ 
   // echo "Strona Rejestracji";
    global $twig;
    $twig->display("register.html.twig");
});




Route::run('/logn')
?>