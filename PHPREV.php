<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PHP PROGRAMMING </title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            background: whitesmoke;
            color: greenyellow;
            font-size: 70px;
        }
        .container{
            text-align: center;
            border: 4px solid blue;
            border-radius: 30px;
            max-width: 600px;
            margin-left: 400px;
            margin-top: 20px;
            padding: 40px 8px;

        }
        .container h1{
            color: black;
            text-transform: capitalize;
            text-overflow: clip;
            text-decoration: 4px solid underline;
            font-size: 60px;
        }
        .container h1:hover{
            color: blue;
        }
        .container form{
            padding: 30px 20px;
        }
        button{
            padding: 10px 40px;
            position: relative;
            margin-left: 5px;
        }
        input{
            padding: 10px 40px;
            position: relative;
            margin-left: 5px;
        }
        .container:hover{
            box-shadow: 9px 15px 5px burlywood, 9px 15px 5px;
            background: lightblue;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>UPLOAD FILE</h1>
        <form action="POST" encritype="form-data">
             <input type="file"name="uploaded-file" required>
             <br>
             <button type="submit">Submit</button>


        </form>
   
    <?php 
    if (isset($_FILES["uploaded-file"])&&$_FILES['uploaded-file']['error']==0){
        $fileName = $_FILES["uploaded-file"]['name'];
        $tmpName = $_FILES["uploaded-file"]['tmp-name'];
        $fileSize =$_FILES["uploaded-file"]['size'];
        $uploadDir = 'uploads/';


    

    if(!is_dir($uploadDir)){
        mkdir($uploadDir, 0777, true);

    }
    

    if(move_uploaded_file($tmpName, $uploadDir.$fileName)){
        echo "file uploaded successfully!😀";
    }
    else{
        echo" file upload failed.😟";
    }
     
    echo "<p>File Name: $fileName </p>";
  echo "<p> File size: $fileSize </p>";
    }
    
    ?>

  
     </div>
     <div>
          <?php 
    function _addNumber($num1, $num2, $num3, $num4){
        $sum = $num1 + $num2 + $num3 + $num4;
        
        echo " The sum of the all numbers are: $sum "."<br><br>";

    }

    _addNumber(10, 30, 45, 57);
    _addNumber(40, 67, 45, 78);

    function productInMath($n, $n5, $num){
        $result = $n * $n5 * $num;

        echo " The product $n are: $result". "<br><br>";
    }

    productInMath(7, 5, 4);

    function addNumber($num, $num2){
        $sum = $num + $num2;
        return $sum;
    }

    $result= addNumber(30, 45);

    echo "Returned value is: $result"."<br>";

    function cubeArea($s){
        $Area = $s**2 * 6;
        return $Area;
    }

    echo "The Area of the cube is:  ".cubeArea(4)."<br>";

    function addTen(&$number){
        $number += 10;

    }
    $number = 5;
    addTen($number);
    echo "The result is: $number"."<br><br>";


    function recursiveFactorial($n){
        if($n <=1){
            return 1;
            
        }
        else{
            return $n * recursiveFactorial($n-1);          
        }
    
    }
   
         echo "Factorial number = ".recursiveFactorial(5)."<br><br>";

         echo date("Y-m-d H:i:s")."<BR>";
         echo date("Y/m/d H:i:s")."<br>";
         echo date("D, F j, Y");
    
    ?>

    <?php 
    $file = fopen("text.txt","r");
    if($file){
        echo"file opened successfully";
        fclose($file);
    }

    $file = fopen("text.txt", "w");
    if($file){
        echo "file ready for writing"."<br> <br>";
        fclose($file);
    }

    function mystring($string){
        return $string;
    }
        $string = "This is my string to be tested.";

    $Output = strtoupper($string);
    echo "$Output";
    mystring($string);
    
    
    
    ?>
     </div>
</body>
</html>