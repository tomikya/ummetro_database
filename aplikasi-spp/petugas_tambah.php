<?php 
if(isset($_POST['username'])) {
    $nama_petugas = $_POST['nama_petugas'];
        $username = $_POST['username'];
    $level = $_POST['level'];
    $password = md5($_POST['password']);

    $query = mysqli_query($koneksi, "INSERT INTO petugas( nama_petugas,username, level, password) values ('$nama_petugas','$username', '$level', '$password')");

     if ($query) {
        echo '<script>alert("Tambah data Petugas berhasil !")</script>';
     } else {
        echo '<script>alert("Tambah data Petugas TIDAK berhasil !")</script>';
     }
}
?>

<h1 class="h3 mb-3">Tambah Data Petugas</h1>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <a href="?page=petugas" class="btn btn-primary">Kembali</a><hr>
                <form action="" method="post">
                    <table class="table">
                        <tr>
                            <td width="100">Nama</td>
                            <td width="1">:</td>
                            <td><input type="text" name="nama_petugas" class="form-control"></td>
                        </tr>
                        <tr>
                            <td width="100">Username</td>
                            <td width="1">:</td>
                            <td><input type="text" name="username" class="form-control"></td>
                        </tr>
                        <tr>
                            <td width="100">level</td>
                            <td width="1">:</td>
                            <td><select class="form-select" name="level">
                                    <option value="petugas">Petugas</option>
                                    <option value="admin">Admin</option>
                                </select></td>
                        </tr>
                        <tr>
                            <td width="100">Password</td>
                            <td width="1">:</td>
                            <td><input type="password" name="password" class="form-control"></td>

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