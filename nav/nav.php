<?php 

$title = "Aware App";
include_once 'database/db_connect.php';


// if(isset($_SESSION['first_name' && 'last_name'])){
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
// }
// else{
//     header('Location: login.php');
// }
?>
<div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px; height:100%">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <svg class="bi me-2" width="40" height="32">
            <use xlink:href="#bootstrap" />
        </svg>

        <span class="fs-4">
            <?= $title ?>
        </span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="home.php" class="nav-link text-white ">
                <i class="fa-solid fa-house me-2"></i>
                Home
            </a>
        </li>
        <li>
            <a href="dashboard.php" class="nav-link text-white" aria-current="page">
                <i class="fa-solid fa-gauge me-2"></i>
                Dashboard
            </a>
        </li>
        <li>
            <a href="income.php" class="nav-link text-white">
                <i class="fa-solid me-2 fa-money-bill-trend-up"></i>
                Income
            </a>
        </li>
        <li>
            <a href="expenses.php" class="nav-link text-white">
                <i class="fa-solid fa-arrow-trend-down me-2"></i>
                Expenses
            </a>
        </li>
        <li>
            <a href="bills.php" class="nav-link text-white">
                <i class="fa-solid fa-receipt me-2"></i>
                Payment Bills
            </a>
        </li>
    </ul>
    <hr>
    <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1"
            data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
            <strong><?= $first_name ?> <?= $last_name ?>
            </strong>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
            <li><a class="dropdown-item" href="#">Settings</a></li>

            <li><a class="dropdown-item" href="logout.php">Sign out</a></li>
        </ul>
    </div>
</div>