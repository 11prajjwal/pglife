<?php
    $fullname = $_POST['FullName'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $collegename = $_POST['collegename'];
    $gender = $_POST['gender']

    $conn = new mysqli('localhost','root','','pglifes');
    if($conn-> connect_error)
    {
        die('Connection Failed : '.$conn->connect_error);
    }
    else{
        $stmt = $conn->prepare("insert into registration(fullname,phone,email,password,collegename,gender)values(?,?,?,?,?,?)");
        $stmt->bind_param("sissss"$fullname, $phone, $email, $password, $collegename, $gender);
        $stmt->execute();
        echo "registration successfull";
        $stmt->close();
        $conn->close();
    }
?>    