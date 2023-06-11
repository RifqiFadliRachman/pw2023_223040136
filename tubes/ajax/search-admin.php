<?php
require '../config.php';
$keyword = $_GET['keyword'];
$query = "SELECT * FROM destination WHERE nama LIKE '%$keyword%' OR lokasi LIKE '%$keyword%'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    $i = 1;
    foreach ($result as $row) {
        echo '<tr>';
        echo '<td>' . $i++ . '</td>';
        echo '<td>' . $row['nama'] . '</td>';
        echo '<td>' . $row['lokasi'] . '</td>';
        echo '<td><img src="images/package/' . $row['gambar'] . '" width="100"></td>';
        echo '<td><a href="php/hapus.php?id=' . $row["id"] . '">Hapus</a> | <a href="php/ubah.php?id=' . $row["id"] . '">Ubah</a></td>';
        echo '</tr>';
    }
} else {
    echo '<tr><td colspan="5">No results found</td></tr>';
}
?>
