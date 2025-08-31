<?php include 'database.php'; ?>

<?php
$nim = $_GET['nim'];
$sql = "SELECT * FROM mahasiswa WHERE nim='$nim'";
$result = $conn->query($sql);
$data = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];

    $sql = "UPDATE mahasiswa SET nama='$nama', umur='$umur' WHERE nim='$nim'";
    if ($conn->query($sql)) {
        header("Location: index.php");
        exit;
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<h2>Edit Mahasiswa</h2>
<form method="POST">
    NIM: <input type="text" value="<?= $data['nim']; ?>" disabled><br>
    Nama: <input type="text" name="nama" value="<?= $data['nama']; ?>"><br>
    Umur: <input type="number" name="umur" value="<?= $data['umur']; ?>"><br>
    <button type="submit">Update</button>
</form>
