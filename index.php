<?php

$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];
$firstArr = [
    'one' => 1,
    'two' => 2,
    'three' => 3,
    'four' => 5,
    'five' => 12,
];
$secondArr = [
    'one' => 1,
    'seven' => 22,
    'three' => 32,
    'four' => 5,
    'five' => 13,
    'six' => 37,
];
$task1 = count($arr);
echo 'Количество элементов в массиве $arr: '.$task1.'<br><br><br>';

echo 'Переместим первые 4 элемента в конец массива:<br>';
array_push($arr, $arr[0], $arr[1], $arr[2], $arr[3]);
$arr = array_reverse($arr);
array_splice($arr, 9    );
$arr = array_reverse($arr);
var_export($arr);

$sum = $arr[3] + $arr[4] + $arr[5];
echo '<br><br><br>Сумма 4, 5 и 6 элементов массива = '.$sum.'<br><br><br>';

echo 'Элементы, которые есть в $secondArr, но нету в $firstArr:<br>';
$task3 = array_diff($secondArr, $firstArr);
var_export($task3);
echo '<br><br><br>Элементы, которые есть в $firstArr, но нету в $secondArr:<br>';
$task4 = array_diff($firstArr, $secondArr);
var_export($task4);

echo '<br><br><br>Элементы, значения которых совпадают:<br>';
$task5 = array_intersect($firstArr, $secondArr);
var_export($task5);

echo '<br><br><br>Элементы, значения которых отличается:<br>';
$task6 = array_merge(array_values($task3), array_values($task4));
var_export($task6);





$Arr = [
    'one' => 1,
    'two' => [
        'one' => 1,
        'seven' => 22,
        'three' => 32,
    ],
    'three' => [
        'one' => 1,
        'two' => 2,
    ],
    'four' => 5,
    'five' => [
        'three' => 32,
        'four' => 5,
        'five' => 12,
    ],
];

$task7 = array();
foreach($Arr as $key => $value){
    if(is_array($Arr[$key])){
        $Arr[$key] = array_values($Arr[$key]);
        array_push($task7, $Arr[$key][1]);
    } else {

    };
};
echo '<br><br><br>Выводим все вторые элементы вложенных массивов:<br>';
var_export($task7);

$counter = 0;
foreach($Arr as $key => $value){
    if(is_array($Arr[$key])){
        $counter += count($Arr[$key]);
    } else {
        $counter++;
    }
}

echo '<br><br><br>В массиве $Arr '.$counter.' элементов<br>';

$sum = 0;

foreach ($Arr as $key => $value) {
    if(is_array($Arr[$key])){
        foreach ($Arr[$key] as $key1 => $value1){
            $sum += $Arr[$key][$key1];
        }
    } else {
        $sum += $Arr[$key];
    }
}
echo '<br><br><br>Сумма значений всех элементов массива $Arr = '.$sum;