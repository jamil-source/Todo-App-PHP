<?php
include_once 'db.php';
include_once 'error_handler.php';


$connection = new Dbh;
$conn = $connection->connect();

class TodoCrud extends Dbh{
    
    // READ
    public function getAllUsers() {
      $sql = "SELECT * FROM todos";
      $result = $this->connect()->query($sql);
      return $result;

    }

    // CREATE  
    // Vad som händer här är att så fort vi trycker på submit i vårt formulär
    // Då tar vi dom unika namnen och sätter dessa som värden för vår todos tabell i vår db
    // till sist så utför vi en error handling som kollar om uppkopplingen till todos tabellen funkar 
    // om allt är check, då refreshar sidan och en ny task läggs till

    public function createTodo(){
      if(isset($_POST['submit']))
      {
          global $conn; 
          $task = $_POST['todo'];
          $importance = $_POST['importance'];
          $start = $_POST['start'];
          $deadline = $_POST['deadline'];
      
          if(!isset($task) || trim($task) == ''){
            echo "<h2>FILL IN TASK!!!!!!</h2>";
          } else {
            $sql_create = "INSERT INTO todos (task, importance, start, deadline)
            VALUES ('$task', '$importance', '$start', '$deadline')";
            $result_post = mysqli_query($conn, $sql_create);
            
            if(!$result_post)
            {
              die("Ett fel har uppstått");
            } else {
              header("Location: index.php");
            }
          }
      }
    }

    // DELETE
    // Den här gången använder vi metoden GET
    // När delete knappen(länken) är tryckt så ändras vårat url  beroende på vårat task id eftersom vi satt href= $row["id"].
    // Beroende på vilken task vi valt att trycka delete på så ber vi databasen att ta bort från todos där id:et är som deleteTask(urlen vi tar fram när vi trycker på delete i en viss rad)
    // Till sist sker felhantering 

    public function deleteTodo (){
      global $conn;
      if (isset($_GET['deleteTask']))
      {
        $sql_delete = "DELETE FROM todos WHERE id = $_GET[deleteTask]";
        $result_delete = mysqli_query($conn, $sql_delete);

        handleError($sql_delete);
      }
    }

    // UPDATE
    public function setValueForUpdate(){
      if(isset($_GET['updateTask']))
      {
        $update_todos = $_GET['updateTask'];
        return $update_todos;
      }
    }

    public function updateTodo(){
      global $conn;
  
      if(isset($_POST['update']))
      {
        $update_todos = $this->setValueForUpdate();
        $update_task = $_POST['todo'];
        $update_importance = $_POST['importance'];
        $update_start = $_POST['start'];
        $update_deadline = $_POST['deadline'];
        $update_status = $_POST['status'];
  
        if(!isset($update_task) || trim($update_task) == ''){
          echo "<h2>FILL IN TASK!!!!!!</h2>";
        } else {
          $sql_update = "UPDATE todos SET task = '$update_task', importance = '$update_importance', start = '$update_start', deadline = '$update_deadline', status ='$update_status' WHERE id = $update_todos ";
      
          $result_update = mysqli_query($conn, $sql_update);
  
          handleError($sql_update);
        }  
      }

    }
}


// Skapar ett objekt som ska sedan utföra olika CRUD uppfifter beroende på vad för metod vi kallar på.

$todoList = new TodoCrud;



echo $todoList->deleteTodo();
echo $todoList->createTodo();
echo $todoList->updateTodo();




// Checkmark

