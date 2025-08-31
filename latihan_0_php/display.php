<?php
if($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['nama'])){
    $nama = $_POST['nama'];
    $method = "POST";
}elseif($_SERVER['REQUEST_METHOD']==='GET' && isset($_GET['nama']))
    $nama = $_GET['nama'];
    $method = "GET";
?>

<!DOCTYPE>
<html>
<head>
    <title>Hasil Input</title>
</head>
<body>
    <?php if($nama) : ?>
        <h2>Halo, <?= $nama ?>!, Dikirim Via <?= $method ?></h2>
    <?php else : ?>
        <p>Tidak ada data yang dikirm</p>
    <?php endif; ?>
</body>
</html>