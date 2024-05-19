<?php 
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM petugas where id_petugas=$id");
if ($query) {
    echo '<script>alert("Data berhasil dihapus"); location.href="index.php?page=petugas"</script>'; 
}else {
    echo '<script>alert("Data GAGAL dihapus"); location.href="index.php?page=petugas"</script>'; 
}
?>