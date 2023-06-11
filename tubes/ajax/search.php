<?php
require '../config.php';
$keyword = $_GET['keyword'];
$query = "SELECT * FROM destination WHERE nama LIKE '%$keyword%' OR lokasi LIKE '%$keyword%'";
$tampil = mysqli_query($conn, $query);

if (mysqli_num_rows($tampil) > 0) {
  while ($t = mysqli_fetch_assoc($tampil)) {
    echo '<div class="box-container">';
    echo '<div class="box">';    
    echo '<div class="image">';
    echo '<img src="images/package/'. $t['gambar'] . '">';
    echo '</div>';
    echo '<div class="content">';
    echo '<h3>'. $t['nama'] . '</h3>';
    echo '<p>'. $t['lokasi'] . '</p>';
    echo '<a href="book.php" class="btn">book now</a>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
  }
} else {
  echo '<p>No results found</p>';
}
?>
