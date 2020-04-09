<?php
namespace App;
include ('DBConnection.php');

final class Plate {

    public $name;
    public $price;

    public function __construct (string $name = 'Undefined', Float $price = 0.00)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function addItem ()
    { 
        $connect = StartConnection();

         if ($this->name != null and $this->price != null )
            {
                $query = "INSERT INTO menu_list(name, price) VALUES ('$this->name', '$this->price')";
                 mysqli_query($connect, $query);
             }
            
        return 'Confirmed addition';
    }

    public function deleteItem ()
    { 
        $connect = StartConnection();
        $query = "DELETE FROM menu_list(name, price) VALUES ($this->name)";
                mysqli_query($connect, $query);

        return 'Plate deleted';
    } 
}