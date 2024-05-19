<h1 class="h3 mb-3">Data Berita</h1>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <a href="?page=tambah_berita" class="btn btn-primary">+ Tambah Data</a><hr>
                <table class="table">
                    <tr>
                        <th>Nomor</th>
                        <th>Gambar</th>
                        <th>tanggal</th>
                        <th>Deskripsi</th>
                        <th></th>
                        <th>Aksi</th>
                    </tr>
                    <?php 
                    $i = 1;
                    $query = mysqli_query($konek, "SELECT*FROM berita");
                    while ($data = mysqli_fetch_array($query)) {
                        ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><img width="200px" src="image/<?php echo $data['gambar_berita'];?>" alt="image"></td>
                            <td><?php echo $data['tanggal_berita']; ?></td>
                            <td><?php echo $data['deskripsi_berita']; ?></td>
                            <td></td>
                            <td>
                                <a href="?page=ubah_berita&id=<?php echo $data['id_berita']; ?>" class="btn btn-warning">Ubah</a>
                                <a href="?page=hapus_berita&id=<?php echo $data['id_berita']; ?>" class="btn btn-danger">Hapus</a>
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