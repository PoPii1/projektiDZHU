<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    die("Access denied. Admins only.");
}

echo "Welcome Admin!";



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="admin.css"> <style>
        body {
            
            background-image: url(images/webi.jpg);
            background-size: cover;
            color: white;
            font-family: Arial, sans-serif;
            text-align: center;
            padding-top: 100px;
        }
        .index-btn {
            background-color: orange;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            width: 100%;
            cursor: pointer;
            transition: 0.3s;
        }

        .index-btn:hover {
    background-color: black;
}
    </style>
</head>
<body>
    <h1>Welcome to the Perfume Shop!</h1>
    <br><br>
    <a href="index.php" class="index-btn">Go to Home</a>

       <div class="login-container">

    <div class="form-container">
         <form action="process_news.php" method = "POST" enctype="multipart/form-data" class="form-login">
            <h2>Shto nje lajm te ri</h2>
            <input type="text" name="titulli" placeholder="Titulli i lajmit" required>
            <input type="text" name="pershkrimi" placeholder="Përshkrimi..." required>
             <input type="file" name="fajlli" accept=".jpg, .npg, ,pdf, .jpeg" required><br>
            <button type="submit" name="submit_news">Posto Lajmin</button>
            
    <td>
    <a href="fshij.php?id=<?php echo $row['id']; ?>" onclick="return confirm('A jeni i sigurt?')">Fshij</a>
</td>

           <a href="edit_permbajtja.php?id=<?php echo $row['id']; ?>">Edito</a>
        </form>
    </div>>
    
    
  
</body>
</html>

