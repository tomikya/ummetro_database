<?php
$id = $_GET['id'];
if (isset($_POST['nama_siswa'])) {
    $nisn = $_POST['nisn'];
    $nis = $_POST['nis'];
    $nama_siswa = $_POST['nama_siswa'];
    $nama_kelas = $_POST['id_kelas'];
    $alamat = $_POST['alamat'];
    $no_telp = $_POST['no_telp'];
    $password = md5($_POST['password']);

    $query = mysqli_query($koneksi, "UPDATE siswa
    SET nisn = '$nisn', nis='$nis', nama_siswa='$nama_siswa', id_kelas='$nama_kelas', alamat='$alamat', no_telp='$no_telp', password='$password' 
    WHERE nisn=$id");

    if(isset($_POST['password'])) {
        $query = mysqli_query($koneksi, "UPDATE siswa
    SET password='$password' WHERE nisn=$id");
    }

    if ($query) {
        echo '<script>alert("Ubah data berhasil !")</script>';
    } else {
        echo '<script>alert("Ubah data TIDAK berhasil !")</script>';
    }
}
$query = mysqli_query($koneksi, "SELECT*FROM siswa WHERE nisn=$id");
$data = mysqli_fetch_array($query);
?>

<h1 class="h3 mb-3">Ubah Data Siswa</h1>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <a href="?page=siswa" class="btn btn-primary">Kembali</a>
                <hr>
                <form action="" method="post">
                    <table class="table">
                        <tr>
                            <td width="100">NISN</td>
                            <td width="1">:</td>
                            <td><input value="<?php echo $data['nisn'];?>" type="text" name="nisn" class="form-control"></td>
                        </tr>
                        <tr>
                            <td width="100">NIS</td>
                            <td width="1">:</td>
                            <td><input value="<?php echo $data['nis'];?>" type="text" name="nis" class="form-control"></td>
                        </tr>
                        <tr>
                            <td width="100">Nama</td>
                            <td width="1">:</td>
                            <td><input value="<?php echo $data['nama_siswa'];?>" type="text" name="nama_siswa" class="form-control"></td>
                        </tr>
                        <tr>
                            <td width="100">Kelas</td>
                            <td width="1">:</td>
                            <td>
                                <select class="form-select" name="id_kelas">
                                    <?php
                                    $kel = mysqli_query($koneksi, "SELECT*FROM kelas");
                                    while ($kelas = mysqli_fetch_array($kel)) {
                                        ?>
                                        <option <?php if($data['id_kelas'] == $kelas['id_kelas']) echo 'selected'; ?> value="<?php echo $kelas['id_kelas']; ?>">
                                      <?php echo $kelas['nama_kelas']; ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td width="100">Alamat</td>
                            <td width="1">:</td>
                            <td><input value="<?php echo $data['alamat'];?>" type="text" name="alamat" class="form-control"></td>
                        </tr>
                        <tr>
                            <td width="100">No Telepon</td>
                            <td width="1">:</td>
                            <td><input value="<?php echo $data['no_telp'];?>" type="text" name="no_telp" class="form-control"></td>
                        </tr>
                        <tr>
                            <td width="100">Password</td>
                            <td width="1">:</td>
                            <td><input value="<?php echo $data['password'];?>" type="password" name="password" class="form-control">*) Jika password tidak ingin dirubah Maka Kosongkan saja.</td>

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