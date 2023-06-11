<?php 
session_start(); // Mulai sesi

// Periksa apakah pengguna memiliki sesi dan peran sebagai admin
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header('Location: login.php'); // Jika tidak ada sesi atau bukan admin, arahkan kembali ke halaman login
    exit(); // Hentikan eksekusi kode setelah pengalihan halaman
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin panel</title>

     <!--font awesome cdn link-->
     <link rel="stylesheet" href="https://cdnjs.couldflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

     <!--custom css file link-->
    <link rel="stylesheet" href="css/admin_style.css">

<header class="header">

  <div class="flex">

    <a href="admin_page.php" class="logo no-print">Admin<span>Panel</span></a>

    <nav class="navbar no-print">
        <a href="admin_page.php">home</a>
        <a href="admin_book.php">book</a>
        <a href="add_package.php">Add Destination</a>
        <a href="package-admin.php">Destination</a>
        <a href="logout.php">Logout</a>
    </nav>

    <div class="icons">
      <div id="menu-btn" class="fas fa-bars"></div>
      <div id="user-btn" class="fas fa-user"></div>
    </div>

    <div class="account-box">
       <p>username: <span><?php echo $_SESSION['admin_name']; ?></span></p>
       <p>email: <span><?php echo $_SESSION['admin_email']; ?></span></p>
       <a href="logout.php" class="delete-btn">logout</a>
    </div>

  </div>



</header>