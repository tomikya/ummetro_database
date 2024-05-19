<?php
$id = $_GET['id'];

$query = mysqli_query($koneksi, "DELETE FROM kelas WHERE id_kelas=$id");
if($query){
    echo '<script>alert("Hapus Data Berhasil !"); location.href="index.php?page=kelas"</script>';
} else {
    echo '<script>alert("Hapus Data Gagal !"); location.href="index.php?page=kelas"</script>';
}
?>