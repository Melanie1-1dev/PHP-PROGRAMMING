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
</body>
</html>