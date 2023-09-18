<?php

$con = mysqli_connect("localhost","root","","students","3306");

if(!$con){
    //echo "Failed to connect Database";
    die('Connection Failed!!!'. mysqli_connect_error());

}

?>