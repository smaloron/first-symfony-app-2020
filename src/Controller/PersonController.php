<?php

namespace App\Controller;

use App\Entity\Person;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PersonController extends AbstractController
{
    /**
     * @Route("/person", name="person")
     */
    public function index()
    {
        //Liste de toutes les personnes
        $personRepository = $this->getDoctrine()->getRepository("App:Person");
        $personList = $personRepository->findAll();

        return $this->render('person/index.html.twig', [
            'controller_name' => 'PersonController',
            'personList' => $personList
        ]);
    }

    /**
     * @Route("/person/{id}", name="person_details", requirements={"id":"\d+"})
     * @param $id
     */
    public function details($id){
        $personRepository = $this->getDoctrine()->getRepository("App:Person");
        $person = $personRepository->find($id);

        return $this->render('person/details.html.twig', [
            'controller_name' => 'PersonController',
            'person' => $person
        ]);
    }
}
