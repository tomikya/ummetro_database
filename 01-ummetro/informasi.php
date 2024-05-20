<h1 class="h3 mb-3">Data Informasi</h1>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <a href="?page=tambah_informasi" class="btn btn-primary">+ Tambah Data</a><hr>
                <table class="table">
                    <tr>
                        <th>Nomor</th>
                        <th>Gambar</th>
                        <th>Deskripsi</th>
                        <th></th>
                        <th>Aksi</th>
                    </tr>
                    <?php 
                    $i = 1;
                    $query = mysqli_query($konek, "SELECT*FROM informasi");
                    while ($data = mysqli_fetch_array($query)) {
                        ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><img width="200px" src="image_infor/<?php echo $data['gambar_infor'];?>" alt="image"></td>
                            <td><?php echo $data['desk_infor']; ?></td>
                            <td></td>
                            <td>
                                <a href="?page=ubah_infor&id=<?php echo $data['id_infor']; ?>" class="btn btn-warning">Ubah</a>
                                <a href="?page=hapus_infor&id=<?php echo $data['id_infor']; ?>" class="btn btn-danger">Hapus</a>
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