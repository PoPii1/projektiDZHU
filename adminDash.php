 <?php
// Nese je admin kontrolli
$conn = new mysqli("localhost", "root", "", "login_system");
$sql = "SELECT * FROM mesazhet ORDER BY id DESC";
$result = $conn->query($sql);


if (isset($_POST['submitbtn'])) {
    // butonat a jane funskional
    $emri = $conn->real_escape_string($_POST['full_name']);
    $email = $conn->real_escape_string($_POST['email']);
    $tel = $conn->real_escape_string($_POST['phone']);
    $mesazhi = $conn->real_escape_string($_POST['message']);

    $sql = "INSERT INTO mesazhet (emri, email, telefoni, mesazhi) 
            VALUES ('$emri', '$email', '$tel', '$mesazhi')";

    if ($conn->query($sql) === TRUE) {
        echo "Sukses!"; 
    } else {

        die("Gabim teknik: " . $conn->error); 
    }
} 



?> 

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
</head>
<body>
    <h1>Mesazhet nga Klientët</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Emri Plotë</th>
            <th>Email</th>
            <th>Telefoni</th>
            <th>Mesazhi</th>
        </tr>
        <?php while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo htmlspecialchars($row['emri']); ?></td>
            <td><?php echo htmlspecialchars($row['email']); ?></td>
            <td><?php echo htmlspecialchars($row['telefoni']); ?></td>
            <td><?php echo nl2br(htmlspecialchars($row['mesazhi'])); ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>