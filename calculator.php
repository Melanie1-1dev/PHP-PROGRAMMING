
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>A simple Calculator Operations</h1>
    <form method="POST">

    <label for="Firstnum">First Number</label><input type="number" name="First Number">
    <br>
    <br>
    <label for="secondn">Second Number</label><input type="number" name="Second number">
    <br>
    <br>
    
    <label for="result">Results: </label><input for="number" readonly="value ="<?php echo $_POST['result'] ??'';?>>
    </form>
    <br>
    <br>

    <button type="submitt" name="oper" value="+">+</button>
    <button type="submitt" name="oper" value="-">-</button>
    <button type="submitt" name="oper" value="*">*</button>
    <button type="submitt" name="oper" value="/">/</button>
<br>
<br>
    
    <?php 
    if(isset($_POST['oper'])){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $opera = $_POST['oper'];

        switch($oper){
            case '+':
                $result = $num1 + $num;
                break;
                case '-':
                    $result = $num1 - $num2;
                    break;
                    case '*':
                        $result = $num1 * $num2;
                        break;
                        case '/':
                            if($num2 !=0){
                                $result = $num1 / $num2;
                            }else{
                                $result="cannot divide by zero";
                            }
                            break;

        }
    }
    ?>
</body>
</html>