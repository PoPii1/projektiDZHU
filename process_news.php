<?php
session_start();

$conn = new mysqli("localhost", "root", "", "login_system");

if (isset($_POST['submit_news'])) {
    
    $titulli = $conn->real_escape_string($_POST['titulli']);
    $pershkrimi = $conn->real_escape_string($_POST['pershkrimi']);
    
   
    $admin_user = isset($_SESSION['username']) ? $_SESSION['username'] : "Admin i panjohur";

   
    $file_name = $_FILES['fajlli']['name'];
    $file_tmp = $_FILES['fajlli']['tmp_name'];
    $target_dir = "uploads/";

    
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0777, true);
    }

    $target_file = $target_dir . basename($file_name);

    
    if (move_uploaded_file($file_tmp, $target_file)) {
       
        $sql = "INSERT INTO news (titulli, pershkrimi, fajlli, postuar_nga) 
                VALUES ('$titulli', '$pershkrimi', '$file_name', '$admin_user')";
        
        if ($conn->query($sql)) {
           
            header("Location: news.php");
            exit();
        } else {
            echo "Gabim në databazë: " . $conn->error;
        }
    } else {
        echo "Gabim: Fajlli nuk u ngarkua në folderin uploads. Kontrollo lejet e folderit.";
    }
}
?>