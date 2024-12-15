#TASK1
<?php $username="Elzero"  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $username ?> Courses">
    <title>Welcome To <?php echo $username ?>  Courses</title>
</head>
<body>
    <h1><?php echo $username ?>  Courses</h1>
    <p>Here In <?php echo $username ?>  Courses We Provide Front-End And Back-End Courses</p>
    <hr>
    <div><?php echo $username ?>  Courses Is The What You Need.</div>
    <footer>All Right Reserved To <?php echo $username ?>  Courses</footer>
</body>
</html>


<?php
#TASK2
$name = "elzero";
$$name = "Web";


echo  $$name."\n";
echo $elzero ."\n";
echo ${$name}."\n";
echo get_defined_vars()['elzero'] . "\n";
echo $GLOBALS['elzero'] . "\n";


#TASK3
$a = 200;
$b = &$a;
$a = 100;

echo $b ."\n";


#TASK5
/*
    function
    for
    do
    int
    string 
    double
    while 
    each 
    true 
    false 
    null , void
*/

#TASK6
echo __LINE__ ."\n";
echo __FILE__ ."\n";
echo __DIR__ ."\n";