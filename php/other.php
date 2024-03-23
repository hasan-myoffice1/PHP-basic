<?php

// Global variables
 $x = 75;
function aFunction(){
    echo $GLOBALS['x'];
}
aFunction();
echo "<br>";

/*
function aFunction2(){
    echo 'x'; // error
}

aFunction();
*/

function oneF(){
    global $x;
    echo $x;
}

oneF();
echo "<br>";

echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";

echo $_SERVER['HTTP_HOST'];