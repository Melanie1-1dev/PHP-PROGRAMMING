<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body{
            background-color: dodger-blue;
            text-align:CENTER 
            
           

         
        form { 
            style= "border: 2px; solid  tomato";
            font-size:300%}
        }
        
        </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>converter</title>
</head>
<body>
    <h1 style = "border: 2px dodger-blue;">CONVERSION OF TEMPERATURE FROM CELSIUS TO FAHRENHEIT SYSTEM😁👌</h1>

<br>
<p> The first box is where you enter your temperature value that ypu want to convert into fahrenheit,
     then you press on the next box written in convert to get your results </p>

    <form method="POST">
    <input type="number" name="celsius" required>
    <button type="submit" name="convert">convert</button>

<br>
<br>
<hr>
<br>
    <input type="number" name="fahrenheit"required>
    <button type="report" name="convert">convert</button>
   </form>
    <?php
if(isset($_POST['convert'])){
    $celsius = $_POST['celsius'];
    $fahrenheit = ($celsius *9/5)+32;
    echo "fahrenheit is:". $fahrenheit;}



    if(isset($_POST['convert'])){
        $fahrenheit = $_POST['fahrenheit'];
        $celsius=($fahrenheit-32)*5/9;
        echo "celsius is:". $celsius;
    }
    
    
    ?>
    
</body>
</html>