<?php include 'database.php'; ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim  = $_POST['nim'];
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];

    $sql = "INSERT INTO mahasiswa (nim, nama, umur) VALUES ('$nim', '$nama', '$umur')";
    if ($conn->query($sql)) {
        header("Location: index.php");
        exit;
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<h2>Tambah Mahasiswa</h2>
<form method="POST">
    NIM: <input type="text" name="nim" required><br>
    Nama: <input type="text" name="nama" required><br>
    Umur: <input type="number" name="umur" required><br>
    <button type="submit">Simpan</button>
</form>
