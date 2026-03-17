<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background: #3ba34b;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;

        }
        label{
            color: solidblack;
        }
        .container{
       background: #ffffff;
       padding: 30px;
       border-radius: 10px;
       box-shadow: o 4px 10px #000031;
       width: 350px;
        }
        input[type="text"],
    input[type="email"],
    input[type="password"],
    textarea,
    select {
      width: 60%;
      padding: 20px;
      margin-top: 5px;
      border: 1px solid #22028d;
      border-radius: 5px;
    }
        input[type="radio"]{
            margin-right: 5px;
        }
        button{
    background-color: aquamarine;
    color: blueviolet;
}
button{
    margin-top: 15px;
    width: 100%;
    background: #000031;
    color: rgb(115, 139, 5);
    border: none;
    padding: 10px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
}
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <?php
    if(isset($_GET['create'])){
        echo'User submitted';
    }
    ?>
    <div class="container">
        <h1 style="color:rgb(2, 106, 33);">Registration form</h1>
        <form action="#" method="GET">
           <div> <label for="fname">FirstName</label><input type="text" name="firstName"id="fname" placeholder="Enter your FirstName"><br></div> 
           <div> <label for="lname">LastName</label><input type="text" name="lastName"id="lname" placeholder="Enter your LastName"><br></div> 
            <div><label for="email">Email</label><input type="email" name="email"id="em" placeholder="Enter your Email"></div> 
            <div><label for="gender">Gender</label></div> 
            <div><input type="radio" name="gender" value="Male"> Male<br></div> 
           <div><input type="radio" name="gender" value="Female">Female<br></div> 
                  <h2>Country</h2>
            <div><label for ="nationality">Nationality</label></div> 
            <div><select name="nationality"></div> 
               <div><option value="">---Select Nationality---</option></div> 
               <div><option value="Rwanda">Rwanda</option></div> 
                <div><option value="Uganda">Uganda</option></div> 
               <div><option value="Burundi">Burundi</option></div> 
                <div><option value="Kenya">Kenya</option></div> 
                <div><option value="Tanzania">Tanzania</option></div>
                <div><option value="DRC">DRC</option></div> 
                </select><hr>
                <div><label for="meg">About yourself</label></div> 
              <div><textarea name="Message"rows="10"cols="40" placeholder="write about yourself here..."></textarea><br></div> 
            <div><button type="submit"value="create account">create account</div></button>


        </form>
    </div>
    
</body>
</html>