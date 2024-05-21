<?php
$id = $_GET['id'];
if (isset($_POST['tanggal_berita'])) {
    $tnggl = $_POST['tanggal_berita'];
    $desk = $_POST['deskripsi_berita'];
    $image = $_FILES['gambar_berita'];

    $query = mysqli_query($konek, "UPDATE berita SET tanggal_berita = '$tnggl', deskripsi_berita='$desk' WHERE id_berita=$id");

    if($image['name'] != "") {
        $nama_gambar = $image['name'];
        move_uploaded_file($image['tmp_name'], 'image/'.$image['name']);
        $query = mysqli_query($konek, "UPDATE berita SET gambar_berita='$nama_gambar' where id_berita=$id");
    }

    if ($query) {
        echo '<script>alert("Ubah data berhasil !")</script>';
    } else {
        echo '<script>alert("Ubah data TIDAK berhasil !")</script>';
    }
}
$query = mysqli_query($konek, "SELECT*FROM berita WHERE id_berita=$id");
$data = mysqli_fetch_array($query);
?>

<h1 class="h3 mb-3">Ubah Data Berita</h1>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <a href="?page=berita" class="btn btn-primary">Kembali</a>
                <hr>
                <form action="" method="post" enctype="multipart/form-data">
                    <table class="table">
                        <tr>
                            <td width="100">Gambar Berita</td>
                            <td width="1">:</td>
                            <td>
                                <a href="image/<?php echo $data['gambar_berita'];?>" target="_blank">
                                <img src="image/<?php echo $data['gambar_berita'];?>" alt="gambar" width="200"></a><br>
                                <input type="file" name="gambar_berita" id=""><br>
                                <i class="text-danger">*Jika tidak diganti, Kosongkan sajaa!</i>
                        </td>
                        </tr>
                        <tr>
                            <td width="100">Tanggal Berita</td>
                            <td width="1">:</td>
                            <td><input value="<?php echo $data['tanggal_berita'];?>" type="date" name="tanggal_berita" class="form-control"></td>
                        </tr>
                        <tr>
                            <td width="100">Deskripsi Berita</td>
                            <td width="1">:</td>
                            <td><input value="<?php echo $data['deskripsi_berita'];?>" type="text" name="deskripsi_berita" class="form-control"></td>
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