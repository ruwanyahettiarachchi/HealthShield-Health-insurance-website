<?php

$serverName = "localhost";
$dbUsername = "admin";
$dbPassword = "Healthshield";
$dbName = "health_insurance";

$conn = mysqli_connect($serverName , $dbUsername , $dbPassword , $dbName);

if (!$conn){
    die("connection failed :" .mysqli_connect_error());
}