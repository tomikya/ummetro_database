<?php
$id = $_GET['id'];
if (isset($_POST['judul_akademik'])) {
    $jdl = $_POST['judul_akademik'];
    $desk = $_POST['deskripsi_akademik'];

    $query = mysqli_query($konek, "UPDATE akademik
    SET judul_akademik = '$jdl', deskripsi_akademik='$desk' 
    WHERE id_akademik=$id");

    if ($query) {
        echo '<script>alert("Ubah data berhasil !")</script>';
    } else {
        echo '<script>alert("Ubah data TIDAK berhasil !")</script>';
    }
}
$query = mysqli_query($konek, "SELECT*FROM akademik WHERE id_akademik=$id");
$data = mysqli_fetch_array($query);
?>

<h1 class="h3 mb-3">Ubah Data akademik</h1>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <a href="?page=akademik" class="btn btn-primary">Kembali</a>
                <hr>
                <form action="" method="post">
                    <table class="table">
                        <tr>
                            <td width="100">Judul Akademik </td>
                            <td width="1">:</td>
                            <td><input value="<?php echo $data['judul_akademik'];?>" type="text" name="judul_akademik" class="form-control"></td>
                        </tr>
                        <tr>
                            <td width="100">Deskripsi Akademik</td>
                            <td width="1">:</td>
                            <td><input value="<?php echo $data['deskripsi_akademik'];?>" type="text" name="deskripsi_akademik" class="form-control"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td><button class="btn btn-success" type="submit">Simpan</button></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>