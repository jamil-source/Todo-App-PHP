<?php
include 'db.php';
$query = "SELECT * FROM todos";
$result = mysqli_query($conn, $query);


// Vad som händer här är att så fort vi trycker på submit i vårt formulär
// Då tar vi dom unika namnen och sätter dessa som värden för vår todos tabell i vår db
// till sist så utför vi en error handling som kollar om uppkopplingen till todos tabellen funkar 
// om allt är check, då refreshar sidan och en ny task läggs till

if(isset($_POST['submit']))
{
    $task = $_POST['todo'];
    $importance = $_POST['importance'];
    $start = $_POST['start'];
    $deadline = $_POST['deadline'];

    $sql = "INSERT INTO todos (task, importance, start, deadline)
    VALUES ('$task', '$importance', '$start', '$deadline')";
    $result_post = mysqli_query($conn, $query);

    try {
        if ($conn -> query($sql)) {
            header('Refresh:0;');
          } else {
            throw new Exception ('Something went wrong with the connection to the database.');
          } 
    } catch (Exception $ex) {
        die ('Error: '.$ex->getMessage());
    }
}