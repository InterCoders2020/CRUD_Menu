<?php

use PHPUnit\Framework\TestCase;
use App\CRUD;

class CRUDTest extends TestCase
{

    public function setUp() : void
    {
        $this->read = new CRUD;
        $this->create = new CRUD;
        $this->update = new CRUD;
        $this->delete = new CRUD;
    }

    
    public function test_create_plate_food()
    {
        $this->create->createFood('Macarroni');
        $this->assertEquals('Macarroni', $this->create->getFood());
    }
    public function test_create_price()
    {
        $this->create->createPrice('8.00');
        $this->assertEquals('8.00', $this->create->getPrice());
    }


    public function testUpdateFood()
    {
        $food = ['Macarroni', 'Pizza'];
        $updateFood = 'Macarroni';
        $this->update->updateFood($food, $updateFood);
        $this->assertContains($updateFood, $food) ;
    }
    public function testUpdatePrice()
    {
        $price = ['8.00', '3.00'];
        $updatePrice = '8.00';
        $this->update->updatePrice($price, $updatePrice);
        $this->assertContains($updatePrice, $price) ;
    }


    public function testDeleteFood()
    {
        $food = ['Macarroni', 'Pizza'];
        $deleteFood = 'Macarroni';
        $this->delete->deleteFood($food, $deleteFood);
        $this->assertContains($deleteFood, $food) ;
    }
    public function testDeletePrice()
    {
        $price = ['8.00', '7.00'];
        $deletePrice = '8.00';
        $this->delete->deletePrice($price, $deletePrice);
        $this->assertContains($deletePrice, $price) ;
    }
}
