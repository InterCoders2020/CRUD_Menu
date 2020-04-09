<?php 
namespace App;

      function StartConnection()
    {
        $DB_server = "localhost";
        $DB_username = "root";
        $DB_password = "";
        $DB_name = "menu";

        $connect = mysqli_connect($DB_server,$DB_username,$DB_password,$DB_name);   
        
        if (!$connect) 
            {
                die("Connection failed: " . mysqli_connect_error());
            }
            echo "Connected successfully";

            return $connect;

            mysqli_close($connect);            
    }           
?>
       