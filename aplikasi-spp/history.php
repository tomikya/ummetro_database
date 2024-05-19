<h1 class="h3 mb-3">Data Pembayaran</h1>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <a href="?page=pembayaran" class="btn btn-primary">+ Tambah Data</a><hr>
                <table class="table">
                    <tr>
                        <th>NO</th>
                        <th>Petugas</th>
                        <th>NISN</th>
                        <th>Nama Siswa</th>
                        <th>Tanggal Bayar</th>
                        <th>Bulan Bayar</th>
                        <th>Tahun Bayar</th>
                        <th>SPP</th>
                        <th>Jumlah Bayar</th>
                        <!-- <th>Aksi</th> -->
                    </tr>
                    <?php 
                    $i = 1;
                    $query = mysqli_query($koneksi, "SELECT*FROM pembayaran left join petugas 
                    on petugas.id_petugas = pembayaran.id_petugas left join siswa 
                    on siswa.nisn = pembayaran.nisn left join spp on spp.id_spp = pembayaran.id_spp");
                    while ($data = mysqli_fetch_array($query)) {
                        ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $data['nama_petugas']; ?></td>
                            <td><?php echo $data['nisn']; ?></td>
                            <td><?php echo $data['nama_siswa']; ?></td>
                            <td><?php echo $data['tgl_bayar']; ?></td>
                            <td><?php echo $data['bln_bayar']; ?></td>
                            <td><?php echo $data['thn_bayar']; ?></td>
                            <td><?php echo number_format($data['nominal']); ?></td>
                            <td><?php echo number_format($data['jumlah_bayar']); ?></td>
                            <td>
                                
                            </td>
                        </tr>
                        <?php 
                    $i++;
                    }
                    ?>
                    
                </table>
            </div>
        </div>
    </div>
</div>