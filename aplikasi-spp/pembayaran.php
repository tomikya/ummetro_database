<?php

if (isset($_POST['id_petugas'])) {
    $id_petugas      = $_POST['id_petugas'];
    $nisn            = $_POST['nisn'];
    $tgl_bayar       = $_POST['tgl_bayar'];
    $id_spp          = $_POST['id_spp'];
    $jumlah_bayar    = $_POST['jumlah_bayar'];
    $bln_bayar       = $_POST['bln_bayar'];
    $thn_bayar       = $_POST['thn_bayar'];

    $query = mysqli_query($koneksi, "INSERT INTO pembayaran(id_petugas, nisn, tgl_bayar, id_spp, jumlah_bayar, bln_bayar, thn_bayar) values ('$id_petugas', '$nisn', '$tgl_bayar', '$id_spp', '$jumlah_bayar', '$bln_bayar', '$thn_bayar')");

        if ($query) {
            echo "<script>alert('Pembayaran Berhasil')</script>";
        }else {
            echo "<script>alert('Pembayaran TIDAK Berhasil')</script>";
        }
}

?>

<h1 class="h3 mb-3">Entri Data Pembayaran</h1>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form method="post">
                    <table class="table">
                    <tr>
                        <td width="200">Petugas</td>
                        <td width="1">:</td>
                        <td>
                            <select name="id_petugas" class="form-select">
                                <?php
                                    $p = mysqli_query($koneksi, "SELECT*FROM petugas");
                                    while ($petugas = mysqli_fetch_array($p)) {
                                        ?>
                                        <option value="<?php echo $petugas['id_petugas']; ?>"><?php echo $petugas['nama_petugas']; ?></option>
                                        <?php
                                    }
                                ?>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td width="200">Siswa</td>
                        <td width="1">:</td>
                        <td>
                            <select name="nisn" class="form-select">
                                <?php
                                    $p = mysqli_query($koneksi, "SELECT*FROM siswa");
                                    while ($siswa = mysqli_fetch_array($p)) {
                                        ?>
                                        <option value="<?php echo $siswa['nisn']; ?>"><?php echo $siswa['nama_siswa']; ?></option>
                                        <?php
                                    }
                                ?>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td width="200">Tanggal Bayar</td>
                        <td width="1">:</td>
                        <td>
                            <input type="date" name="tgl_bayar" class="form-control">
                        </td>
                    </tr>

                    <tr>
                        <td width="200">Bulan Bayar</td>
                        <td width="1">:</td>
                        <td>
                            <select name="bln_bayar" class="form-select">
                                <option>Januari</option>
                                <option>Febuari</option>
                                <option>Maret</option>
                                <option>April</option>
                                <option>Mei</option>
                                <option>Juni</option>
                                <option>Juli</option>
                                <option>Agustus</option>
                                <option>September</option>
                                <option>Oktober</option>
                                <option>November</option>
                                <option>Desember</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td width="200">Tahun Dibayar</td>
                        <td width="1">:</td>
                        <td>
                            <input type="number" name="thn_bayar" class="form-control">
                        </td>
                    </tr>

                    <tr>
                        <td width="200">SPP</td>
                        <td width="1">:</td>
                        <td>
                            <select name="id_spp" class="form-select">
                                <?php
                                    $p = mysqli_query($koneksi, "SELECT*FROM spp");
                                    while ($spp = mysqli_fetch_array($p)) {
                                        ?>
                                        <option value="<?php echo $spp['id_spp']; ?>"><?php echo number_format($spp['nominal']) . ' ('.$spp['tahun'].')'; ?></option>
                                        <?php
                                    }
                                ?>
                            </select>
                        </td>
                    </tr>
                     <tr>
                        <td width="200">Jumlah Bayar</td>
                        <td width="1">:</td>
                        <td>
                            <input type="number" name="jumlah_bayar" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td width="200"></td>
                        <td width="1"></td>
                        <td>
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </td>
                    </tr>
                </table>
                </form>
            </div>
        </div>
    </div>
</div>