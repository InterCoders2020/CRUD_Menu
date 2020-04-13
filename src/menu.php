<?php
namespace App;
use App\Connection;

final class Menu
{
    public function Connect(){
        return $connection= mysqli_connect("127.0.0.1", "root", "", "menu_list"); 
}
    private function CreatePlateFood()
    {
        $connection= new Connection();
        $connect= $connection->connect();

        

    }
}