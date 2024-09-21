<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/production.css">
    <title>Get Some Sh*t Done</title>
</head>

<body>
    <div>
        <h1>To-Do</h1>
    </div>
    <div>
        <p><?php echo "Welcome to the list" ?></p>
    </div>
    <table>
        <tr>
            <th>Completed?</th>
            <th>Task Name</th>
            <th>Due Date</th>
            <th>Priority</th> <!-- display this but have an option to sort it? -->
            <!-- probably don't need to show the ID for the task (primary key)-->
        </tr>
        <tr>
            <td>Yes</td>
            <td>Do the dishes</td>
            <td>right now</td>
            <td>3</td> <!-- 0-5 scale? -->
        </tr>
    </table>
</body>

</html>