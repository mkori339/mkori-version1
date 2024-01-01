<?php
$host="localhost";
$user="root";
$pass="";
$dbname="mkori";
$con=mysqli_connect($host,$user,$pass,$dbname);
if(!$con){
    echo("not connected.");
}

