<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    define("MESSAGE","Welcome to "); //constant declaration using this function
    echo MESSAGE;

    const school='Rwanda Coding Academy';//by using constant
    echo school."<br><br>";
    echo constant("MESSAGE");
    $x=76;
    $y=45;
    $z=++$x +$y++;
    echo "The sum of the number=".$z."<br><br>";
    echo "The sum of the number=".$z=++$x +$y++;
    ?>



<table width="270px" cellspacing="1px" cellpadding="1px" border="1px">

<?php 

for($row=1;$row<=10;$row++){
    echo"<tr>";

    for($col=1;$col<=10;$col++)
        {
            echo"<td>" .($col*$row)."</td>";
        }
echo"</tr>";

}


 ?>
</table>

<table width="300px" cellspacing="0px" cellpadding="0px" border="2px">
    <?php 

for($r=1;$r<13;$r++){
    echo"<tr>";

    for($c=1;$c<13;$c++){
        echo "<td>" .($r*$c)."</td>";
    }
        echo "</tr>";
}

?>


</table>

<br>
<br>
<br><br>

<table width="400px" cellspacing="1px" cellpadding="1px" border="2px">
    <?php 
    for($row=1;$row<=15;$row++){
        echo "<tr>";

        for($col=1;$col<=15;$col++){
            echo "<td>" .($row*$col) ."</td>";
        }
        echo "</tr>";
    }
     ?>

</table>
<br><br>

<?php 
$Array = [10,20,4,45,99,99,77];


function secondLargest($Array){
    $TuniqueArray = array_unique($Array);

    rsort($TuniqueArray);

    if(count($TuniqueArray)<2){
        return null;

    }
    else{
        return $TuniqueArray[1];
    }
}

echo "The second largest number in array is:" .secondLargest($Array);

 ?>
 <br>
 <br>

 <?php 

 $GivenArray = [45,35,78,97,56,24,45,26,59,67,88,44,56];

 function thirdLargest($GivenArray){
    $TuniqueArry = array_unique($GivenArray);

    rsort($TuniqueArry);

    if(count($TuniqueArry)<2){
        echo "No second largest number in array";
    }
    else{

    return  $TuniqueArry[2];
    
    
    }
 }

print_r($GivenArray);

 echo "The third largest number is:".thirdLargest($GivenArray);
  ?>
  <br><br><br>

  <h1>Multiplication table</h1>

  <h3>Enter a number to see its multiplication table</h3>

  <form action="" method="post">
    

   Number:
  <input type="number" name="number" required>
  <input type="submit" name="submit"value="Generate Table">
  </form>

  <?php 

  if(isset($_POST['submit'])){
    $num = $_POST['number'];

    echo "<h3> Multiplication Table of $num </h3>";
    echo "<table border='1' cellpadding='5' cellspacing='0'>";

    for($i=1; $i <= 10;$i++){
        $result = $num*$i;

        echo "<tr><td>$num x $i = $result </td></tr>";
    }

    echo "</table>";
  }

   ?>

   <?php 
   echo "The sum of the first ten numbers are:"."<br><br>";
 $sum =0;
   for($i=1;$i<=10;++$i){

   $sum += $i;

   }

   echo "The total sum is equal to :".$sum;

    ?>

    
</body>
</html>