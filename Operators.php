<html>

<body bgcolor="yellow">
    <?php
    $a =2;
    $b=3;
    $result =++$a+$b++;
    $z=++$a+$b++;
    $ternay=($b > $a) ?"welcome":"return";
    echo'the quotient of two numbers=' . $result;
    echo'the quotient of two numbers=' . $z;
    echo'the quotient of two numbers=' . --$a+$b--;
    echo'the quotient of two numbeers=' . $ternay;
    ?>
    </body>
    </html>