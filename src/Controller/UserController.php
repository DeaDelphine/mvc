<?php 

use Symfony\Component\HttpFoundation\Response;

class UserController 
{
public function register(){
    return new Response('<h1>Page Inscription | CONTROLLER </h1>');
}

public function login(){
    return new Response('<h1>Page Se Connecter | CONTROLLER </h1>');
}

public function logout(){
    return new Response('<h1>Page Se Déconnecter | CONTROLLER </h1>');
}
}