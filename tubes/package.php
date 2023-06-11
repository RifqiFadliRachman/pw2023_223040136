<?php 
include 'config.php';

$tampil = mysqli_query($conn, "SELECT * FROM destination");

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

<div class="heading" style="background:url(images/header-bg-2.jpg)" no-repeat>
  <h1>packages</h1>
</div>

<!--packages section start-->

<section class="packages">

    <h1 class="heading-title">Destinations</h1>

    <div class="row mb-5 mt-5">
        <div class="col-md-6">
            <form action="" method="get">
                <div class="input-group">
                    <input type="search" class="form-control" name="keyword" id="keyword" placeholder="Search students" autofocus autocomplete="off">
                    <button class="btn btn-primary" name="search" id="search-button" type="submit" id="button-addon2">Search</button>
                </div>
            </form>
        </div>
    </div>

    <div id="search-container">
    <div class="box-container">
<?php foreach ($tampil as $t) : ?>
    <div class="box">    
         <div class="image">
           <img src="images/package/<?= $t['gambar']; ?>">
        </div>
        <div class="content">
           <h3><?= $t['nama']; ?></h3>
           <p><?= $t['lokasi']; ?></p>
           <a href="book.php" class="btn">book now</a>
        </div>
      </div>
<?php endforeach; ?>
    </div>
    </div>

</section>

<!--packages section end-->




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
  xhr.open("GET", "ajax/search.php?keyword=" + keyword.value, true);
  xhr.send();
});
</script>
<script  src="js/script.js"></script>

</body>
</html>
