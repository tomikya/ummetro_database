<?php
$id = $_GET['id'];
if (isset($_POST['nama'])) {
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $image = $_FILES['profile_divisi'];

    $query = mysqli_query($konek, "UPDATE divisi SET nama = '$nama', jabatan='$jabatan' WHERE id_divisi=$id");

    if($image['name'] != "") {
        $nama_gambar = $image['name'];
        move_uploaded_file($image['tmp_name'], 'images_divisi/'.$image['name']);
        $query = mysqli_query($konek, "UPDATE divisi SET profile_divisi='$nama_gambar' where id_divisi=$id");
    }

    if ($query) {
        echo '<script>alert("Ubah data berhasil !")</script>';
    } else {
        echo '<script>alert("Ubah data TIDAK berhasil !")</script>';
    }
}
$query = mysqli_query($konek, "SELECT*FROM divisi WHERE id_divisi=$id");
$data = mysqli_fetch_array($query);
?>

<h1 class="h3 mb-3">Ubah Data Divisi</h1>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <a href="?page=divisi" class="btn btn-primary">Kembali</a>
                <hr>
                <form action="" method="post" enctype="multipart/form-data">
                    <table class="table">
                        <tr>
                            <td width="100">Gambar Berita</td>
                            <td width="1">:</td>
                            <td>
                                <a href="images_divisi/<?php echo $data['profile_divisi'];?>" target="_blank">
                                <img src="images_divisi/<?php echo $data['profile_divisi'];?>" alt="gambar" width="200"></a><br>
                                <input type="file" name="profile_divisi" id=""><br>
                                <i class="text-danger">*Jika tidak diganti, Kosongkan sajaa!</i>
                        </td>
                        </tr>
                        <tr>
                            <td width="100">Nama</td>
                            <td width="1">:</td>
                            <td><input value="<?php echo $data['nama'];?>" type="text" name="nama" class="form-control"></td>
                        </tr>
                        <tr>
                            <td width="100">Jabatan</td>
                            <td width="1">:</td>
                            <td><input value="<?php echo $data['jabatan'];?>" type="text" name="jabatan" class="form-control"></td>
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