<?php


namespace App\Services;


class FruitProvider
{
    private $fruitList = [
        "Pommes", "Poires", "Oranges", "Mandarines"
    ];

    /**
     * Liste des fruits
     * @return string[]
     */
    public function getData(){
        return $this->fruitList;
    }

    /**
     * Un fruit au hasard dans la lsite
     * @return string
     */
    public function getRandomFruit(){
        return $this->fruitList[mt_rand(0, count($this->fruitList)-1)];
    }

}