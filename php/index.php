<?php

$server = "localhost";
$user = "root";
$pass = "";
$db = "tipiquisimos";

$conexion = mysqli_connect($server,$user,$pas,$db);

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
  }
  