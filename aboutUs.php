<?php
$conn = new mysqli("localhost", "root", "", "login_system");

// me gjet tekstin nga db
function merrTekstin($faqja, $seksioni, $conn) {
    $sql = "SELECT teksti FROM faqet_permbajtja WHERE faqja = '$faqja' AND seksioni = '$seksioni'";
    $result = $conn->query($sql);
    if ($row = $result->fetch_assoc()) {
        return $row['teksti'];
    }
    return "Teksti nuk u gjet.";
}
?>

<!-- <!DOCTYPE html>    
<html>
<head>
    <title>About Us</title>
</head>
<body>
    <<div class="container">
    <h1>Rreth Nesh</h1> 
    <p><?php  //echo merrTekstin('about_Us', 'Pershkrimi', $conn); ?></p>
</div>
</body>
</html> -->






<!DOCTYPE html>
<html lang="en">
<head>
<title>Rreth nesh</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" type="text/css" href="aboutUs.css">

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
  
 
  
    <br>
    <br>
    <br>
    <h2>Who We Are</h2>
    <p>At our fragrance shop, we are dedicated to bringing you high-quality perfumes that combine elegance, freshness, and long-lasting aroma. <br>
      Our team carefully selects every scent to ensure it meets the highest standards of quality and craftsmanship</p>
    <p></p>




  <h2>A bit abouts Us</h2>
  <p>We work with trusted brands and skilled creators to offer a diverse collection for <br>
  every style—whether you prefer soft floral notes, warm oriental blends, or bold modern fragrances.</p>



<p>Our mission is to help each customer find a perfume that expresses their personality and boosts their confidence. <br>
We focus on great service, fast delivery, and 100% authentic products. <br>
With passion for beauty and detail, we continue to expand our collection and offer new, <br>
inspiring scents that make every moment memorable</p>

<br>
<br>
<br>


<h2 class="talk">Ready To Talk?</h2>
<p>Do you have any idea for our brands?</p>


<br>

<div class="form-submit">
<button class="size-btn active"><a href="kontakti.php">Contact Us</button></a>
</div>


</body>
</html> 


