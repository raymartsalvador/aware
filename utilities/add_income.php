<?php
include_once '../database/db_connect.php';
session_start();
if(!isset($_SESSION['user_id'])){
    header('Location: login.php');
}
$name = $_POST['income-title'];
$description = $_POST['description'];
$date = $_POST['date'];
$amount = $_POST['amount'];
$user_id = $_SESSION['user_id'];

if(empty($name) || empty($amount)){
    echo "All fields are required";
    exit();
}
$sql = "INSERT INTO income (name, description, income_date, amount, user_id) VALUES ('$name', '$description', '$date', '$amount', '$user_id')";
$result = mysqli_query($connection, $sql);
if($result){
    header('Location: ../income.php?success=true');
}
else{
    echo "Failed to add expenses";
}
?>