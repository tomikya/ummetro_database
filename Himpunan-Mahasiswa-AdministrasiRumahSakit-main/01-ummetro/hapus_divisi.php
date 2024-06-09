<?php
$id = $_GET['id'];

$query = mysqli_query($konek, "DELETE FROM divisi WHERE id_divisi=$id");
if($query){
    echo '<script>location.href="index.php?page=divisi"</script>';
} else {
    echo '<script>location.href="index.php?page=divisi"</script>';
}