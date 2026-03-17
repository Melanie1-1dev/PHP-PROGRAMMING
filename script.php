<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>collection</title>
</head>
<body>
    <?php
    $x = 5;
    $y = $x++;
    echo "The value of x=".$x." and the value of y=".$y.'<br>';
    echo "The value of z=".++$x." and the value of y=".$y++.'<br>';
    echo "The value of w=".$x--." and the value of y=".($y++)+(++$x).'<br>';


    $Username = "";
    $displayName = ($Username!="")?$Username :"Guest";
    echo "Welcome,".$displayName;
    ?>
</body>
</html>