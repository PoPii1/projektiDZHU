<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <ul>         
       
        <li><a href="index.php"><p>Perfume Shop</p></a></li>
        <li><a href="index.php">Home</a></li>
        <li><a href="news.php">News</a></li>
        <li><a href="products.php">Products</a></li>
        <li><a href="aboutUs.php">About Us</a></li>
        <li><a href="kontakti.php">Contact</a></li>
          </ul>
          <div class="login-container">

    <div class="form-container">
         <form action="login.php" method = "POST" class="form-login">
            <h2>Login</h2>
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
            <p>Not registered? <a href="register.php">Create an account</a></p>

        </form>
    </div>
    
          </div>
    <script src="script.js"></script>
</body>
</html>


<?php

session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

$conn = new mysqli("localhost", "root", "", "login_system");

if (isset($_POST['username']) && isset($_POST['password'])) {
   $username = $_POST['username'];
   $password = $_POST['password'];


$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $user = $result->fetch_assoc();

    $_SESSION['role'] = $user['role'];

    if ($user['role'] == 'admin') {
        header("Location: admin.php");
        exit();
    } else {
        header("Location: user.php");
        exit();
    }
} else {
    echo "Username ose password eshte gabim";
}
}



?>