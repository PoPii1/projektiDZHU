<?php
$conn = new mysqli("localhost", "root", "", "login_system");

if ($conn->connect_error) {
    die("Lidhja dështoi: " . $conn->connect_error);
}

if (isset($_POST['submitbtn'])) {
 //te dhenat pastrohen pas alertit
    $emri = $conn->real_escape_string($_POST['full_name']);
    $email = $conn->real_escape_string($_POST['email']);
    $tel = $conn->real_escape_string($_POST['phone']);
    $mesazhi = $conn->real_escape_string($_POST['message']);

    $sql = "INSERT INTO mesazhet (emri, email, telefoni, mesazhi) 
            VALUES ('$emri', '$email', '$tel', '$mesazhi')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Mesazhi u dërgua me sukses!'); window.location='kontakti.php';</script>";
    } else {
        echo "Gabim: " . $conn->error;
    }
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Kontakti</title>
	<link rel="stylesheet" type="text/css" href="kontakti.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
		
		<ul>      
      <li><a href="index.php"><p>Perfume Shop</p></a></li>
        <li><a href="index.php">Home</a></li>
         <li><a href="news.php">News</a></li>
        <li><a href="products.php">Products</a></li>
        <li><a href="aboutUs.php">About Us</a></li>
        <li><a href="kontakti.php">Contact</a></li>
        <li><a href="login.php">Login</a></li>
    </ul>

      <br>
			<br>
			<br>
			<br>

      <div class="form">
      <form class="login-form" method="POST" action="kontakti.php">

           <h1>CONTACT US</h1>

      <br>

          <input type="text" name="full_name" placeholder="Full Name" required/>
          <input type="email" name="email" placeholder="Email" required/>
          <input type="text" name="phone" placeholder="Phone Number"/>
          <textarea name="message" form="contactform" placeholder="Enter your message here..." required></textarea>
          <button type="submit" name="submitbtn">Send</button>

          <p class="message"> We would love to hear your opinion.</p>

        </form>
      </div>
    </div>

	<script src="script.js">

  </script>

</body>
</html>