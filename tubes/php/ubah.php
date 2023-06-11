<?php
include '../config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    if (isset($_POST['submit'])) {
        $nama = mysqli_real_escape_string($conn, $_POST['nama']);
        $lokasi = mysqli_real_escape_string($conn, $_POST['lokasi']);
        $top_id = mysqli_real_escape_string($conn, $_POST['top_id']);

        // Proses update gambar
        if (!empty($_FILES['gambar']['name'])) {
            $gambar = $_FILES['gambar']['name'];
            $gambar_tmp = $_FILES['gambar']['tmp_name'];
            $gambar_ext = strtolower(pathinfo($gambar, PATHINFO_EXTENSION));
            $gambar_valid_ext = array('png', 'jpg', 'jpeg');

            // Cek ekstensi gambar
            if (in_array($gambar_ext, $gambar_valid_ext)) {
                $gambar_dest = '../images/package/' . $gambar;
                move_uploaded_file($gambar_tmp, $gambar_dest);

                // Hapus gambar lama jika ada
                $query_select = "SELECT gambar FROM destination WHERE id = ?";
                $stmt_select = mysqli_prepare($conn, $query_select);
                mysqli_stmt_bind_param($stmt_select, "s", $id);
                mysqli_stmt_execute($stmt_select);
                $result_select = mysqli_stmt_get_result($stmt_select);
                $row_select = mysqli_fetch_assoc($result_select);
                $gambar_lama = $row_select['gambar'];
                if (!empty($gambar_lama) && file_exists($gambar_lama)) {
                    unlink($gambar_lama);
                }

                $query = "UPDATE destination SET nama=?, lokasi=?, gambar=?, top_id=? WHERE id=?";
                $stmt = mysqli_prepare($conn, $query);
                mysqli_stmt_bind_param($stmt, "ssssi", $nama, $lokasi, $gambar_dest, $top_id, $id);
                if (mysqli_stmt_execute($stmt)) {
                    // Redirect ke halaman detail
                    header("Location: ../package-admin.php");
                    exit();
                } else {
                    echo "Error: " . mysqli_error($conn);
                }
            } else {
                echo "Invalid file extension. Only PNG, JPG, and JPEG files are allowed.";
            }
        } else {
            $query = "UPDATE destination SET nama=?, lokasi=?, top_id=? WHERE id=?";
            $stmt = mysqli_prepare($conn, $query);
            mysqli_stmt_bind_param($stmt, "ssii", $nama, $lokasi, $top_id, $id);
            if (mysqli_stmt_execute($stmt)) {
                // Redirect ke halaman detail
                header("Location: ../package-admin.php");
                exit();
            } else {
                echo "Error: " . mysqli_error($conn);
            }
        }
    }

    $id = mysqli_real_escape_string($conn, $id); // Mengamankan variabel $id

    $query = "SELECT destination.*, top.* FROM destination JOIN top ON destination.top_id = top.id WHERE destination.id = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "s", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($result) {
        $row = mysqli_fetch_assoc($result);

        if ($row) {
            $nama = $row['nama'];
            $lokasi = $row['lokasi'];
            $gambar = $row['gambar'];
            $top_id = $row['top_id'];
            $status = $row['status'];

            // Lakukan apa pun yang perlu Anda lakukan dengan nilai-nilai tersebut
        } else {
            // Tidak ada hasil yang ditemukan
        }
    } else {
        // Query tidak berhasil dijalankan
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Package</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <!--swiper css link-->
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>


<!--font awesome cdn link-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


<!--custome css file link-->
<link  href="../css/style.css" rel="stylesheet" /> 
</head>
  <body>

    <form action="" method="post" enctype="multipart/form-data"> 
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Destinasi</label>
            <input type="text" class="form-control" name="nama" value="<?php echo $nama; ?>">
        </div>
        <div class="mb-3">
            <label for="lokasi" class="form-label">Lokasi Destinasi</label>
            <input type="text" class="form-control" name="lokasi" value="<?php echo $lokasi; ?>">
        </div>
        <div class="mb-3">
            <label for="top_id" class="form-label">Category</label>
            <select name="top_id" id="" class="bg-secondary">
                <option value="">Pilih berdasarkan kategori</option>
                <option value="1" <?php if ($top_id == 1) echo 'selected'; ?>>TOP</option>
                <option value="2" <?php if ($top_id == 2) echo 'selected'; ?>>NO</option>
            </select>
        </div>
        <div class="mb-3">
            <img src="../images/package/<?php echo $gambar; ?>" alt="Preview" id="preview" class="preview-image img-preview w-25" >
            <br>
            <label for="gambar" class="form-label">Foto Destinasi</label>
            <input type="file" onchange="previewImage(event)" id="gambar" class="form-control" name="gambar">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Update</button>
    </form>

    <script>
        function previewImage(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('preview');
                output.src = reader.result;
                output.style.display = 'block'; // Tampilkan gambar pratinjau
            }
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
