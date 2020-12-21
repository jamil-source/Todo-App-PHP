<?php
include_once "crud.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form to create todo</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<section class="todo_form">
        <h1>Jamils TodoList</h1>
        <form action="form.php" method="POST">
            <h2>Todo</h2>
            <input type="text" name="todo" placeholder ="Task ...">
            <br>
            <h2>Importance</h2>
            <input type="range" name="importance" value="0" min="0" max="5" oninput="this.nextElementSibling.value = this.value">
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
            <input type="submit" name="submit">
        </form>
    </section>
</body>
</html>