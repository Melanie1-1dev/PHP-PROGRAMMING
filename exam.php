<?php

$student_marks = array(78,60,62,68,71,73,85,66,64,76,63,75,76,72,65,74,90,75,79,77,80,59,83,54);

$sum =0;
for($i=0;$i<=23;$i++){
    $sum +=$i;
    $average = $sum/24;
}

echo"The average student's marks is: ".$average."<br />";

$lmarks =0;
for($i =0;$i<=23; $i++){
    if($i<$i+1){
        $lmarks=$i;
    } else{
        $lmarks = $i+1;
    }
    $lmarks2 =0;
    if(array(1) < array(2)){
        $lmarks2 = array(1);
    }
    else{
        $lmarks2 = array(2);
    }
    array() ++;
}
ech0 "The lowest marks are:".$lmarks;

$highest =0;
for($i=0; $i<=23;$i++){
    if($i>$i+1){
        echo "The highest marks is:";
        $highest = $i;
    }
    echo "The highest marks is:".$highest;
}
$student_marks=rsort(array)

echo "The resorted array is:".$student_marks;


?>