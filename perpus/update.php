
<?php 
include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$prodi = $_POST['prodi'];

    //jalankan query DELETE untuk menghapus data
    $query = "update anggota set nama='$nama', nim='$nim', prodi='$prodi' where id='$id'";
    $hasil_query = mysqli_query($koneksi, $query);

    //periksa query, apakah ada kesalahan
    if(!$hasil_query) {
      die ("Gagal ubah: ".mysqli_errno($koneksi).
       " - ".mysqli_error($koneksi));
    } else {
      echo "<script>alert('Data berhasil Di ubah.');window.location='halaman_admin.php';</script>";
    }
?>

