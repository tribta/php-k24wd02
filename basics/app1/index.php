<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
</head>

<body>
  <!-- <?php if (str_contains($_SERVER['HTTP_USER_AGENT'], 'Chrome')) { ?>

    <h3>str_contains() returned true.</h3>
    <p>You are using Chrome.</p>

  <?php } else { ?>

    <h3>str_contains() returned false.</h3>
    <p>You are <strong>NOT</strong> using Chrome.</p>

  <?php } ?> -->

  <form action="action.php" method="post">
    <label for="name">Your Name:</label>
    <input id="name" type="text">

    <label for="age">Your Age:</label>
    <input id="age" type="number">

    <button type="submit">Submit</button>
  </form>
</body>

</html>