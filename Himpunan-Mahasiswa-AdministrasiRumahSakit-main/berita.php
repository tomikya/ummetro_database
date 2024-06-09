<div class="container_berita_home">
    <?php
    $i = 1;
    $query = mysqli_query($konek, "SELECT*FROM berita");
    while ($data = mysqli_fetch_array($query)) {
    ?>
        <div class="card_berita_home">
            <img width="400px" height="230px" src="01-ummetro/images/<?php echo $data['gambar_berita']; ?>" alt="image">
            <p><?php echo $data['deskripsi_berita']; ?></p>
        </div>
    <?php
        $i++;
    }
    ?>
</div>