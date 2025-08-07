<?php
function stopExecution(): never
{
    exit("End the program");
}
function throwError(): never
{
    throw new Exception("Error !!!");
}

stopExecution();
echo "hi";
throwError();