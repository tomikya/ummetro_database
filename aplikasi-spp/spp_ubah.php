<?php
$id = $_GET['id'];
if (isset($_POST['tahun'])) {
    $tahun = $_POST['tahun'];
    $nominal = $_POST['nominal'];

    $query = mysqli_query($koneksi, "UPDATE spp
    SET tahun = '$tahun', nominal='$nominal'
    WHERE id_spp=$id");

    if ($query) {
        echo '<script>alert("Ubah data SPP berhasil !")</script>';
    } else {
        echo '<script>alert("Ubah data SPP TIDAK berhasil !")</script>';
    }
}
$query = mysqli_query($koneksi, "SELECT*FROM spp WHERE id_spp=$id");
$data = mysqli_fetch_array($query);
?>

<h1 class="h3 mb-3">Ubah Data SPP</h1>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <a href="?page=spp" class="btn btn-primary">Kembali</a>
                <hr>
                <form action="" method="post">
                    <table class="table">
                        <tr>
                            <td width="100">Tahun</td>
                            <td width="1">:</td>
                            <td><input value="<?php echo $data['tahun'];?>" type="text" name="tahun" class="form-control"></td>
                        </tr>
                        <tr>
                            <td width="100">Nominal</td>
                            <td width="1">:</td>
                            <td><input value="<?php echo $data['nominal'];?>" type="text" name="nominal" class="form-control"></td>
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