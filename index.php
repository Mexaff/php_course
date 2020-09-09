<?php

 $a = 5;
 function f1($b)
 {
    var_export($b);
     echo '<br>';
 }

 f1($a);

 function f2($b)
 {
     return $b + $b;
 }

 echo f2($a).'<br>';

 function f3($var)
 {
     $var = 10;
     $var = f2($var);
     f1($var);
 }

 f3(5);

 function f4($var = 10)
 {
     $var = f2($var);
     f1($var);
 }
 f4();
 f4(7);

function f5($var = NULL)
{
    if(NULL === $var) {
        $var = 10;
    }
    $var = f2($var);
    f1($var);
}

f5();

