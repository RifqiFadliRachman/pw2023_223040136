<?php
include 'config.php';

$query = "SELECT * FROM destination";
$result = mysqli_query($conn, $query);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Destination Table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        @media print {
            .no-print {
                display:none !important;
            }
        }
    </style>
</head>
<body>
    <?php include 'admin_header.php'; ?>

    <div class="container mt-5">
        <h2 class="no-print">Destination Table</h2>

        <div class="row mb-5 mt-5 no-print">
            <div class="col-md-6">
                <form action="" method="get">
                    <div class="input-group">
                        <input type="search" class="form-control" name="keyword" id="keyword" placeholder="Search destinations" autofocus autocomplete="off">
                        <button class="btn btn-primary" name="search" id="search-button" type="submit">Search</button>
                    </div>
                </form>
            </div>
        </div>

        <button class="btn btn-danger text-light mb-5 no-print" onclick="window.print()">Print</button>

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Destinasi</th>
                    <th>Lokasi Destinasi</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody id="search-container">
                <?php $i = 1; foreach ($result as $row): ?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td><?php echo $row['nama']; ?></td>
                        <td><?php echo $row['lokasi']; ?></td>
                        <td><img src="images/package/<?php echo $row['gambar']; ?>" width="100"></td>
                        <td>
                            <a href="php/hapus.php?id=<?= $row["id"]; ?>">Hapus</a> | 
                            <a href="php/ubah.php?id=<?= $row["id"]; ?>">Ubah</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script>
        const keyword = document.getElementById("keyword");
        const searchContainer = document.getElementById("search-container");

        keyword.addEventListener("keyup", function () {
            const xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    searchContainer.innerHTML = xhr.responseText;
                }
            };
            xhr.open("GET", "ajax/search-admin.php?keyword=" + keyword.value, true);
            xhr.send();
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
