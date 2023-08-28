<?php
    $fName = $_POST['fName'];
    $lName = $_POST['lName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
  
    //Database connection

    $conn = new mysqli('localhost', 'u637671007_CF1', 'qN3!FA&]oS6', 'u637671007_CF1_Form_Subs');

    if($conn->connect_error) {
        die('Connection Failed  : '.$conn->connect_error);
    } else {
        $stmt = $conn->prepare("insert into Contact Form(fName, lName, email, phone, message)
        values(?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $fName, $lName, $email, $phone, $message);
        $stmt->execute();
        echo "Contact Form submitted!";
        $stmt->close();
        $conn->close();
    }
?>