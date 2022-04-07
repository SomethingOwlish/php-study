<?php
function sum($a,$b){
    return $a + $b;
};
function razn($a, $b){
    return $a - $b;
};
function umn($a, $b){
    return $a*$b;
};
function del($a,$b){
    return $a/$b;
};

function mathOperation($arg1, $arg2, $operation){
    switch($operation){
        case "raznitsa":
            return razn($arg1, $arg2);;
        case "sum":
            return    sum($arg1, $arg2);
        case "del":
            return     del($arg1, $arg2);
        case "umn":
            return    umn($arg1, $arg2);
    };
};

function power($val, $pow){
    if($pow != 2) {
        $temp = umn($val, $val);
        power($val, $pow - 1);
         };
    return $val * $val;

};

echo date('Y') . "\n";

function chti($string, $ch1, $ch2, $ch3){
    $ff=Array('0','1','2','3','4','5','6','7','8','9');

    if(substr($string,-2, 1)==1
        AND strlen($string)>1) $ry=array("0 $ch3","1 $ch3","2 $ch3","3 $ch3" ,"4 $ch3","5 $ch3","6 $ch3","7 $ch3","8 $ch3","9 $ch3");

    else $ry=array("0 $ch3","1 $ch1","2 $ch2","3 $ch2","4 $ch2","5 $ch3"," 6 $ch3","7 $ch3","8 $ch3"," 9 $ch3");
    $string1=substr($string,0,-1).str_replace($ff, $ry, substr($string,-1,1));

    return $string1;
}


function dateTime(){
    //Реализация не идеальна. Есть шанс в секундах потерять точность, но в данной программе и условиях работает корректно.
    $hourScl = date('H');
    $hset = chti("$hourScl", "час ","часа ","часов ");
    $mScl = date('i');
    $mSet = chti("$mScl", "минута ","минуты ","минут ");
    $sec = date('s');
 $actualDate = date('L, d F Y,' . $hset . $mSet .  chti("$sec", "секунда ","секунды ","секунд ") .  'P');
  return $actualDate;

};

echo dateTime();