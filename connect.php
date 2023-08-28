<?php
    $fName = $_POST['First Name'];
    $lName = $_POST['Last Name'];
    $email = $_POST['Email'];
    $phone = $_POST['Phone Number'];
    $message = $_POST['Message'];
  
    //Database connection

    $conn = new mysqli('localhost', 'u637671007_CF1', 'qN3!FA&]oS6', 'u637671007_CF1_Form_Subs')

    if($conn->connect_error) {
        die('Connection Failed  : '.$conn->connect_error);
    } else {
        $stmt = $conn->prepare("insert into Contact Form(First Name, Last Name, Email, Phone Number, Message)
        values(?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $fName, $lName, $email, $phone, $message);
        $stmt->execute();
        echo "Contact Form submitted!";
        $stmt->close();
        $conn->close();
    }
?>