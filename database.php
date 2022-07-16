<?php

$hostname     = "localhost";
$username     = "root";
$password     = "password2$";
$databasename = "photosharingwebapp";
// establish connection to the database 
$conn = new mysqli($hostname, $username, $password, $databasename);
// check if there is no error connecting to the database
if ($conn->connect_error) {
    die("Unable to Connect to photo gallery database: " . $conn->connect_error);
}
