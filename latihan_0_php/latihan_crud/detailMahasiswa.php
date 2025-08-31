<?php include 'database.php'; ?>

<?php
$nim = $_GET['nim'];
$sql = "SELECT * FROM mahasiswa WHERE nim='$nim'";
$result = $conn->query($sql);
$data = $result->fetch_assoc();
?>

<h2>Detail Mahasiswa</h2>
<p><b>NIM:</b> <?= $data['nim']; ?></p>
<p><b>Nama:</b> <?= $data['nama']; ?></p>
<p><b>Umur:</b> <?= $data['umur']; ?></p>

<a href="index.php">Kembali</a>
