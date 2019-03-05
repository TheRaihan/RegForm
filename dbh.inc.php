<?php

$servername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "RegForm";

$conn = mysqli_connect($servername,$dbUsername,$dbPassword,$dbName);

if(!$conn)
{
    die("Conncection Failed: ".mysqli_connect_error() );
}