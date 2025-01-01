<?php
#TASK1
$a = 100;
$b = 200;
$c = 100;
if ($b > $a && $a === $c && ($a+$c) == $b){
    echo "YES" . "\n";
} ;

#TASK2
#case1
$a = 100;
$b = 200;
$c = 300;
#case2
$a = 200;
$b = 100;
$c = 300;
#case 3
$a = 200;
$b = 200;
$c = 100;
if($a >$b){
    echo "a is longer than b";
}elseif ($a > $c){
    echo "a is longer than c"."\n";
}else{
    echo "A Is Not Larger Than B Or C" ."\n";
};

#TASK4
$a = 30;
$b = 20;
$c = 10;

echo ($a+ $b ===$c)? "A+B=C":(
    ($a +$c ===$b)?"A+C=B":(
        ($b+$c===$a)?"B+C=A"."\n":"THE END" ."\n"
    )
    
);
//TASK5
$name = "Osama";
$age = 40;
$country = "Egypt";

echo ($age > 18 && gettype($name) === "string" &&$country === "Egypt")?"The Age Is Good To Go"."\n" ."The Name Is Good To Go"."\n"."The Country Is Good To Go"."\n":"not found"."\n";



//TASK6
$genre = "Hack And Slash";
switch($genre){
    case "RPG":
        echo "I Recommend Ys Games";
    break;
    case "Hack And Slash":
        echo "I Recommend Castlevania Games"."\n";
    break;
    case "FPS":
        echo "I Recommend Uncharted Games";
    break;
    case "Platform":
        echo "I Recommend Megaman Games";
    break;
    case "Puzzle":
        echo "I Recommend Megaman Games";
    break;

    default :
    echo "I Recommend Shadow Of Mordor And Shadow Of War";       
};

//TASK7
$num_one = 23;
$num_two = 5;
$op = "+";
switch($op){
    case "+":
        echo $num_one + $num_two."\n";
    break;
    case "-":
        echo $num_one - $num_two."\n";
    break;
    case "*":
        echo $num_one * $num_two."\n";
    break;
    case "/":
        echo $num_one / $num_two."\n";
    break;
    default :
    "Unknown Operation"."\n";
};

//TASK8
$day = "Sat";
if($day==="Sat" ||$day==="Sun"||$day ==="mon" ){
    echo "We Are Open All The Day";
}elseif($day==="Tue" ||$day==="wed"){
    echo "We Are Open From 08:12";
}elseif($day==="Thu" ||$day==="fri"){
    echo "We Are Closed";
}else{
    echo "unknown day";
};


