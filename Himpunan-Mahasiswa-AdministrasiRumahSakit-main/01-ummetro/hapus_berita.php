<?php
$id = $_GET['id'];

$query = mysqli_query($konek, "DELETE FROM berita WHERE id_berita=$id");
if($query){
    echo '<script>location.href="home.php?page=berita"</script>';
} else {
    echo '<script>location.href="home.php?page=berita"</script>';
}