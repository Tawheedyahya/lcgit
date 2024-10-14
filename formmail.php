<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $lang = isset($_POST['lang']) ? implode(", ", $_POST['lang']) : "None";
    $hobbies = $_POST['hobbies'];
    $dept = $_POST['dept'];
    $self_intro = $_POST['self_intro'];
    $day = $_POST['day'];
    $month = $_POST['month'];
    $year = $_POST['year'];
    $dob = "$day-$month-$year";
    $message = "Name: $name\nGender: $gender\nEmail: $email\nLanguages Known: $lang\nHobbies: $hobbies\nDepartment: $dept\nDOB: $dob\nSelf Introduction: $self_intro";
    
    $to = "kllrkomali@gmail.com";
    $subject = "Form Submission from $email";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email.";
    }
} else {
    echo "Invalid request method.";
}
?>
