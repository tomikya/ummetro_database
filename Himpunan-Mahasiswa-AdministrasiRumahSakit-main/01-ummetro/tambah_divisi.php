<?php 
if(isset($_POST['nama'])) {
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];

    if (isset($_FILES['profile_divisi']) && $_FILES['profile_divisi']['error'] == UPLOAD_ERR_OK) {
        $image = $_FILES['profile_divisi'];
        $nama_gambar = $image['name'];
        $target_dir = 'images_divisi/';
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
                    $query = $konek->prepare("INSERT INTO divisi (profile_divisi, nama, jabatan) VALUES (?, ?, ?)");
                    $query->bind_param("sss", $nama_gambar, $nama, $jabatan );
                    
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


<h1 class="h3 mb-3">Tambah Data Divisi</h1>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <a href="?page=divisi" class="btn btn-primary">Kembali</a><hr>
                <form method="post" enctype="multipart/form-data">
                    <table class="table">
                        <tr>
                            <td>Proofile</td>
                            <td width="1">:</td>
                            <td><input type="file" name="profile_divisi" class="forom-control"></td>
                        </tr>
                        <tr>
                            <td width="100">Nama</td>
                            <td width="1">:</td>
                            <td><input type="text" name="nama" class="form-control"></td>
                        </tr>
                        <tr>
                            <td width="100">Jabatan</td>
                            <td width="1">:</td>
                            <td><input type="text" name="jabatan" class="form-control"></td>
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