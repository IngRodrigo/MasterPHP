<?php
class Usuario{
    //constante
    //ademas de ser constante es estatica, es decir se implementa como una variable estatica normal
    const URL_COMPLETA="http://localhost";
    
    
    public $email;
    public $password;

    function getEmail() {
        return $this->email;
    }

    function getPassword() {
        return $this->password;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setPassword($password) {
        $this->password = $password;
    }


}


$usuario= new Usuario();
echo Usuario::URL_COMPLETA;//se accede como una static
var_dump($usuario);