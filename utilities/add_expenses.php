<?php
include_once '../database/db_connect.php';
session_start();
if(!isset($_SESSION['user_id'])){
    header('Location: login.php');
}
$name = $_POST['expense-title'];
$description = $_POST['description'];
$date = $_POST['date'];
$amount = $_POST['amount'];
$user_id = $_SESSION['user_id'];
if(empty($name) || empty($amount)){
    echo "All fields are required";
    exit();
}
$sql = "INSERT INTO expenses (name, description, expense_date, amount, user_id) VALUES ('$name', '$description', '$date', '$amount', '$user_id')";
$result = mysqli_query($connection, $sql);
if($result){
    header('Location: ../expenses.php');
}
else{
    echo "Failed to add expenses";
}
?>