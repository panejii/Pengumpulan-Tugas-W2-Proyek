<?php include 'database.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>

    <!-- Form Search -->
    <form method="GET" action="">
        <input type="text" name="keyword" placeholder="Cari nama atau NIM">
        <button type="submit">Cari</button>
    </form>
    <br>
    <a href="addMahasiswa.php">+ Tambah Mahasiswa</a>
    <br><br>

    <?php
    $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';
    $sql = "SELECT nim, nama, umur FROM mahasiswa 
            WHERE nim LIKE '%$keyword%' OR nama LIKE '%$keyword%'
            ORDER BY nim ASC";
    $result = $conn->query($sql);

    if ($result->num_rows > 0):
    ?>
        <table border="1" cellpadding="5" cellspacing="0">
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Umur</th>
                <th>Aksi Detail</th>
                <th>Aksi Edit</th>
                <th>Aksi Delete</th>
            </tr>
            <?php while($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?= $row['nim']; ?></td>
                <td><?= $row['nama']; ?></td>
                <td><?= $row['umur']; ?></td>
                <td><a href="detailMahasiswa.php?nim=<?= $row['nim']; ?>">Detail</a></td>
                <td><a href="editMahasiswa.php?nim=<?= $row['nim']; ?>">Edit</a></td>
                <td><a href="deleteMahasiswa.php?nim=<?= $row['nim']; ?>" onclick="return confirm('Hapus data ini?')">Delete</a></td>
            </tr>
            <?php endwhile ?>
        </table>
    <?php else: ?>
        <p>Tidak ada data mahasiswa</p>
    <?php endif ?>

</body>
</html>

<?php $conn->close(); ?>
