<?php
namespace App;

$servername = "127.0.0.1";
$database = "menu_list";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}
 echo "Connected successfully";
mysqli_close($conn);
    ?>
