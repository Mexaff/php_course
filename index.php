<?php

$task1=(7%3);
$task2= intdiv(($a+$b),1);
$task3 = sqrt(25);

$text = "Десять негритят пошли купаться в море";

$task4 = substr("$text", 41, 16);
$task5 = substr("$text", 30,2);
//$task6 = ucwords($text);
$task6 = mb_convert_case($text, MB_CASE_TITLE, "UTF-8");
$task7 = strlen($text);

$true = true;
$false = false;
$three = "three";
$three_2 = "три";

echo "Задание 1:<br> $task1<br>";
echo "Задание 2:<br> $task2<br>";
echo "Задание 3:<br> $task3<br>";
echo "Задание 4:<br> $task4<br>";
echo "Задание 5:<br> $task5<br>";
echo "Задание 6:<br> $task6<br>";
echo "Задание 7:<br> $task7<br>";
echo "Задание 8:<br>";
if($true == 1) echo "True равно 1<br>";
    else echo "true не равно 1<br>";
echo "Задание 9:<br>";
if($false === 0) echo "false тождественно 0<br>";
    else echo "false не дождественно 0<br>";
echo "Задание 10:<br>";
if(strlen($three) > strlen($three_2)) echo "строка three длиннее<br>";
    else echo "строка три длиннее<br>";
echo "Задание 11:<br>";
if((125 * 13 + 7) > (223 + 28 * 2)) echo "первое число больше<br>";
    else echo "второе число больше<br>";


