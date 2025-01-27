<?php
###TASK1
function greeting($name , $type =null){
    $title="";
    if($type === "male"){
        $title = "mr";
    }elseif ($type === "female"){
        $title = "miss";
    }

    if (!empty ($title)){
        return " Hello $title $name"."\n";
    }else{
        return "Hello $name"."\n";
    }

}
echo greeting("samia", "female");
echo greeting("samer", "male");
echo greeting("smah");

##TASK2
function get_arguments(...$arg){
    $all=implode(" ",$arg)."\n";
    return $all;
}
echo get_arguments("Hello", "Elzero", "Web", "School");
echo get_arguments("I", "Love", "PHP");

##TASK3
function calculate(...$nums){
    $sum =0;
    foreach($nums as $num){
        if($num === 5){
            continue;
        }
        if ($num === 10){
            $num = 20;
        }
        $sum += $num ;
    }
    return $sum;

}
echo calculate(10,50,5,60,3,8)."\n";
echo calculate(100,20,10,8,30,5)."\n";
echo calculate(5,5,5,5)."\n";

##TASK4
function multiply(...$nums){
    $result = 1;
    foreach ($nums as $num){
        if (is_string($num)){
            continue;
        }
        if(is_float($num)){
            $num = (int)$num;
        }
        $result *= $num ;
    }
    return $result;
}
echo multiply(2, 3, 1.5, "hello", 4)."\n"; 
echo multiply(5, "world", 2.7, 3)."\n";


##TASK5
function check_status($a ,$b,$c){
    $name ="";
    $age =0;
    $isAvailable = false;
    foreach([$a ,$b,$c] as $param){
        if (is_string($param)){
            $name = $param;
        }
        if (is_int($param)){
            $age = $param;
        }
        if (is_bool($param)){
            $isAvailable = $param;
        }
    }
    $availabilityMessage = $isAvailable ? "available for work." : "not available for work.";
    echo "Hello $name, you are $age years old and you are $availabilityMessage"."\n";

}
check_status("John", 30, true)."\n";


##TASK6
function calculates($num1 ,$num2 ,$operation = "add" ){
    switch (strtolower($operation)) { 
        case "add":
        case "a":
            return $num1 + $num2; 
        case "subtract":
        case "s":
            return $num1 - $num2; 
        case "multiply":
        case "m":
            return $num1 * $num2; 
        default:
            return "Error: Operation not found. Available operations are add (a), subtract (s), multiply (m).";
    }
}
echo calculates(10, 5, "add");






