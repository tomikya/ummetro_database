<?php 
if(isset($_POST['nama_kelas'])) {
    $nama_kelas = $_POST['nama_kelas'];
    $kompetensi_keahlian = $_POST['kompetensi_keahlian'];

    $query = mysqli_query($koneksi, "INSERT INTO kelas(nama_kelas, kompetensi_keahlian) values ('$nama_kelas', '$kompetensi_keahlian')");

     if ($query) {
        echo '<script>alert("Tambah data berhasil !")</script>';
     } else {
        echo '<script>alert("Tambah data TIDAK berhasil !")</script>';
     }
}
?>

<h1 class="h3 mb-3">Tambah Data Kelas</h1>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <a href="?page=kelas" class="btn btn-primary">Kembali</a><hr>
                <form action="" method="post">
                    <table class="table">
                        <tr>
                            <td width="100">Nama Kelas</td>
                            <td width="1">:</td>
                            <td><input type="text" name="nama_kelas" class="form-control"></td>
                        </tr>
                        <tr>
                            <td width="100">Kompetensi Keahlian</td>
                            <td width="1">:</td>
                            <td><input type="text" name="kompetensi_keahlian" class="form-control"></td>
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