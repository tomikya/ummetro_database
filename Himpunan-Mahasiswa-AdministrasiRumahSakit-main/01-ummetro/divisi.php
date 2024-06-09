<h1 class="h3 mb-3">Data Divisi</h1>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <a href="?page=tambah_divisi" class="btn btn-primary">+ Tambah Data</a><hr>
                <table class="table">
                    <tr>
                        <th>Profile</th>
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th></th>
                        <th>Aksi</th>
                    </tr>
                    <?php 
                    $i = 1;
                    $query = mysqli_query($konek, "SELECT*FROM divisi");
                    while ($data = mysqli_fetch_array($query)) {
                        ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><img width="170px" src="images_divisi/<?php echo $data['profile_divisi'];?>" alt="image"></td>
                            <td><?php echo $data['nama']; ?></td>
                            <td><?php echo $data['jabatan']; ?></td>
                            <td></td>
                            <td>
                                <a href="?page=ubah_divisi&id=<?php echo $data['id_divisi']; ?>" class="btn btn-warning">Ubah</a>
                                <a href="?page=hapus_divisi&id=<?php echo $data['id_divisi']; ?>" class="btn btn-danger">Hapus</a>
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