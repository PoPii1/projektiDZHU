<?php
session_start();
// Lidhja me DB
$conn = new mysqli("localhost", "root", "", "login_system");

if (isset($_POST['submit_news'])) {
    // 1. Marrim të dhënat nga forma
    $titulli = $conn->real_escape_string($_POST['titulli']);
    $pershkrimi = $conn->real_escape_string($_POST['pershkrimi']);
    
    // 2. Marrim emrin e adminit nga SESSION (Kërkesa e profesorit)
    $admin_user = isset($_SESSION['username']) ? $_SESSION['username'] : "Admin i panjohur";

    // 3. Trajtimi i fajllit
    $file_name = $_FILES['fajlli']['name'];
    $file_tmp = $_FILES['fajlli']['tmp_name'];
    $target_dir = "uploads/";

    // Krijo folderin nëse nuk ekziston
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0777, true);
    }

    $target_file = $target_dir . basename($file_name);

    // 4. Procesi i upload-it dhe INSERT në DB
    if (move_uploaded_file($file_tmp, $target_file)) {
        // SQL query për tabelën tënde 'news'
        $sql = "INSERT INTO news (titulli, pershkrimi, fajlli, postuar_nga) 
                VALUES ('$titulli', '$pershkrimi', '$file_name', '$admin_user')";
        
        if ($conn->query($sql)) {
            // Sukses! Shko te news.php për të parë rezultatin
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