<?php 
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM spp where id_spp=$id");
if ($query) {
    echo '<script>alert("Data berhasil dihapus"); location.href="index.php?page=spp"</script>'; 
}else {
    echo '<script>alert("Data GAGAL dihapus"); location.href="index.php?page=spp"</script>';

}
?>