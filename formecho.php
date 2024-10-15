<?php
include "function.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $validation=validate($_POST);
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $lang = isset($_POST['lang']) ? implode(", ", $_POST['lang']) : "None";
    $hobbies = isset($_POST['hobbies']) ? implode(", ", $_POST['hobbies']) : "None";
    $dept = $_POST['dept'];
    $self_intro = $_POST['self_intro'];
    $day = $_POST['day'];
    $month = $_POST['month'];
    $year = $_POST['year'];
    $dob = "$day-$month-$year";
    $message = "Name: $name\nGender: $gender\nEmail: $email\nLanguages Known: $lang\nHobbies: $hobbies\nDepartment: $dept\nDOB: $dob\nSelf Introduction: $self_intro";
    if(!$validation){
        echo "<table border='1'>";
        foreach($_POST as $key => $value){
          if(is_array($value)){
             echo "<tr>"."<td>".$key."</td>"."<td>".implode(",",$value)."</td>"."<tr>";
           }
           else{
            echo "<tr>"."<td>".$key."</td>"."<td>".$value."</td>"."<tr>";
          }
          
          
        }echo "</table>";
    }
    else{
        echo implode("<br>",$validation);
    }
}else{
    echo "from can't get first";
}
?>
