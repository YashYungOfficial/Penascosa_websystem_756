<?php
$seervername = "localhost";
$username =  "root";
$password = "";
$database = "penascosa_756";


$conn = new mysqli($servename, $username, $password, $database);

if($conn -> connect_error){
    die("Connection failed: " . $conn -> connect_error);
}

?>