<?php
//Писала функции что бы разделить задачи на блоки удобно и не вводить кучу магических переменных для иттераторов
function taskOne(){
    $i = 1;
    while ($i<=100){
        if (($i % 3) == 0){
            echo $i . " ";
        }
        $i++;
    }
}

function taskTwo()
{ $i = 0;
    do {
        if ($i == 0){
            echo $i . " – ноль \n";
        } else if (($i % 2) == 0){
    echo $i . " – четное число \n";
        } else {
            echo $i . " – нечетное число \n";
        }
        $i++;
} while ($i <= 10);
}

function taskThree(){
    $array = [
        "Москва" =>   $Mcity = [
            "1" => "Москва",
        ],
        "Московская область" => $MOcity = [
            "1" => "Апрелевка",
            "2" => "Балашиха",
            "3" => "Верея",
            "4" => "Видное",
            "5" => "Дмитров",
            "6" => "Домодедово",
            "7" => "Истра",
            "8" => "Лобня",
        ],
        "Смоленская область" => $SOcity = [
            "1" => "Вязьма",
            "2" => "Смоленск",
            "3" => "Гагарин",
            "4" => "Рудня",
        ],
    ];


  foreach ($array as $i=> $value){
      echo $i . ": ";
      foreach ($value as $item => $city){
          echo $city . " ";
      }
      echo "\n";

  }

}
//тут не стала заводить весь язык, этого набора достаточно для проверки работы функции
function taskFour($string){
$translit = [
    'а'=> 'a',
    'б' => 'b',
    'в' => 'v',
    'г' => 'g',
    'э' => 'e',
    'ю' => 'yu',
    'я' => 'ya',
];

$wordArr = mb_str_split($string);

foreach ($wordArr as $i => $value){

    $wordArr[$i] = $translit[$value];
}
   echo join('',$wordArr) . "\n";



};

function taskFive($stroka){
    $strokaArr = mb_str_split($stroka);
    foreach ($strokaArr as $i => $value){
        if ($value == ' '){
            $strokaArr[$i]  = '_';
        };
    };
    return join('', $strokaArr);
};

function menu(){
  $menuArr =[
      1 => '<div class="topnav">',
  2 => '<ul><a class="active" href="#home">Home</a></ul>',
 3 => '<ul><a href="#news">News</a></ul>',
 4=>  '<ul><a href="#contact">Contact</a></ul>',
 5 => '<ul><a href="#about">About</a></ul>',
6=> '</div>',
    ];

  foreach ($menuArr as $i =>$val){
      echo $val;
  }

}

function test($i){
    echo $i;
    return $i+1;
}
function taskSeven(){
    for ($i=0; $i<10; $i=test($i)){
    };
}

function taskEight(){
    $array = [
        "Москва" =>   $Mcity = [
            "1" => "Москва",
        ],
        "Московская область" => $MOcity = [
            "1" => "Апрелевка",
            "2" => "Балашиха",
            "3" => "Верея",
            "4" => "Видное",
            "5" => "Дмитров",
            "6" => "Домодедово",
            "7" => "Истра",
            "8" => "Лобня",
        ],
        "Смоленская область" => $SOcity = [
            "1" => "Вязьма",
            "2" => "Смоленск",
            "3" => "Гагарин",
            "4" => "Рудня",
        ],
    ];


    foreach ($array as $i=> $value){
        echo $i . ": ";
        foreach ($value as $item => $city) {
            if (mb_substr($city, 0, 1) == "В") {

                echo $city . " ";
            }
            echo "\n";
        }
    }
}

function taskNine($str){

    $translit = [
        'а'=> 'a',
        'б' => 'b',
        'в' => 'v',
        'г' => 'g',
        'э' => 'e',
        'ю' => 'yu',
        'я' => 'ya',
        ' ' => '_',
    ];

    $LineArr = mb_str_split($str);

    foreach ($LineArr as $i => $value){

        $LineArr[$i] = $translit[$value];
    }
   return join('',$LineArr);
}
//Call for tasks
?>
<!DOCTYPE html>
<html lang="en">
<head></head>
<body>
<?php
taskOne();
echo '</br>';
taskTwo();
echo '</br>';
taskThree();
echo '</br>';
$slovo = 'гав';
taskFour($slovo);
echo '</br>';
$stroka = 'гав гав гав гав';
echo taskFive($stroka) . "\n";
echo '</br>';
menu();
echo '</br>';
taskSeven();
echo '</br>';
taskEight();
echo '</br>';
echo taskNine($stroka);
echo '</br>';
?>
</body>
</html>


