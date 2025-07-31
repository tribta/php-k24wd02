<?php include "data.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Student List</title>
</head>

<body>
    <h2>Student List</h2>
    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Year</th>
            <th>Math</th>
            <th>Physic</th>
            <th>Chemistry</th>
            <th>Average Scores</th>
        </tr>
        <?php foreach ($students as $student): ?>
            <tr>
                <td><?= $student["id"] ?></td>
                <td><?= $student["name"] ?></td>
                <td><?= $student["year"] ?></td>
                <td><?= $student["scores"]["math"] ?></td>
                <td><?= $student["scores"]["physic"] ?></td>
                <td><?= $student["scores"]["chemistry"] ?></td>
                <td><?= $student["avg"] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>