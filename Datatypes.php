<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datatypes in php</title>
</head>
<body>
    <?php 
    if(false)

   
        echo "This condition is false.";

    if(true)
        echo "This condition is true.";
    echo"<br> <br>";
   $dec1 = 35;
   $dec2 = 0243;
   $hex1 = 0x45;
   echo "Decimal number is :" .$dec1. "<br>";
   echo "The decimal number is :".$dec2."<br>";
   echo "Hexadecimal number is :".$hex1."<br><br><br>";


echo "PHP FLOAT"."<br><br>";

   $n1 = 19.34;
   $n2 = 54.472;
   $sum = $n1 + $n2;
   echo "Addition of floating numbers: ".$sum."<br><br>";

   echo "PHP STRING"."<br><br>";

   $school = "RCA";
   echo "Hello!   This is my dream school 🫱".$school."<br><br>";

   echo "PHP NULL"."<br><br>";

   $nl = NULL;
   echo $nl;

   $power = 5 ** 2;
   echo "The power of 5 is :".$power."<br><br>";

   $num1 = 8;
   $num2 = 8;
   $powerof = $num1 ** $num2;

   echo "The power  is :" .$powerof ."<br><br><br>";

$num3 = 46;
if($num3 < 100){
echo $num3 ." is less than 100."."<br><br>";
}
else{
    echo " $num3 is greater than 100"."<br><br>";
}

$s=0;

start:
$s++;
 echo "X=$s"."<br><br>";
 if($s<5){
 goto start;
 }

 for($i = 0;$i<=7;$i++){
    for($j=0;$j<=7;$j++){
        if(!($i==$j)){
           continue;
        }
            echo $i.$j."<br><br>";
        
    }
 }

 $person = array(
    "Name: " =>"John Roberto",
    "Email: " =>"johnroberto@gmail.com",
    "Age: "=>22,
    "Gender: "=>"Male"
 );
 foreach($person as $key =>$element){
    echo "$key  $element"."<br><br>";
 }
   
    ?>
</body>
</html>