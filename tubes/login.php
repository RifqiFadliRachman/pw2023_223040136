<?php
session_start(); // Memulai sesi

include 'config.php';

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Periksa email dalam database
    $query = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);

        // Memeriksa kecocokan password yang diinput dengan password yang di-hash dalam database
        if (password_verify($password, $row['password'])) {
            // Simpan role akun dalam sesi
            $_SESSION['role'] = $row['role'];

            if ($_SESSION['role'] == 'admin') {
                // Jika role adalah admin, arahkan ke halaman admin
                header('Location: admin_page.php');
                exit(); // Hentikan eksekusi kode setelah pengalihan halaman
            } else {
                // Jika role adalah user, arahkan ke halaman index
                header('Location: index.php');
                exit(); // Hentikan eksekusi kode setelah pengalihan halaman
            }
        } else {
            $_SESSION['message'] = "Invalid email or password.";
            header('Location: login.php'); // Jika login gagal, arahkan kembali ke halaman login
            exit(); // Hentikan eksekusi kode setelah pengalihan halaman
        }
    } else {
        $_SESSION['message'] = "Invalid email or password.";
        header('Location: login.php'); // Jika login gagal, arahkan kembali ke halaman login
        exit(); // Hentikan eksekusi kode setelah pengalihan halaman
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Font Awesome CDN link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- Custom CSS file link -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php
    if (isset($_SESSION['message'])) {
        echo '
        <div class="message">
            <span>' . $_SESSION['message'] . '</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
        </div>';
        unset($_SESSION['message']);
    }
    ?>

    <div class="form-container">
        <form action="" method="post">
            <h3>Login Now</h3>
            <input type="email" name="email" placeholder="Enter your email" required class="box">
            <input type="text" name="password" placeholder="Enter your password" required class="box">
            <button type="submit" name="login" class="btn">Login Now</button>
            <p>Don't have an account? <a href="register.php">Register now</a></p>
        </form>
    </div>
</body>

</html>
