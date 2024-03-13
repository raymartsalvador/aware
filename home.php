<!DOCTYPE html>
<html lang="en">

<?php 
include 'database/db_connect.php';
session_start();
$first_name = $_SESSION['first_name'];
$id = $_SESSION['user_id'];
if(isset($_SESSION['first_name'])){
    $first_name = $_SESSION['first_name'];
}
else{
    header('Location: login.php');
}

// Filter by year
$year = date('Y');
$statement = "SELECT * FROM expenses WHERE user_id = '$id'";
$incomeStatement = "SELECT * FROM income WHERE user_id = '$id'";

// Optionally filter by month

if(isset($_GET['year'])){
    $year = $_GET['year'];
    $statement .= " AND YEAR(expense_date) = '$year'";
    $incomeStatement .= " AND YEAR(income_date) = '$year'";
}
if(isset($_GET['month'])){
    $month = $_GET['month'];
    $statement .= " AND MONTH(expense_date) = '$month'";
    $incomeStatement .= " AND MONTH(income_date) = '$month'";
}

$result = mysqli_query($connection, $statement);
$expenses = mysqli_fetch_all($result, MYSQLI_ASSOC);

$incomeResult = mysqli_query($connection, $incomeStatement);
$income = mysqli_fetch_all($incomeResult, MYSQLI_ASSOC);

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="d-flex h-100">
        <nav class="">
            <?php
        include 'nav/nav.php';
        ?>
        </nav>
        <div class="bg-danger">

            <h1 class="row justify-content-center align-items-center g-2">
                <h1 class="display-1">Welcome to Aware App</h1>
            </h1>
</body>

</html>