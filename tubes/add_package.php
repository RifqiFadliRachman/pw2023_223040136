<?php 
include 'config.php';

if(isset($_POST['submit'])){
    $nama = mysqli_real_escape_string($conn, $_POST['nama']);
    $lokasi = mysqli_real_escape_string($conn, $_POST['lokasi']);
    $top_id = mysqli_real_escape_string($conn, $_POST['top_id']);

    $gambar = $_FILES['gambar']['name'];
    $gambar_tmp = $_FILES['gambar']['tmp_name'];
    $gambar_ext = strtolower(pathinfo($gambar, PATHINFO_EXTENSION));
    $gambar_valid_ext = array('png', 'jpg', 'jpeg');

    if (in_array($gambar_ext, $gambar_valid_ext)) {
        $gambar_dest = 'images/package/' . $gambar;
        move_uploaded_file($gambar_tmp, $gambar_dest);

        $query = "INSERT INTO destination (nama, lokasi, gambar, top_id) VALUES ('$nama', '$lokasi', '$gambar', '$top_id')";
        if(mysqli_query($conn, $query)){
            echo "Data added successfully.";
        } else{
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        echo "Invalid file extension. Only PNG, JPG, and JPEG files are allowed.";
    }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add packages</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>

    <?php include 'admin_header.php'; ?>

    <form action="" method="post" enctype="multipart/form-data"> 
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Destinasi</label>
            <input type="text" class="form-control" name="nama">
        </div>
        <div class="mb-3">
            <label for="lokasi" class="form-label">Lokasi Destinasi</label>
            <input type="text" class="form-control" name="lokasi">
        </div>
        <div class="mb-3 d-flex flex-column">
            <label for="top_id" class="form-label">Category</label>
            <select name="top_id" id="" class="bg-secondary">
                <option value="">Pilih berdasarkan kategori</option>
                <option value="1">TOP</option>
                <option value="2">NO</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="gambar" class="form-label">Foto Destinasi</label>
            <input type="file" class="form-control" name="gambar">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
