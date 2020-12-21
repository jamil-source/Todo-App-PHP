<?php

class Dbh {
    private $servername;
    private $username;
    private $password; 
    private $db_name;

    public function connect() {
        $this->servername = "localhost";
        $this->username = "root";
        $this->password = "root";
        $this->db_name = "u04_todo";

        // Skapar en väg till vår databas
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->db_name);

        // En errorhandling som skickar ett meddelande om något går snett vid uppkoppling
        if(!$conn){
          die("Connection failed: " . mysqli_connect_error());
        }
        return $conn;

    }
}
?>