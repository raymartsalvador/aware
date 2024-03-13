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
            <form action="utilities/add_income.php" method="POST" class="p-3">
                <h1>Income</h1>
                <div class="mb-3">
                    <label class="form-label" for="title">Title</label>
                    <input type="text" class="form-control" name="income-title">
                    <label class="form-label" for="description">description</label>
                    <input type="text" class="form-control" name="description">
                    <label for="date">Date</label>
                    <input type="date" class="form-control" name="date">
                    <label for="amount" class="form-label">Amount</label>
                    <input type="number" class="form-control" id="amount" name="amount">
                    <button type=" submit" class="mt-3 btn btn-primary">Add Income</button>
                </div>
            </form>
        </div>


    </div>
</body>


</html>