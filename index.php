<?php

function task1($data = NULL)
{
    if ($data === NULL){
        echo 'Функции не переданы данные<br>';
    } else {
        $temp = gettype($data);
        echo 'Функции передан тип данных ' . $temp . '<br>';
    }
    
}

task1();
task1(12);
task1(true);
task1(12.35);
task1('a');

echo '<br><br><br>';

function task2($data = NULL)
{
    $counter = 0;
    if(is_string($data)){
        $data = str_split($data);
        foreach($data as $value) {
            if($value == 'b') {
                $counter++;
            }
        }
        echo 'В строке '.$counter.' раз встречается символ b<br>';
    } else {
        return false;
    }
}

task2("Hello world!");
task2("black bear");

echo '<br><br><br>';

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
        'six' => [
            'one' => 7,
            'two' => 10,
            'three' => [
                'one' => 70,
            ]
        ]
    ],
];

function sum($data)
{
    foreach ($data as $value)
    {
        if (is_array($value)) {
            $data = array_merge(array_values($data), array_values(sum($value)));
        }
    }
    return $data;
}

function task3($data)
{
    if(is_array($data)) {
        return array_sum(sum($data)).'<br>';
    } else {
        echo 'Error. Please input massive <br>';
    }
}

echo task3($Arr);



echo '<br><br><br>';




function f4($big = NULL, $small = NULL)
{
    if ($big === NULL && $small === 0) {
        echo 'Error. Input side of squares! <br>';
    } else if ($big === NULL) {
       echo 'Error. Input side of big square! <br>';
    } else if ($small === NULL) {
        echo 'Error. Input side of small square! <br>';
    }

    $temp = floatval(pow($big, 2) / pow($small, 2));
    echo 'В большой квадрат со стороной '.$big.' ед. можно вписать '.$temp.' квадратов со стороной '.$small.' ед.<br>';
}


f4(15,5);


