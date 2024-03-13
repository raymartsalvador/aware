<?php
$SERVER = "localhost";
$USER = "root";
$PASSWORD = "";
$DATABASE = "aware_db";



// Create connection
$connection = new mysqli($SERVER, $USER, $PASSWORD, $DATABASE);

// Check connection
if ($connection->connect_error) {
  die("Connection failed: " . $connection->connect_error);
}