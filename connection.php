<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "money_tracker";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("Failed to Connect!");
}
