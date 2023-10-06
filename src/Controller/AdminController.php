<?php 
use Symfony\Component\HttpFoundation\Response;

class AdminController 
{
public function dashbord(){
    return new Response('<h1>Page Dashboard| CONTROLLER </h1>');
}

public function user(){
    return new Response('<h1>Page Utilisateur | CONTROLLER </h1>');
}
}