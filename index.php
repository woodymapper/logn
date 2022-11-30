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
    if(isset($_REQUEST['login']) && isset($_REQUEST['password'])) {
        //jeżeli już podano dane do logowania
        
        $user = new User($_REQUEST['login'], $_REQUEST['password']);
        if($user->login()) {
            //echo "Zalogowano poprawnie użytkownika: ".$user->getName();
            $v = array(
                'message' => "Zalogowano poprawnie użytkownika: ".$user->getName(),
            );
            $twig->display('message.html.twig', $v);;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
        } else {
            //echo "Błędny login lub hasło";
            $twig->display('login.html.twig', 
                                ['message' => "Błędny login lub hasło"]);
        }
    } else {
        //jeśli jeszcze nie podano danych
        //wyświetl formularz logowania
        $twig->display('login.html.twig');
    }




    'post';
});
Route::add('/register', function(){ 
   // echo "Strona Rejestracji";
    global $twig;
    if(isset($_REQUEST['login']) && isset($_REQUEST['password'])) {
        require_once('login.php');
        $user = new User($_REQUEST['login'], $_REQUEST['password']);
        if($user->register()) {
            $v = array(
                'message' => "Registracja poprawna"
            );
            $twig->display('message.html.twig', $v);;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
        } else {
            $v = array(
                'register' => "Błąd "
            );
            $twig->display('register.html.twig', $v);;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
        }
    }

});




Route::run('/logn')
?>