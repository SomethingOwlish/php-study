<?php
// Задание 1
$a = rand(-100, 100);
$b = rand(-100, 100);
echo $a . " " . $b . "\n";

function sravni ($first, $second){
 if ($first >= 0 || $second >= 0){
     echo $first - $second . "\n";
 } else if ($first < 0 || $second < 0){
     echo $first * $second . "\n";
 } else {
     echo $first + $second . "\n";
 }
}

sravni($a, $b);

// Задание 2
$a = rand(0, 15);
switch ($a){
    case 0:
        echo "0" . "\n";
    case 1:
        echo "1" . "\n";
    case 2:
        echo "2" . "\n";
    case 3:
        echo "3" . "\n";
    case 4:
        echo "4" . "\n";
    case 5:
        echo "5" . "\n";
    case 6:
        echo "6" . "\n";
    case 7:
        echo "7" . "\n";
    case 8:
        echo "8" . "\n";
    case 9:
        echo "9" . "\n";
    case 10:
        echo "10" . "\n";
    case 11:
        echo "11" . "\n";
    case 12:
        echo "12" . "\n";
    case 13:
        echo "13" . "\n";
    case 14:
        echo "14" . "\n";
    case 15:
        echo "15" . "\n";
};
// Задание 3
echo match($a) {

    15 => "15",
    14 => "14 15",
    13 => "13 14 15",
    12 => "12 13 14 15",
    11 => "11 12 13 14 15",
    10 => "10 11 12 13 14 15",
    9 => "9 10 11 12 13 14 15",
    8 => "8 9 10 11 12 13 14 15",
    7 => "7 8 9 10 11 12 13 14 15",
    6 => "6 7 8 9 10 11 12 13 14 15",
    5 => "5 6 7 8 9 10 11 12 13 14 15",
    4 => "4 5 6 7 8 9 10 11 12 13 14 15",
    3 => "3 4 5 6 7 8 9 10 11 12 13 14 15",
    2 => "2 3 4 5 6 7 8 9 10 11 12 13 14 15",
    1 => "1 2 3 4 5 6 7 8 9 10 11 12 13 14 15",
    0 => "0 1 2 3 4 5 6 7 8 9 10 11 12 13 14 15"
};