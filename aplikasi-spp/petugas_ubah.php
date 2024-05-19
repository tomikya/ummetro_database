<?php
$id = $_GET['id'];
if (isset($_POST['nama_petugas'])) {
    $nama_petugas = $_POST['nama_petugas'];
    $username = $_POST['username'];
    $level = $_POST['level'];
    $password = md5($_POST['password']);

    $query = mysqli_query($koneksi, "UPDATE petugas
    SET nama_petugas='$nama_petugas', username='$username', level='$level', password='$password' 
    WHERE id_petugas=$id");

    if ($query) {
        echo '<script>alert("Ubah data berhasil !")</script>';
    } else {
        echo '<script>alert("Ubah data TIDAK berhasil !")</script>';
    }
}
$query = mysqli_query($koneksi, "SELECT*FROM petugas WHERE id_petugas=$id");
$data = mysqli_fetch_array($query);
?>

<h1 class="h3 mb-3">Ubah Data Petugas</h1>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <a href="?page=petugas" class="btn btn-primary">Kembali</a>
                <hr>
                <form action="" method="post">
                    <table class="table">
                        <tr>
                            <td width="100">Nama</td>
                            <td width="1">:</td>
                            <td><input value="<?php echo $data['nama_petugas'];?>" type="text" name="nama_petugas" class="form-control"></td>
                        </tr>
                        <tr>
                            <td width="100">Username</td>
                            <td width="1">:</td>
                            <td><input value="<?php echo $data['username'];?>" type="text" name="username" class="form-control"></td>
                        </tr>
                        <tr>
                            <td width="100">Level</td>
                            <td width="1">:</td>
                            <td>
                                <select class="form-select" name="level">
                                    <option <?php if ($data['level']=='petugas') echo 'selected';?> value="petugas">Petugas</option>
                                    <option <?php if ($data['level']=='admin') echo 'selected';?> value="admin">Admin</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td width="100">Password</td>
                            <td width="1">:</td>
                            <td><input type="password" name="password" class="form-control">
                            *)Jika tidak diganti, kosongkan saja.</td>
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