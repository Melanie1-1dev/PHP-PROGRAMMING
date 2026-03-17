<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            .container{
             text-align: center;
             font-size: xx-large;
            }
        }
    </style>
</head>
<body>
    <div class="container">
    <?php
    for($i = 1;$i <= 5; ++$i){
        for($j = 1;$j <= $i;++$j){
            echo '*';
        }
        echo '<br>';
        
    }
    echo '<br>';
    for($i = 1; $i<= 8; $i++){
        for($j = 1; $j <= $i;$j++){
            echo "**";
        }
        echo"<br>";
    }
    echo"<br><br>";

    // for upper part

    for($i = 1;$i <= 5; ++$i){
        for($j = 1; $j <= $i; ++$j){
            echo '*';
        }
        echo '<br>';
    }
    // for lower part
    for($i = 5; $i >= 1; --$i){
        for($j = 1; $j <= $i; ++$j){
            echo '*';

        }
        echo '<br>';
    }

    echo"<br>";

    for($i =1;$i <= 10; $i++){
        for($j=1;$j <= $i;$j++){
            echo"*";
        }
        echo"<br>";
    }
    for($i =1;$i <= 4;$i++){
        echo"*";
    }
    for($i = 10; $i >=1 ;--$i){
        for($j=1;$j <= $i; ++$j){
            echo"*";
        }
        echo"<br>";
    }
    echo '<br>';

    $number = 4; //Number whose factorial is to be calculated
    $factorial = 1;  // Initialize factorial
     
    for($i = 1; $i <= $number; ++$i){
        $factorial *= $i;
    }
    echo "Factorial of $number is: $factorial";
     echo '<br>';
     echo '<br>';
     echo '<br>';


    for($n = 0;$n <= 9; $n++){
        echo '<br>';
        for($m =0;$m <=9; $m++){
            echo $n.$m;
            if(!($n ==9 && $m == 9)){
                echo ",";
            }
        }
    }
    echo '<br>';echo '<br>';

    for($i =0; $i<= 9;$i++){
        for($j = 0; $j<=9; $j++){
            echo $i.$j;
            if(!($i==9 && $j ==9)){
                echo "' ";
            }
        }
        echo"<br>";
    }
     
    ?>

    <table border="2" cellpadding="6px" cellspacing="1px">
        <?php
        for($i = 1;$i <= 6;++$i){
            echo '<tr>';
            for($l = 1;$l <= 5;++$l){
                echo "<td>$i*$l=".$i*$l.'</td>';
            }
            echo '</tr>';
        }
    
        ?>
    </table>
    <table border="3" cellspacing = "3px" cellpadding="5px">
        <?php
        for($i =1;$i <= 12;$i++){
            echo'<tr>';
            for($j = 1; $j <=8;$j++){
                echo"<td>$i*$j=".$i*$j.'</td>';
            }
                echo '</tr>';

        }
        ?>
    </table>
    <h1>Chestboard</h1>
    <table width="270px" border="1">
        
        <?php 
        for($i = 1; $i <= 9;$i++){
            echo '<tr>';
            for($k = 1; $k <=9;$k++){
                if(($i+$k) % 2 == 0){
                    echo "<td style='width:30px; height:30px; background-color:black;'></td>";
                } else{
                    echo "<td style='width:30px; height:30px; background-color:white;'></td>";
                }
            }
            echo "</tr>";
        }
        
        ?>
        
    </table>
    <h2>Multiplication table</h2>
    <table border="3px">
        <?php

        for($row = 1;$row <= 10;++$row){
            echo '<tr>';
            
            for($col=1;$col <= 10;++$col){
                echo "<td>".($row*$col)."</td>";
            }
          echo '</tr>';
        }
        ?>
        </table>
<h3>H pattern</h3>
        <?php
        for($i =1;$i <= 7;$i++){
            for($c = 1;$c <= 5;$c++){
                if($c == 1||$c == 5||$i==4){
                    echo '*';
                }else{
                    echo ' ';
                }
            }
            echo '<br>';
        }

        ?>
        <form method="post">
            <label for="percent">Percentage:</label><input type="number" name="marks" min="0" max="100" required>
            <br>
            <br>
            <input type="submit" name="submit" value="Display Grade">
        </form>
        <?php
         if(isset($_POST['submit'])){
            $marks = $_POST['marks'];
            
        switch(true){
            case($marks <= 100 && $marks >= 90):
                $grade = "A";
                break;
                case ($marks <=89 && $marks >= 80):
                    $grade = "B";
                    break;
                    case ($marks <= 79 && $marks >=70):
                        $grade = "C";
                        break;
                        case ($marks <= 59 && $marks >= 50):
                            $grade = "E";
                            break;
                            case ($marks <= 49 && $marks >= 40):
                             $grade = "F";
                            break;
                             case ($marks <= 39 && $marks >= 30):
                            $grade = "S";
                            break;
                            case ($marks < 30):
                                $grade = "U";
                                break;

                                default:
                                $grade = "Invalid marks";                          

        }
        echo "<h5>Percentage: $marks% </h5><br>";
        echo "<h6>Grade: $grade</h6>";
         }
        ?>
        <h1>Simple Calculator Operations</h1>
        <form method="$_POST">
        <label for="FirstN"> First Number:</label><input type="number" name="digits" value="Numbers" required><br><br>
        <label for="SecondN"> Second Number</label><input type="number" name="Numb" required><br><br>
        <label for="result">Results:</label><input type="text" readonly
           value="<?php echo $_POST['result'] ?? ''; ?>">
    <br><br>

        <button type="submit" name="op" value="+">+</button>
        <button type="submit" name="op" value="-">-</button>
        <button type="submit" name="op" value="*">*</button>
        <button type="submit" name="op" value="/">/</button>

        </form>

<?php
if (isset($_POST['op'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $op   = $_POST['op'];

    switch ($op) {
        case '+':
            $result = $num1 + $num2;
            break;
        case '-':
            $result = $num1 - $num2;
            break;
        case '*':
            $result = $num1 * $num2;
            break;
        case '/':
            $result = ($num2 != 0) ? $num1 / $num2 : "Cannot divide by zero";
            break;
    }

    $_POST['result'] = $result;
    echo "<script>
        document.getElementsByName('result')[0].value = '$result';
    </script>";
}
?>
</div>
</body>
</html>