
<?php
require_once('config.php');
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
            'message' => "Błąd "
        );
        $twig->display('message.html.twig', $v);;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
    }
}

else{

    $twig->display('register.html.twig');
}

?>    
