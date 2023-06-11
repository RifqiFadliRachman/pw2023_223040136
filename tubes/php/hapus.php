<?php
include '../config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT gambar FROM destination WHERE id = $id";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $gambar = $row['gambar'];

    // Hapus gambar dari direktori
    if (file_exists($gambar)) {
        unlink($gambar);
    }

    $query = "DELETE FROM destination WHERE id = $id";
    if (mysqli_query($conn, $query)) {
        header('Location: ../package-admin.php');
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
