<?
$is_rich = false;

if ($is_rich == true) : echo "im rich";
else : echo "im poor";
endif;

// Convert to boolean === false
var_dump((bool) ""); // bool(false)
var_dump((bool) "0"); // bool(false)
var_dump((bool) 1); // bool(true)
var_dump((bool) -1); // bool(true)
var_dump((bool) "string"); // bool(true)
var_dump((bool) 2.3e5); // bool(true)
var_dump((bool) array(12)); // bool(true)
var_dump((bool) array()); // bool(false)
var_dump((bool) "false"); // bool(true)
var_dump((bool) FALSE); // bool(false)
var_dump((bool) 0); // bool(false)
var_dump((bool) 0.0); // bool(false)
var_dump((bool) NULL); // bool(false)
