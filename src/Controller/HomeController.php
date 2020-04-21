<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;

class HomeController
{

    public function defaultAction(){
        return new Response("Hello default");
    }

    public function hello($age, $name){
        return new Response("<h1>Hello $name vous avez $age ans</h1>");
    }

}