<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{

    /**
     * @Route(  "/contact/{domain}/{budget}",
     *          defaults={"domain": "production", "budget": "10"},
     *          requirements={
     *              "domain": "production|dev|commercial",
     *              "budget": "\d+"
     *          }
     * )
     * @return Response
     */
    public function index($domain, $budget){
        return $this->render("contact.html.twig", [
            "domain" => $domain,
            "money" => $budget
        ]);
    }

}