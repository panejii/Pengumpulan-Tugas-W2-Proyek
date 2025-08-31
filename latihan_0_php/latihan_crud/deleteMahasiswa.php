<?php include 'database.php'; ?>

<?php
$nim = $_GET['nim'];
$sql = "DELETE FROM mahasiswa WHERE nim='$nim'";
if ($conn->query($sql)) {
    header("Location: index.php");
    exit;
} else {
    echo "Error: " . $conn->error;
}
?>
