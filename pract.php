<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
 define ("message","Welcome to");
    echo message."\n";
    const school="Rwanda Coding Academy";
    echo school."<br>";
    $a=34;
    $b=45;
    $Z=++$a+$b++;
    echo"The sum of the number=".$Z."\n";
    echo"The sum of the number=".$Z=++$a+$b++."<br>";
    echo"The sum of the number=".$Z=++$a+$b++."<br>";
    echo"The sum of the number=".$Z=++$a+$b-- . "</br>";

$number1 = 0;
start:
$number1++;

echo "X = $number1 </br>";

if ($number1 < 5){
    goto start;
}


    ?>
    
</body>
</html>