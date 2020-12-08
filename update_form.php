<?php
include 'db.php';
include 'crud.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form to update todo</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<section class="todo_form">
        <h1>Redigera Jamils Todo</h1>
        <form action="" method="POST">
            <?php
                $sql_update = "SELECT * FROM todos WHERE id = $update_todos";
                $result_update = mysqli_query($conn, $sql_update);
                $data = mysqli_fetch_array($result_update);
            ?>
            <h2>Todo</h2>
            <input type="text" name="todo" placeholder ="Task ..." value = "<?php echo $data['task'];?>">
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
            <input type="submit" name="update">
        </form>
    </section>
</body>
</html>