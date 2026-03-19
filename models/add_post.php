<?php
session_start();
include '../db/dbconnect.php';

$post = htmlspecialchars($_POST['post-area']);
$aid = $_SESSION['aid'];

$sql = "INSERT INTO account VALUES (0, '$aid','$post',NOW(),NOW())";

if ($con->query($sql)){
    echo "Post Added";
}
else{
    echo $con->error;
}


$con->close();

header("location:../profile.php");



