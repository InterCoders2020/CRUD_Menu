<?php
use PHPUnit\Framework\TestCase;
use App\Plate;

final class Platetest extends TestCase 
{
    public function test_add_plate_with_name ()
    {
        $plate = new Plate('Pizza', 6,00);
        $this-> assertEquals('Confirmed addition', $plate->addItem());
    }

    public function test_delete_plate_from_menu () 
    {
        $plate = new Plate('Pizza');
        $this-> assertEquals('Plate deleted', $plate->deleteItem());
    }
}