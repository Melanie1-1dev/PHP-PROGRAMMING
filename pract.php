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


<?php 
 $products = [
    "Electronics" => [
        "phones" => ["iPhone", "Samsung", "Pixel"],
        "Laptops" => ["Deli", "HP", "MacBook"]
    ],
    "Furniture" => [
        "Chairs" => ["Office Chair", "Gaming Chair"],
        "Tables" => ["Dinning Table", "Coffee Table"]
    ]
 ];

 foreach($products as $category => $subcategories){
    echo "<h3><b>Category: $category </b></h3><br>";

    foreach($subcategories as $subcategory =>$items){
        echo "<h3><b>subcategory: $subcategory </b></h3><br>";

        foreach($items as $item){
            echo "Item: $item <br>";
        }
    }

    echo "<hr>";

 }
 ?>
    
</body>
</html>