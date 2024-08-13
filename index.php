<?php
$angka1 = $_GET['nomor1'];
$angka2 = $_GET['nomor2'];
$hasil = $angka1+$angka2;
?>

<html>
    <form action="" method="get">
        <label for="">Angka 1</label>
        <input type="number" placeholder="angka 1" name="nomor1">
        <br>
        <label for="">Angka 2</label>
        <input type="number" placeholder="angka 2" name="nomor2">
        <button type="submit">Jumlahkan</button>
    </form>

    <h1><?php echo "Hasilnya adalah = $hasil" ?></h1>
</html>