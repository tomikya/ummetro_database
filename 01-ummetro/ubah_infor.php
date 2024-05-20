<?php 
$id=$_GET['id'];

if(isset($_POST['desk_infor'])) {
    $desk = $_POST['desk_infor'];
    $image = $_FILES['gambar_infor'];

    $query = mysqli_query($konek, "UPDATE informasi SET desk_infor='$desk' where id_infor=$id");

    if($image['name'] != "") {
        $nama_gambar = $image['name'];
        move_uploaded_file($image['tmp_name'], 'image_infor/'.$image['name']);
        $query = mysqli_query($konek, "UPDATE informasi SET gambar_infor='$nama_gambar' where id_infor=$id");
    }

     if ($query > 0) {
        echo '<script>alert("Tambah data berhasil !")</script>';
     } else {
        echo '<script>alert("Tambah data TIDAK berhasil !")</script>';
     }
}

$query = mysqli_query($konek, "SELECT*FROM informasi where id_infor=$id");
$data = mysqli_fetch_array($query);
?>


<h1 class="h3 mb-3">Ubah Data Berita</h1>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <a href="?page=informasi" class="btn btn-primary">Kembali</a>
                <hr>
                <form action="" method="post" enctype="multipart/form-data">
                    <table class="table">
                        <tr>
                            <td width="100">Gambar informasi</td>
                            <td width="1">:</td>
                            <td>
                                <a href="image_infor/<?php echo $data['gambar_infor'];?>" target="_blank">
                                <img src="image_infor/<?php echo $data['gambar_infor'];?>" width="200" alt="gambar">
                                </a><br>
                            <input type="file" name="gambar_infor"><br>
                            <i class="text-danger">*Jika tidak diganti, Kosongkan sajaa!</i></td>
                            
                        </tr>
                        <tr>
                            <td width="100">Deskripsi informasir</td>
                            <td width="1">:</td>
                            <td><input value="<?php echo $data['desk_infor'];?>" type="text" name="desk_infor" class="form-control"></td>
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