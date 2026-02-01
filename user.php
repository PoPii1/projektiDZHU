<?php
session_start();


if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'user') {
    if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin') {
        header("Location: admin.php");
        exit();
    }
    
    header("Location: login.html"); 
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="login.css"> <style>
        body {
            
            background-image: url(images/webi.jpg);
            background-size: cover;
            color: white;
            font-family: Arial, sans-serif;
            text-align: center;
            padding-top: 100px;
        }
        .index-btn {
            background-color: #ff4b2b;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <h1>Welcome to the Perfume Shop!</h1>
    <p>This is your customer dashboard. You can browse our latest scents here.</p>
    <br><br>
    <a href="index.php" class="index-btn">Go to Home</a>
</body>
</html>

