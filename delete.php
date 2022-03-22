<?php
include 'partials/dbconnect.php';
$id = $_GET['id'];
$deletSql = "delete from formdata where id=?";
$smt = $conn->prepare($deletSql);
$result = $smt->execute([$id]);
if($result){
    header("location:view.php");
}
else{
    echo 'there are some issue please try again';
}
?>