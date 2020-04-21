<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController
{

    /**
     * @Route(  "/contact/{domain}/{budget}",
     *          defaults={"domain": "production"},
     *          requirements={
     *              "domain": "production|dev|commercial",
     *              "budget": "\d+"
     *          }
     * )
     * @return Response
     */
    public function index($domain, $budget){
        return new Response("Page des contacts pour $domain");
    }

}