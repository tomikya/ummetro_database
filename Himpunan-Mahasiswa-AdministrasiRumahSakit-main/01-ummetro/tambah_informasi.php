<?php 
if(isset($_POST['desk_infor'])) {
    $desk = $_POST['desk_infor'];

    $image = $_FILES['gambar_infor'];
    $nama_gambar = $image['name'];

    move_uploaded_file($image['tmp_name'], 'image_infor/'.$image['name']);
    $query = mysqli_query($konek, "INSERT INTO informasi(desk_infor, gambar_infor) 
    VALUES ('$desk','$nama_gambar')");

     if ($query > 0) {
        echo '<script>alert("Tambah data berhasil !")</script>';
     } else {
        echo '<script>alert("Tambah data TIDAK berhasil !")</script>';
     }
}
?>

<h1 class="h3 mb-3">Tambah Data Berita</h1>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <a href="?page=informasi" class="btn btn-primary">Kembali</a><hr>
                <form method="post" enctype="multipart/form-data">
                    <table class="table">
                        <tr>
                            <td>Gambar</td>
                            <td width="1">:</td>
                            <td><input type="file" name="gambar_infor" class="forom-control"></td>
                        </tr>
                        <tr>
                            <td width="100">Deskripsi Berita</td>
                            <td width="1">:</td>
                            <td><input type="text" name="desk_infor" class="form-control"></td>
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