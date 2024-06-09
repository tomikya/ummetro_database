<?php
$id = $_GET['id'];
$query = mysqli_query($konek, "DELETE FROM informasi WHERE id_infor=$id");
if($query){
    echo '<script>alert("Hapus Data Berhasil !"); location.href="index.php?page=informasi"</script>';
} else {
    echo '<script>alert("Hapus Data Gagal !"); location.href="index.php?page=informasi"</script>';
}
?>