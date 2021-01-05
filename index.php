<?php
include_once "db.php";
include_once "crud.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>U04-TODO</title>
</head>
<body>
    
    <section class="todo_output">
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Task</th>
                <th>Importance</th>
                <th>Start</th>
                <th>Deadline</th>
                <th>Status</th>
                <th>Update</th>
                <th>Delete</th>
            </thead>

        <tbody>
        <?php
                $result = $todoList->getAllUsers();
                while($row = mysqli_fetch_assoc($result)){ // vi fetchar en assosiativ array, tar alltså ut de värderna vi har i vår tabell todos och spottar ut dem
                
            ?>
            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['task']?></td>
                <td><?php echo $row['importance']?></td>
                <td><?php echo $row['start'] ?></td>
                <td><?php echo $row['deadline'] ?></td>
                <td><?php echo $row['status']?></td>
                <td class="update_btn"><a href="update_form.php?updateTask=<?php echo $row['id']; ?>">Update</td>
                <td class="delete_btn"><a href="index.php?deleteTask=<?php echo $row['id']; ?>">Delete</td>

            </tr>
            <?php } ?>
            
        </tbody>
        </table>
        <figure>
            <figcaption>ADD TODO</figcaption>
            <a href="form.php"><img src="img/giphy.gif" alt="arrow" class="arrow" ></a>
        </figure>
   
    </section>
    <script src= "script.js"></script>
</body>
</html>