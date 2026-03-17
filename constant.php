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
</body>
</html>