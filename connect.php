<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$db="add";
$con= new mysqli($dbhost,$dbuser,$dbpass,$db);
if(!$con){
    die(mysqli_error($con));  
}


?>