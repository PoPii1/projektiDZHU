<?php
$conn = new mysqli("localhost", "root", "", "login_system");

if ($conn->connect_error) { die("Lidhja dështoi: " . $conn->connect_error); }

$sql = "SELECT * FROM news ORDER BY data_postimit DESC";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html>
<head>
 <title>Products</title>
</head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="products.css">

<body>
    
     <ul>         
        <li><a href="index.php"><p>Perfume Shop</p></a></li>
        <li><a href="index.php">Home</a></li>
         <li><a href="news.php">News</a></li>
        <li><a href="products.php">Products</a></li>
        <li><a href="aboutUs.php">About Us</a></li>
        <li><a href="kontakti.php">Contact</a></li>
          </ul>

          <h2>Our Perfumes</h2>

<div class="main">

    <div class="filter-sidebar">

    <div class="filter-section">
        <div class="filter-header"  onclick="toggleList(this)">
            <span>PRODUCT TYPE</span>
            <span class="icon">−</span>
        </div>

       <ul class="filter-list">

            <li><input type="checkbox"> BEARD OIL</li>          
            <li><input type="checkbox"> FRAGRANCE GIFT SETS</li>
            <li><input type="checkbox"> PERFUMES & COLOGNES</li>
            <li><input type="checkbox"> SHIMMERING BODY OIL</li>
    </div>

    <div class="filter-section">
        <div class="filter-header">
            <span>COLLECTION NAME</span>
            <span class="icon">+</span>
        </div>
    </div>

    <div class="filter-section">
        <div class="filter-header">
            <span>FRAGRANCE FAMILY</span>
            <span class="icon">+</span>
        </div>
    </div>

    <div class="filter-section">
        <div class="filter-header">
            <span>FRAGRANCE CONCENTRATION</span>
            <span class="icon">+</span>
        </div>
    </div>

</div>


 

<div class="card1-group">
<div class="card">

<div class="image">
   <img src="images/dior.jpg">
</div>
<div class="size-options">
            <button class="size-btn active">50 ml</button>
            <button class="size-btn">30 ml</button>
            <button class="size-btn">250 ml</button>
        </div>

<div class="title">
 <h1>
DIOR SAVAUGE</h1>
</div>
<div class="des">
     <div class="rating">★★★★★ <span></span></div>
 <p>PARFUM
 </p>
<p>Cmimi: 112€</p>
<button class="add-to-bag">ADD TO BAG</button>
</div>
</div>




<div class="card">
<div class="image">
   <img src="images/saint.jpg">
</div>
<div class="size-options">
            <button class="size-btn active">50 ml</button>
            <button class="size-btn">30 ml</button>
            <button class="size-btn">250 ml</button>
        </div>
<div class="title">
 <h1>
YSENT LAURANT</h1>
</div>
<div class="des">
    <div class="rating">★★★★★ <span></span></div>
   <p> PARFUM
   </p>
   <p>Cmimi: 108€</p>
   <button class="add-to-bag">ADD TO BAG</button>
</div>
</div>






<div class="card">
 <div class="image">
   <img src="images/tiffany.jpg">
</div>
<div class="size-options">
            <button class="size-btn active">50 ml</button>
            <button class="size-btn">30 ml</button>
            <button class="size-btn">250 ml</button>
        </div>
<div class="title">
 <h1>
TIFFANY</h1>
</div>
<div class="des">
    <div class="rating">★★★★★ <span></span></div>
    <p> PARFUM
    </p>
    <p>Cmimi: 178€</p>
    <button class="add-to-bag">ADD TO BAG</button>
</div>
</div>

 <?php //if ($result->num_rows > 0): ?>
            <?php //while($row = $result->fetch_assoc()): ?>
<?php  //require_once 'product.php'; ?>
<?php //endwhile; ?>
        <?php //else: ?>
           <!-- <p style="color: white;">Nuk ka lajme për të shfaqur.</p>  -->
        <?php //endif; ?> 




<div class="card">
<div class="image">
   <img src="images/inspire.jpg">
</div>
<div class="size-options">
            <button class="size-btn active">50 ml</button>
            <button class="size-btn">30 ml</button>
            <button class="size-btn">250 ml</button>
        </div>

<div class="title">
 <h1>
    INSPIRE
</h1>
</div>
<div class="des">
     <div class="rating">★★★★★ <span></span></div>
    <p> 
        PARFUM
    </p>
    <p>Cmimi: 182€</p>
    <button class="add-to-bag">ADD TO BAG</button>
</div>
</div>
</div>



<div class="card">
<div class="image">
   <img src="images/Ford.jpg" alt="">
</div>
<div class="size-options">
            <button class="size-btn active">50 ml</button>
            <button class="size-btn">30 ml</button>
            <button class="size-btn">250 ml</button>
        </div>
<div class="title">
 <h1>
    Tom Ford
</h1>
</div>
<div class="des">
     <div class="rating">★★★★★ <span></span></div>
    <p> 
        PARFUM
    </p>
    <p>Cmimi: 460€</p>
    <button class="add-to-bag">ADD TO BAG</button>

</div>
</div>





<div class="card">
<div class="image">
<img src="images/jean.jpg" alt="">
</div>
<div class="size-options">
            <button class="size-btn active">50 ml</button>
            <button class="size-btn">30 ml</button>
            <button class="size-btn">250 ml</button>
        </div>
<div class="title">
 <h1>
    JEAN PAUL
</h1>
</div>
<div class="des">
     <div class="rating">★★★★★ <span></span></div>
    <p> 
        PARFUM
    </p>
    <p>Cmimi: 359€</p>
    <button class="add-to-bag">ADD TO BAG</button>

</div>
</div>

<div class="card">
<div class="image">
<img src="images/villian.jpg" alt="">
</div>
<div class="size-options">
            <button class="size-btn active">50 ml</button>
            <button class="size-btn">30 ml</button>
            <button class="size-btn">250 ml</button>
        </div>
<div class="title">
 <h1>
    VILLIAN
</h1>
</div>
<div class="des">
     <div class="rating">★★★★★ <span></span></div>
    <p> 
        PARFUM
    </p>
    <p>Cmimi: 303€</p>
    <button class="add-to-bag">ADD TO BAG</button>

</div>
</div>



<div class="card">
<div class="image">
<img src="images/SPICE.jpg" alt="">
    </div>
    <div class="size-options">
            <button class="size-btn active">50 ml</button>
            <button class="size-btn">30 ml</button>
            <button class="size-btn">250 ml</button>
        </div>
    <div class="title">
     <h1>
        SPICEBOMB
    </h1>
    </div>
    <div class="des">
         <div class="rating">★★★★★ <span></span></div>
        <p> 
            PARFUM
        </p>
        <p>Cmimi: 101€</p>
         <button class="add-to-bag">ADD TO BAG</button>
    </div>
    </div>  
    
<script>
function toggleList(header) {
    const section = header.parentElement;
    const list = section.querySelector(".filter-list");
    const icon = header.querySelector(".icon");

    if (list.style.display === "none") {
        list.style.display = "flex";
        icon.textContent = "−";
    } else {
        list.style.display = "none";
        icon.textContent = "+";
    }
}
</script>


</div>
</div>
</div> 
</body>
</html>