<?php 
session_start(); // Mulai sesi

// Jika tidak ada sesi, arahkan kembali ke halaman login
if (!isset($_SESSION['role'])) {
    header('Location: login.php');
    exit();
}

include 'config.php';

$tampil = mysqli_query($conn, "SELECT d.*
FROM destination d
JOIN top t ON d.top_id = t.id
WHERE t.status = 'top'");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <!--swiper css link-->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>


    <!--font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


    <!--custome css file link-->
    <link  href="css/style.css" rel="stylesheet" />
</head>
<body>
    
<!--header section start-->

<section class="header">

    <a href="home.php" class="logo">Travel.</a>

    <nav class="navbar">
    <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <a href="package.php">Destination</a>
        <a href="book.php">Book</a>
        <a href="logout.php">Logout</a>
    </nav> 

    <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!--header section end-->

<!--home section start-->

<section class="home">

  <div class="swiper home-slider">

    <div class="swiper-wrapper">

      <div class="swiper-slide slide" style="background:url(images/home-slide-1.jpg) no-repeat">
       <div class="content">
          <span>explore, discover, travel</span>
          <h3>Travel around the archipelago</h3>
          <a href="package.php" class="btn">discover more</a>
       </div>
      </div>
       <div class="swiper-slide slide" style="background:url(images/home-slide-2a.jpg) no-repeat">
       <div class="content">
          <span>explore, discover, travel</span>
          <h3>discover the new places</h3>
          <a href="package.php" class="btn">discover more</a>
       </div>
      </div>
       <div class="swiper-slide slide" style="background:url(images/home-slide-3a.jpg) no-repeat">
       <div class="content">
          <span>explore, discover, travel</span>
          <h3>make your tour worthwhile</h3>
          <a href="package.php" class="btn">discover more</a>
       </div>
      </div>
      </div>

    </div>

    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>

</section>

<!--home section end-->

<!--services section start-->

<section class="services">

  <h1 class="heading-title"> our services </h1>

  <div class="box-container">
     <div class="box">
      <img src="images/icon-1.jpg" alt="">
      <h3>Adventure</h3>
     </div>

     <div class="box">
      <img src="images/icon-2.jpg" alt="">
      <h3>Tour Guide</h3>
     </div>

     <div class="box">
      <img src="images/icon-3.jpg" alt="">
      <h3>Trekking</h3>
     </div>

     <div class="box">
      <img src="images/icon-4.jpg" alt="">
      <h3>Camp Fire</h3>
     </div>

     <div class="box">
      <img src="images/icon-5.jpg" alt="">
      <h3>Off Road</h3>
     </div>

     <div class="box">
      <img src="images/icon-6.jpg" alt="">
      <h3>Camping</h3>
     </div>

  </div>

</section>

<!--services section end-->

<!--home about section start-->

<section class="home-about">

  <div class="image">
    <img src="images/about-img.jpg" alt="">
  </div>

  <div class="content">
    <h3>about us</h3>
    <p>because we have lots of destinations to explore at a fairly cheap travel price accompanied by a guide who always accompanies us at all times</p>
    <a href="about.php" class="btn">read more</a>
  </div>

</section>

<!--home about section end-->

<!--home package section start-->

<section class="home-packages">

     <h1 class="heading-title">our packages</h1>

     <div class="box-container">
     <?php foreach ($tampil as $t) : ?>
       <div class="box">
        <div class="image">
           <img src="images/package/<?= $t['gambar']; ?>" alt="">
        </div>
        <div class="content">
           <h3><?= $t['nama']; ?></h3>
           <p><?= $t['lokasi']; ?></p>
        </div>
       </div>
<?php endforeach; ?>
     </div>

     <div class="load-more"> <a href="package.php" class="btn">load more</a> </div>
   
</section>

<!--home package section end-->

<!--home offer section start-->

<section class="home-offer">
   <div class="content">
     <h3>upto 50% 0ff</h3>
     <p>Year-end promo! Get Complete Tour and Travel Promo to Indonesia with 50% discount</p>
     <a href="book.php" class="btn">book now</a>
   </div>
</section>

<!--home offer section end-->














<!--footer section start-->

<section class="footer">

 <div class="box-container">

   <div class="box">
    <h3>Quick Links</h3>
    <a href="home.php"><i class="fas fa-angle-right"></i>Home</a>
    <a href="about.php"><i class="fas fa-angle-right"></i>About</a>
    <a href="package.php"><i class="fas fa-angle-right"></i>Package</a>
    <a href="book.php"><i class="fas fa-angle-right"></i>Book</a>
   </div>

   <div class="box">
    <h3>Extra Links</h3>
    <a href="#"><i class="fas fa-angle-right"></i>ask question</a>
    <a href="#"><i class="fas fa-angle-right"></i>about Us</a>
    <a href="#"><i class="fas fa-angle-right"></i>privacy policy</a>
    <a href="#"><i class="fas fa-angle-right"></i>terms of use</a>
   </div>

   <div class="box">
    <h3>Contact Info</h3>
    <a href="#"><i class="fas fa-phone"></i>+6282116363118</a>
    <a href="#"><i class="fas fa-phone"></i>+6282116363118</a>
    <a href="#"><i class="fas fa-envelope"></i>rifqifadlir22@gmail.com</a>
    <a href="#"><i class="fas fa-map"></i>Indonesia</a>
   </div>

   <div class="box">
    <h3>follow us</h3>
    <a href="#"><i class="fab fa-facebook">facebook</i></a>
    <a href="#"><i class="fab fa-instagram">instagram</i></a>
    <a href="#"><i class="fab fa-twitter">twitter</i></a>
    <a href="#"><i class="fab fa-linkedin">linkedin</i></a>
   </div>
 
 </div>

  <div class="credit">credit by <span> Rifqi Fadli Rachman</span> | all right reserved!</div>

 

</section>


<!--footer section end-->




<!--swiper js link-->

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!--- custom js file link --->

<script  src="js/script.js"></script>

</body>
</html>