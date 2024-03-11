<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "demo";

$link =mysqli_connect($server, $username, $password, $database);

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

?>