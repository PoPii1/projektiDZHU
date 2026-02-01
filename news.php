<?php
session_start();
$conn = new mysqli("localhost", "root", "", "login_system");

if ($conn->connect_error) { die("Lidhja dështoi: " . $conn->connect_error); }

$sql = "SELECT * FROM news ORDER BY data_postimit DESC";
$result = $conn->query($sql);


?>

<!DOCTYPE html>
<html lang="sq">
<head>
    <meta charset="UTF-8">
    <title>News</title>
    <link rel="stylesheet" href="news.css">
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
    <div class="news-container">
        <h1>Unwrap our latest Fragrances</h1>
    




        <?php if ($result->num_rows > 0): ?>
            <?php while($row = $result->fetch_assoc()): ?>
                <?php require_once 'product.php'; ?>
                <!-- <div class="news-card">
                    <h2><?php //echo $row['titulli']; ?></h2>
                    <p class="meta-info">Postuar nga: <strong><?php //echo $row['postuar_nga']; ?></strong> me datë <?php // echo $row['data_postimit']; ?></p>
                    
                    <?php 
                   // $file_ext = pathinfo($row['fajlli'], PATHINFO_EXTENSION);
                  //  if ($file_ext == 'pdf'): ?>
                        <p>Ky lajm përmban një dokument: <a href="uploads/<?php //echo $row['fajlli']; ?>" class="pdf-link" target="_blank">Shiko PDF</a></p>
                    <?php //else: ?>
                        <img  src="uploads/<?php //echo $row['fajlli']; ?>" alt="Foto e lajmit">
                    <?php //endif; ?>

                    <p><?php //echo $row['pershkrimi']; ?></p>
                </div> -->
            <?php endwhile; ?>
        <?php else: ?>
            <p style="color: white;">Nuk ka lajme për të shfaqur.</p>
        <?php endif; ?>
    </div>
</body>
</html>