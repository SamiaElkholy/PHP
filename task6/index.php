<?php
##TASK1
$num_one = -1;
$num_two = 2.5;

$let_one = "o";
$let_two = "z";

$str = "El%er0";
$arr=["0" => $let_one ,"%" => $let_two  ];
echo strtr($str,$arr)."\n";


##TASK2
$str = "Orezle";
echo ucfirst(strrev(strtolower($str)))."\n";


##TASK3
$str = 'aAa';
$num = 3;
$char = "_";

echo chunk_split(str_repeat(strtolower($str),$num),$num,$char)."\n";


##TASK4
$str = "<div><b>Elzero</b></div>";
echo strip_tags($str,"<b>")."\n";

##TASK5
$str = "Elzero Web School";
$e = "e";
$o = "O";
$four = 4;
echo substr_count($str,$e,0,$four)."\n";
$strtoupper= strtoupper($str);
echo substr_count($strtoupper,$o,-4,$four)."\n";

##TASK6
$chars = ["E", "l", "z", "e", "r", "o"];
echo implode($chars)."\n";

##TASK7
$chars = ["E", 1, 2, "l", "z", "E", "R", "o"];
$filtered_chars = array_map(fn($char) => str_replace(["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"], '', $char), $chars);
$result = implode("", $filtered_chars);

echo ucwords(strtolower($result));