<?php
$id = $_GET['id'];

$query = mysqli_query($konek, "DELETE FROM berita WHERE id_berita=$id");
if($query){
    echo '<script>alert("Hapus Data Berhasil !"); location.href="index.php?page=berita"</script>';
} else {
    echo '<script>alert("Hapus Data Gagal !"); location.href="index.php?page=berita"</script>';
}