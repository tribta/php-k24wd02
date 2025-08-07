<?php
$file = fopen("test.txt", "r");

if (!$file) {
    echo "Not found";
} else {
    while(($line = fgets($file))!== false){
        echo $line . "<br>";
    }
}
