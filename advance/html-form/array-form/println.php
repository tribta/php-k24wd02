<?php
function println($str = '')
{
    if (php_sapi_name() === 'cli' || PHP_SAPI === 'cli') {
        echo $str . PHP_EOL;
    } else {
        echo $str . '<br/>';
    }
}
