<?php

$hostname = 'localhost';
$database = 'IT210';
$username = 'it210';
$password = 'itrocks';
$table = 'Users';
$table2 = 'Comments';

$m_username = "jordanpetersonitrocks@gmail.com";
$m_password = "itrocks1";
$m_name = "jordanpetersonitrocks";



$connection = mysqli_connect($hostname, $username, $password, $database) or die(mysqli_connect_error());

// $conn = new mysqli($hostname, $username, $password);



?>