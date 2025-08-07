<?php
function speak(int $s): int
{
    if (is_int($s)) {
        return print_r($s);
    } else {
        return throw new Exception("error!!!");;
    }
}

speak('one');
