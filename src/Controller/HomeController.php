<?php


namespace App\Controller;


use App\Services\FruitProvider;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController
{

    private FruitProvider $fruitProvider;

    /**
     * HomeController constructor.
     * @param FruitProvider $fruitProvider
     */
    public function __construct(FruitProvider $fruitProvider)
    {
        $this->fruitProvider = $fruitProvider;
    }


    public function defaultAction(Request $request){
        $page = $request->query->get("page", 1);

        return $this->render("home/index.html.twig", [
            "page" => $page,
            "fruitList" => $this->fruitProvider->getData()
        ]);
    }

    public function hello($age, $name){
        $fruit = $this->fruitProvider->getRandomFruit();
        return new Response("<h1>Hello $name vous avez $age ans vous aimez les $fruit</h1>");
    }

    public function add($n1, $n2){

        $result = ($n1 + $n2);
        $response = new Response("$n1 plus $n2 ça fait : $result");
        return $response;
    }

}