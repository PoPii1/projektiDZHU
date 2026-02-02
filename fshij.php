<?php
$conn = new mysqli("localhost", "root", "", "login_system");
$id = $_GET['id']; // Merr ID-në nga URL

$sql = "DELETE FROM mesazhet WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    header("Location: admin_dashboard.php"); // Kthehu te dashboard
} else {
    echo "Gabim gjatë fshirjes: " . $conn->error;
}
?>