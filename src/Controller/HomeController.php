<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class HomeController
{

    public function defaultAction(Request $request){
        $page = $request->query->get("page", 1);

        return new Response("Hello default vous êtes sur la page $page");
    }

    public function hello($age, $name){
        return new Response("<h1>Hello $name vous avez $age ans</h1>");
    }

    public function add($n1, $n2){

        $result = ($n1 + $n2);
        $response = new Response("$n1 plus $n2 ça fait : $result");
        return $response;
    }

}