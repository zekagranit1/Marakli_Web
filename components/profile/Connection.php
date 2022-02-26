<?php
$dbhost = "localhost";
$dbname = "marakli_web";
$dbpass = "";
$dbuser = "root";

$con = new mysqli($dbhost,$dbuser,$dbpass,$dbname);

// Check connection
if ($con -> connect_errno) {
  echo "Failed to connect to MySQL: " . $con -> connect_error;
  exit();
}