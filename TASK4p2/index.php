<?php
/*
##TASK1
$index = 10;
while($index>0){
    echo $index ."\n";
    $index--;
}

##TASK2
$index = 0;
while($index<=20){
    echo $index ."\n";
    $index+=2;
}

##TASK3
$num = 2;
while ($num < 520) {
    echo $num-1 ."\n";
    $num =($num*2)+1;
}

##TASK4
$start = 10;
$end = 0;
$stop = 3;
for($i=$start;$i>=$stop;$i--){
    if($i<10){
        echo "0$i"."\n";
    }else{
        echo "$i"."\n";
    }
}

##TASK5
$start = 0;
$mix = [1, 2, 3, "A", "B", "C", 4];
foreach($mix as $value){
    if(is_int($value)&& $value >=2){
        echo "$value \n";
    }
}

##TASK6
$money = ["Ahmed" => 100, "Sayed" => 150, "Osama" => 100, "Maher" => 250];
foreach($money as $names=>$value){
    echo "The Name Is $names And I Need $value Pound From Him"."\n";
}

##TASK7
$mix = [1, 2, "A", "B", "C", 3, 4];
$numCount=0;
$lettCount=0;

foreach($mix as $value){
    if(is_int($value)){
        echo "$value \n";
        $numCount++;
    }elseif(is_string($value)){
        $lettCount++;
    }

}

echo "$numCount Numbers Printed"."\n";
echo "$lettCount Letters Ignored"."\n";

##TASK8
$nums = [1, 13, 12, 20, 51, 17, 30];
foreach($nums as $value){
    if($value %2 ===0){
        echo $value/2 ."\n";
    }
};

##TASK9
$help_num = 3;
$numbers = [4, 5, 6, 1, 2, 3];
$names = ["Ahmed", "Sayed", "Osama", "Mahmoud", "Gamal"];
for($i=$help_num;$i>0;$i--){
    echo $names[$numbers[$i]+1] ."\n";
    echo $names[$numbers[$i]] ."\n";
}*/

##TASK10

$help_num = 4;
$nums = [2, 4, 5, 6, 10];

$nums_reversed = array_reverse($nums); 

foreach ($nums as $i => $value) { 
    if ($i < count($nums) - $i - 1) {
        $sum = $value + $nums_reversed[$i];
        echo "\"$value + " . $nums_reversed[$i] . " = $sum\"\n";
    }
};
