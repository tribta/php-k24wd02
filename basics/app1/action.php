<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Action</title>
</head>

<body>
    <div>
        <h3>Hello <?php echo htmlspecialchars($_POST['name']) ?> !!!</h3>
        <p>You are <?php echo (int)$_POST['age'] ?> years olds.</p>
    </div>
</body>

</html>