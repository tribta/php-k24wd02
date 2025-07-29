<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basics Syntax</title>
</head>

<body>
    <ol>
        <li><?php echo 'Nếu như muốn sử dụng php code để in ra màn hình thì sử dụng echo.' ?></li>
        <li><?php echo 'Nếu như muốn sử dụng php code để in ra màn hình thì sử dụng echo.' ?></li>
        <li><? echo 'Nếu như muốn sử dụng php code để in ra màn hình thì sử dụng echo.' ?></li>
    </ol>

    <? $expression = false; ?>

    <? if ($expression == true) : ?>
        Nó sẽ hiện ra nếu như $expression là true
    <? else: ?>
        false thì không hiện ra.
    <? endif; ?>

</body>

</html>