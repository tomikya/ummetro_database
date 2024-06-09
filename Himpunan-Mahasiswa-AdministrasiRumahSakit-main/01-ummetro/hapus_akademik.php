<?php
$id = $_GET['id'];
$query = mysqli_query($konek, "DELETE FROM akademik where id_akademik=$id");
if($query){
    echo '<script>alert("Hapus Data Berhasil !"); location.href="index.php?page=akademik"</script>';
} else {
    echo '<script>alert("Hapus Data Gagal !"); location.href="index.php?page=akademik"</script>';
}
?>