<?php


class User{
private int $id;
private string $login;
private string $password;
private string $FirstName;
private string $Lastname;





    public function __construct(string $Login, string $password){

    $this->login = $login = "a";
    $this->password = $password;



}


public function register(){

$passwordhash = password_hash($this->password, PASSWORD_ARGON2I);
$q = "INSERT INTO user VALUES (NULL, ?, ?, ?, ?)";
$db = new mysqli('localhost', 'root', '', 'LoginForm2');
$pq = $db-> perepare($q);
$pq -> bind_param('ssss', $this->login, $passwordhash, $this->FirstName, $this->LastName);
$pq -> execute();
}


}



?>