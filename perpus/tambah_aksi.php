<?php 
include 'koneksi.php';

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$prodi = $_POST['prodi'];

    //jalankan query DELETE untuk menghapus data
    $query = "insert into anggota values('','$nama','$nim','$prodi')";
    $hasil_query = mysqli_query($koneksi, $query);

    //periksa query, apakah ada kesalahan
    if(!$hasil_query) {
      die ("Gagal tambah data: ".mysqli_errno($koneksi).
       " - ".mysqli_error($koneksi));
    } else {
      echo "<script>alert('Data berhasil Di tambah.');window.location='halaman_admin.php';</script>";
    }
?>

