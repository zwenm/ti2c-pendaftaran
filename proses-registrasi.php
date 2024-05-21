<?php

include("koneksi.php");

if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $asal = $_POST['asal'];
    $kategori = $_POST['kategori'];
    $bakat = $_POST['bakat'];

    $sql = "INSERT INTO tb_peserta (nama_peserta, asal, kategori, bakat)
    VALUE ('$nama', '$asal', '$kategori', '$bakat')";
    $query = mysqli_query($db, $sql);

    if($query){
        header('Location: daftar-peserta.php?status=berhasil');
    } else{
        header('Location: daftar-peserta.php?status=gagal');
    }
} else{
    die("Akses diblokir");
}
?>