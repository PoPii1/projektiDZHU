   <link rel="stylesheet" type="text/css" href="products.css">
<div class="card-group">

<div class="card">

<div class="image">
   <img src="uploads/<?php echo $row['fajlli']; ?>">
</div>
<div class="size-options">
            <button class="size-btn active">50 ml</button>
            <button class="size-btn">30 ml</button>
            <button class="size-btn">250 ml</button>
        </div>
<div class="title">
 <h1>
    <?php echo $row['titulli']; ?>
</h1>
</div>
<div class="des">
    <div class="rating">★★★★★ <span></span></div>
    <p> 
        PARFUM
    </p>
    <p>Cmimi: 200€</p>
    <button class="add-to-bag">ADD TO BAG</button>
</div>
</div>
</div>
