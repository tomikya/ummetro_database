<?php 
if(isset($_POST['judul_akademik'])) {
    $jdl = $_POST['judul_akademik'];
    $desk = $_POST['deskripsi_akademik'];

    $query = mysqli_query($konek, "INSERT INTO akademik(judul_akademik, deskripsi_akademik) values ('$jdl', '$desk')");
    if($query > 0) {
        echo "<script>alert('Tambah data berhasil')</script>";
    } else {
        echo "<script>alert('Tambah data gagal')</script>";
    }
}

?>

<h1 class="h3 mb-3">Tambah Data Akademik</h1>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <a href="?page=akademik" class="btn btn-primary">Kembali</a><hr>
                <form method="post">
                    <table class="table">
                        <tr>
                            <td width="100">Judul Akademik</td>
                            <td width="1">:</td>
                            <td><input type="text" name="judul_akademik" class="form-control"></td>
                        </tr>
                        <tr>
                            <td width="100">Deskripsi Akademik</td>
                            <td width="1">:</td>
                            <td><input type="text" name="deskripsi_akademik" class="form-control"></td>
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