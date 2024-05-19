<?php 
if(isset($_POST['tanggal_berita'])) {
    $tnggl = $_POST['tanggal_berita'];
    $desk = $_POST['deskripsi_berita'];

    if (isset($_FILES['gambar_berita']) && $_FILES['gambar_berita']['error'] == UPLOAD_ERR_OK) {
        $image = $_FILES['gambar_berita'];
        $nama_gambar = $image['name'];
        $target_dir = 'image/';
        $target_file = $target_dir . basename($nama_gambar);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if image file is an actual image or fake image
        $check = getimagesize($image['tmp_name']);
        if($check !== false) {
            // Allow certain file formats
            $allowed_types = array('jpg', 'jpeg', 'png', 'gif');
            if(in_array($imageFileType, $allowed_types)) {
                // Attempt to move the uploaded file
                if(move_uploaded_file($image['tmp_name'], $target_file)) {
                    // Prepare an insert statement
                    $query = $konek->prepare("INSERT INTO berita (tanggal_berita, deskripsi_berita, gambar_berita) VALUES (?, ?, ?)");
                    $query->bind_param("sss", $tnggl, $desk, $nama_gambar);
                    
                    if ($query->execute()) {
                        echo '<script>alert("Tambah data berhasil !")</script>';
                    } else {
                        echo '<script>alert("Tambah data TIDAK berhasil !")</script>';
                    }
                    $query->close();
                } else {
                    echo '<script>alert("Sorry, there was an error uploading your file.")</script>';
                }
            } else {
                echo '<script>alert("Sorry, only JPG, JPEG, PNG & GIF files are allowed.")</script>';
            }
        } else {
            echo '<script>alert("File is not an image.")</script>';
        }
    } else {
        echo '<script>alert("No file was uploaded or there was an upload error.")</script>';
    }
}
?>


<h1 class="h3 mb-3">Tambah Data Berita</h1>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <a href="?page=berita" class="btn btn-primary">Kembali</a><hr>
                <form method="post" enctype="multipart/form-data">
                    <table class="table">
                        <tr>
                            <td>Gambar</td>
                            <td width="1">:</td>
                            <td><input type="file" name="gambar_berita" class="forom-control"></td>
                        </tr>
                        <tr>
                            <td width="100">Tanggal Berita</td>
                            <td width="1">:</td>
                            <td><input type="date" name="tanggal_berita" class="form-control"></td>
                        </tr>
                        <tr>
                            <td width="100">Deskripsi Berita</td>
                            <td width="1">:</td>
                            <td><input type="text" name="deskripsi_berita" class="form-control"></td>
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