<?php


$study = [1, 2, 3, "dog", "apple", "true"];

$study1 = [
    'one' => 1,
    'two' => 2,
    'three' => 3,
    'four' => 'dog',
    'five' => 'apple'
];

$study2 = [
    1,
    2,
    'three' => 3,
    'dog',
    'apple'
];

$study3 = $study  + $study1;


//var_export($study3); // вывести массив

//var_export(array_values($study + $study1)); // все ключи преобразует в числовые

//$arr = [
//    'one' => 1,
//    'two' => 2,
//    'three' => 3,
//];
//$arr2 = [
//    'two' => 2,
//    'three' => 3,
//    'one' => 1,
//];
//$arr3 = [
//    'three' => 3,
//    'one' => 1,
//    'two' => 2,
//];


//echo '<br>'.$arr['one'].'<br>';
//echo '<br>'.$arr2['one'].'<br>';
//echo '<br>'.$arr['one'].'<br>';
//
//
//$arr = array_values($arr);
//$arr2 = array_values($arr2);
//$arr3 = array_values($arr3);
//
//echo '<br>'.$arr[1].'<br>';
//echo '<br>'.$arr2[1].'<br>';
//echo '<br>'.$arr3[1].'<br>';

//var_export(array_keys($study2));

//var_export(array_values(array_slice($study, 3)));


$arr = [
    'one' => [
        'one' => 'one',
        'two' => 'two',
        'three' => 'three'
    ],
    'two' => [
        'one' => 'one',
        'two' => 'two',
        'three' => 'three'
    ],
    'three' => [
        'one' => 'one',
        'two' => 'two',
        'three' => 'three'
    ]
];

foreach ($arr as $key => $value){
    if (is_array($arr[$key])) {
        foreach ($arr[$key] as $key1 => $value1) {
            echo $arr[$key][$key1].'<br>';
        }
    } else {
    echo $arr[$key].'<br>';
    };
};


