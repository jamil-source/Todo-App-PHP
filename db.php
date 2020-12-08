<?php
$servername = "localhost";
$username = "root";
$password = "root";
$db_name = "u04_todo";

// Skapar en väg till vår databas
$conn = mysqli_connect($servername, $username, $password, $db_name);

// En errorhandling som skickar ett meddelande om något går snett vid uppkoppling

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
?>