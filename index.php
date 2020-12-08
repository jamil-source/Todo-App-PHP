<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>U04-TODO</title>
</head>
<body>
    <section class="todo_form">
        <h1>Jamils TodoList</h1>
        <form action="" method="POST">
            <h2>Todo</h2>
            <input type="text" name="todo" placeholder ="Task ...">
            <br>
            <h2>Importance</h2>
            <input type="range" name="importance" value="0" min="0" max="5" oninput="this.nextElementSibling.value = this.value">
            <output></output>
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
    <section class="todo_output">
        <table>
            <thead>
                <th>ID</th>
                <th>Task</th>
                <th>Start</th>
                <th>Deadline</th>
                <th>Update</th>
                <th>Delete</th>
            </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Eat</td>
                <td>Tors</td>
                <td>Mon</td>
                <td class="update_btn"><a href="#">Update</td>
                <td class="delete_btn"><a href="#">Delete</td>

            </tr>
        </tbody>
        </table>
    </section>
</body>
</html>