<?php
include "db.php";
include "create.php";

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
        <table>
            <thead>
                <th>ID</th>
                <th>Task</th>
                <th>Importance</th>
                <th>Start</th>
                <th>Deadline</th>
                <th>Update</th>
                <th>Delete</th>
            </thead>

        <tbody>
        <?php
                while($row = mysqli_fetch_assoc($result)){ // vi fetchar en assosiativ array, tar alltså ut de värderna vi har i vår tabell todos och spottar ut dem
                
            ?>
            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['task']?></td>
                <td><?php echo $row['importance']?></td>
                <td><?php echo $row['start'] ?></td>
                <td><?php echo $row['deadline'] ?></td>
                <td class="update_btn"><a href="#">Update</td>
                <td class="delete_btn"><a href="#">Delete</td>

            </tr>
            <?php } ?>
            
        </tbody>
        </table>
    </section>
</body>
</html>