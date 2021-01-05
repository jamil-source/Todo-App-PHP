<?php
include_once "crud.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form to create todo</title>
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">

</head>
<body>
<section class="todo_form">
        
        <form action="form.php" method="POST">
            <h1>Jamils TodoList</h1>
            <label for="todo">Todo</label>
            <input type="text" name="todo" id="todo" placeholder ="Task ...">
            <br>
            <label for="importance">Importance</label>
            <input type="range" id= "importance" name="importance" value="0" min="0" max="5" oninput="this.nextElementSibling.value = this.value">
            <output></output>
            <br>
            <h2>Start</h2>
            <select name="start">
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
            <select name="deadline">
                <option>Mon</option>
                <option>Tue</option>
                <option>Wed</option>
                <option>Thu</option>
                <option>Fri</option>
                <option>Sat</option>
                <option>Sun</option>
            </select>
            <br>
            <input id= submit type="submit" name="submit">
        </form>
        <figure>
            <figcaption>SHOW TABLE</figcaption>
            <a href="index.php"><img src="img/arrow.gif" alt="arrow" class="arrow" ></a>
        </figure>
    </section>
</body>
</html>