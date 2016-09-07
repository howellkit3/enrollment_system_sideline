<?php

$user = "root";
$pass = "";
$database = "sync_monitoringsystem";
//$database = "";
$host = "localhost";
//$host = "localhost";

$con = new PDO("mysql:host=$host;dbname=$database", $user, $pass);
