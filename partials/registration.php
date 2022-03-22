<?php
session_start();
include 'dbconnect.php';
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $qly = $_POST['qly'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $ref = $_POST['ref'];
    $webdeveloper = $_POST['webdeveloper'];

    $insertFormData = "INSERT INTO formdata(name,qualification,mobile,email,reference,post)VALUES('$name','$qly','$phone','$email','$ref','$webdeveloper')";
    $result = $conn->query($insertFormData);
    if($result){
        header("location:../index.php");
        $_SESSION['msg'] = 'Data inserted successfully';
    }
    else{
        echo 'error';
    }
}
?>