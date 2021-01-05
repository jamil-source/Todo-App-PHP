<?php
include_once 'db.php';
include_once 'crud.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form to update todo</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="script.js"></script>

</head>
<body>
<section class="todo_form">
        <form action="" method="POST" onsubmit ="return validate()">
            <?php
                $update_todos = $todoList->setValueForUpdate();
                $sql_update = "SELECT * FROM todos WHERE id = $update_todos";
                $result_update = mysqli_query($conn, $sql_update);
                $data = mysqli_fetch_array($result_update);
            ?>
            <h1>Redigera Jamils Todo</h1>
            <h2>Todo</h2>
            <input type="text" id = "todo" name="todo" placeholder ="Task ..." value = "<?php echo $data['task'];?>">
            <br>
            <h2>Importance</h2>
            <input type="range" name="importance" value="<?php echo $data['importance'];?>" min="0" max="5" oninput="this.nextElementSibling.value = this.value">
            <output></output>
            <br>
            <h2>Start</h2>
            <select name="start" value= "<?php echo $data['start'];?>">
                <option>Mon</option>
                <option>Tue</option>
                <option>Wed</option>
                <option>Thu</option>
                <option>Fri</option>
                <option>Sat</option>
                <option>Sun</option>
            </select>
            <br>
            <h2>Deadline</h2>
            <select name="deadline" value ="<?php echo $data['deadline'];?>">
                <option>Mon</option>
                <option>Tue</option>
                <option>Wed</option>
                <option>Thu</option>
                <option>Fri</option>
                <option>Sat</option>
                <option>Sun</option>
            </select>
            <br>
            <label class = "status-label" for="done">Done</label>
            <input type="radio" name="status" id = "done" class = "status" value = "Done">
            
            <label class = "status-label" for="not_done">Not Done</label>
            <input type="radio" name="status" id = "not_done" class = "status" value = "Not Done">
            <br>
            <input id= submit type="submit" name="update">
        </form>
        <figure>
            <figcaption>SHOW TABLE</figcaption>
            <a href="index.php"><img src="img/arrow.gif" alt="arrow" class="arrow" ></a>
        </figure>
    </section>
</body>
</html>