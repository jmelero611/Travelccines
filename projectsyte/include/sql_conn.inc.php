<?php

$servername = "localhost";
$username = "root";
$password = "hla_ii_pockets";
// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if (!$conn) { die("Connection failed: " . mysqli_connect_error());}
print "Connected successfully<br>";
mysqli_query($conn, "USE traveccines_db");
echo "Conected to db <br>";