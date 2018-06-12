<?php

$nameErr = $surnameErr = $emailErr = $subjectErr = $messageErr = "";
$name = $surname = $email = $subject = $message = "";

if (isset($_POST['submit'])) {
    
    include_once 'dbh.inc.php';

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $surname = mysqli_real_escape_string($conn, $_POST['surname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $subject = mysqli_real_escape_string($conn, $_POST['subject']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    //error handlers
    //check for empty fields
    if (empty($name) || empty($surname) || empty($email) || empty($subject) || empty($message)) {
        header("Location: ../contact.php?contact=empty&name=$name&surname=$surname&email=$email&subject=$subject&message=$message");
        echo "<p class='error'>Please fill in all fields.</p>";
        exit();

    } else {
        //check if input characters for name is valid 
            if (!preg_match("/^[a-zA-Z]*$/", $name)) {
                header("Location: ../contact.php?contact=check-name&surname=$surname&email=$email&subject=$subject&message=$message");
                exit();

        } else {

            if (!preg_match("/^[a-zA-Z]*$/", $surname)) {
                header("Location: ../contact.php?contact=check-surname&name=$name&email=$email&subject=$subject&message=$message");
                exit();       

        } else {

            //check email is valid
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            header("Location: ../contact.php?contact=check-email&name=$name&surname=$surname&subject=$subject&message=$message");
            exit();

            } else {

            $sql = "INSERT INTO user (name, email, subject, message, surname)
            VALUES ('$name', '$email', '$subject', '$message', '$surname');";
            mysqli_query($conn, $sql);
            header("Location: ../contact.php?contact=success");
            exit();
            }
        }
    }
}
}
 else {
    header("Location: ../contact.php?contact=error");
    exit();
}

