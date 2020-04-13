<?php
namespace App;

class CRUD
{   
    private $create;

    
    public function createFood($food)
    {
        $this->create = trim($food);
    }
    public function createPrice($price)
    {
        $this->create = trim($price);
    }


    public function getFood()
    {
        return ($this->create); 
    }
    public function getPrice()
    {
        return ($this->create); 
    }


    public function updateFood($food, $updateFood)
    {
        $datos = array_replace($food, array($updateFood));
        return $datos;
    }
    public function updatePrice($price, $updatePrice)
    {
        $datos = array_replace($price, array($updatePrice));
        return $datos;
    }


    public function deleteFood($food, $deleteFood)
     {
         $datos = array_diff($food, array($deleteFood));
         return $datos;
     }
    public function deletePrice($price, $deletePrice)
    {
        $datos = array_diff($price, array($deletePrice));
        return $datos;
    }
}
