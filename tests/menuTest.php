<?php

use PHPUnit\Framework\TestCase;
use App\Menu;

class MenuTest extends TestCase
{
  public function testCreatePlateFood()
  {
    $food = 'Macaroni Bolognese';
    $price = '8.00';

    $create = new PlateFood();
    $result = $create->createPlateFood($food, $price);

    $this->assertEquals(true, $result);
  }  
}