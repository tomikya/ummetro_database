<h1 class="h3 mb-3">Data Akademik</h1>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <a href="?page=tambah_akademik" class="btn btn-primary">+ Tambah Data</a><hr>
                <table class="table">
                    <tr>
                        <th>Nomor</th>
                        <th>Judul</th>
                        <th>Deskripsi</th>
                        <th></th>
                        <th>Aksi</th>
                    </tr>
                    <?php 
                    $i = 1;
                    $query = mysqli_query($konek, "SELECT*FROM akademik");
                    while ($data = mysqli_fetch_array($query)) {
                        ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $data['judul_akademik']; ?></td>
                            <td><?php echo $data['deskripsi_akademik']; ?></td>
                            <td></td>
                            <td>
                                <a href="?page=ubah_akademik&id=<?php echo $data['id_akademik']; ?>" class="btn btn-warning">Ubah</a>
                                <a href="?page=hapus_akademik&id=<?php echo $data['id_akademik']; ?>" class="btn btn-danger">Hapus</a>
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