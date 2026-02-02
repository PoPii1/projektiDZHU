
<?php
$conn = new mysqli("localhost", "root", "", "login_system");
$id = $_GET['id'];

// 1. Merr të dhënat aktuale që t'i shfaqësh në formë
$res = $conn->query("SELECT * FROM faqet_permbajtja WHERE id = $id");
$row = $res->fetch_assoc();

// 2. Nëse klikohet butoni "Ruaj", bëhet Update
if (isset($_POST['ruaj'])) {
    $teksti_ri = $conn->real_escape_string($_POST['teksti']);
    
    $update_sql = "UPDATE faqet_permbajtja SET teksti = '$teksti_ri' WHERE id = $id";
    
    if ($conn->query($update_sql) === TRUE) {
        echo "U ndryshua me sukses!";
        header("Location: admin_content.php");
    }
}
?>

<form method="POST">
    <textarea name="teksti"><?php echo $row['teksti']; ?></textarea>
    <button type="submit" name="ruaj">Ruaj Ndryshimet</button>
</form>