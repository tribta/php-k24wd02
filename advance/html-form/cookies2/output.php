<?php
$item = $_POST['item'];

if ($item !== null) {
    if (isset($_COOKIE['count'])) {
        $count = $_COOKIE['count'] + 1;
    } else {
        $count =  1;
    }
}

setcookie('count', $count, time() + 3600);
setcookie("Cart[$count]", $item, time() + 3600);
echo "$item added!!!<br/>";

foreach ($_COOKIE['Cart'] as $i => $v) {
    echo "Item $i: " . $v . "<br/>";
}
