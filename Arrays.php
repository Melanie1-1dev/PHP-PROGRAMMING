<?php
$Student_results = array('Kabanda', 'John', 'RCA', 20, 80.5);

echo "First Name: ". $Student_results[0];
echo"<br>";
echo "Last Name: ".$Student_results[1];
echo "<br>";
echo "School: ".$Student_results[2];
echo"<br>";
echo "Age: " .$Student_results[3] ;
echo"<br>";
echo "Marks: ".$Student_results[4];
echo"<br><br>";


$sum=0;
$numbers = array(27,36,50,75,105);
for($i=0;$i<5;$i++){
    $sum+= $numbers[$i];
    $average = $sum/5;
}
echo"The average of a given numbers:".$average."<br><br>";

var_dump($numbers)  ;
print_r($numbers);

$person = array(
    "name"=>"Melanie",
    "age"=>25,
    "city"=>"Kigali"
);

echo $person["name"];
echo $person["age"];

echo "<br>";
echo "<br>";
echo "<br>";

$students = [
    "Melanie"=>["Age" => 20, "Marks" =>99, "Grade" => "A+"],
    "John"  =>["Age" => 25, "Marks" =>90, "Grade" =>"A"],
    "Alice" =>["Age" =>18, "Marks" =>89, "Grade" =>"B"]
];
foreach ($students as $student => $result){
    echo $student  . " is " . $result["Age"] . " Years old and has grade  " .$result["Grade"] . "<br><br>";

}
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


$teachers = [
    "Teacher Jonh"=>["Id" => 1, "course" => "Javascript", "Class" =>"Y1A & B & C+ Y3 ALL", "Residential" =>"Kigali"],
    "Teacher Bosco"=>["Id" => 2, "course" => "Applied mathematics", "Class" =>"Y1A & B + Y3 ALL", "Residential" =>"Kigali"],
    "Teacher Hilaire"=>["Id" => 3, "course" => "FOP", "Class" =>"Y1A & B+ Y3 ALL", "Residential" =>"Kigali"],
    "Teacher Olivier"=>["Id" => 4, "course" => "PHP & Networking", "Class" =>"Y1A & B + Y3 ALL", "Residential" =>"Kigali"],
    "Teacher Jean de die"=>["Id" => 5, "course" => "Applied physics", "Class" =>"Y1A & B + Y3 ALL", "Residential" =>"Kigali"],
    "Teacher Larissa"=>["Id" => 6, "course" => "Embedded system", "Class" =>"Y1A & B & C + Y3 ALL", "Residential" =>"Kigali"],
    "Teacher Damascene"=>["Id" => 7, "course" => "WUI", "Class" =>"Y1A & B & C+ Y3 ALL", "Residential" =>"Kigali"]


];

foreach($teachers as $Teacher => $inform){
    echo $Teacher . " with " . $inform["Id"] . " Id " ." teaches " .$inform["course"] . " in " . $inform["Class"] ." and return at " . $inform["Residential"]  . " as residential" . "<br><br>";
}


$myFamily = [
    "mother" =>["Name"=> "Claire", "Age"=> 35, "job" => "Land valuer"],
    "Father"=>["Name"=> "Theo", "Age"=> 40, "job" =>"professor"],
    "Children"=>["Name"=>"Mimi,via, pacis", "Age"=>"17,15,7", "job"=>"learning"]
];

foreach($myFamily as $family => $inform){
    echo $family.": ".$inform["Name"]." with ".$inform["Age"]." years old. ". " And is professionalized in ".$inform["job"]."<br><br>";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <?php
    $numbers[10] = [10,20,34,45,24,25,27,15,28,19];

    do{
        echo $numbers[$i] ."<br />";
        $i ++;
        
    }
    while ($i < count($numbers));
    

    $sum = 0;

    for($i = 0; $i < count($numbers); $i++){
        $sum += $numbers($i);
    }

    $average = $sum/count($numbers);

    echo"The average of the above numbers is: " .$average;



     ?>
    
</body>
</html>