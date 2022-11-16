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
        $this->FirstName = "";
        $this->LastName = "";


}


public function register(){

$passwordhash = password_hash($this->password, PASSWORD_ARGON2I);
$q = "INSERT INTO user VALUES (NULL, ?, ?, ?, ?)";
$db = new mysqli('localhost', 'root', '', 'loginform2');
$pq = $db-> prepare($q);
$pq -> bind_param('ssss', $this->login, $passwordhash, $this->FirstName, $this->LastName);
$pq -> execute(); var_dump($pq);
}

public function login(){
    $q = "SELECT * FROM user WHERE login = ?";
    $db = new mysqli('localhost', 'root', '', 'loginform2');
    $pq = $db-> prepare($q);
    $pq -> bind_param('s', $this->login);
    $pq -> execute(); 
    $result = $pq->get_result();
    if(password_verify($this->password, $passwordhash)){
    $this->id = $row['$id'];
    $this->FirstName = $row['FirstName'];
    $this->LastName = $row['LastName'];
    echo"Dobry Login";
    
    }
    else{
        echo"Zły Login";
    }
    
    if($result->num_rows == 1){
    
        $row = $result->fetch_assoc();
    
    }
    else{
        echo"Brak Loginu";
        return ;
    }
    }
    
    
}

?>