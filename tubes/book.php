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

<div class="heading" style="background:url(images/header-bg-3a.jpg)" no-repeat>
  <h1>book</h1>
</div>

<!--booking section start-->

<section class="booking">

   <h1 class="heading-title">book your trip!</h1>

   <form action="book_form.php" method="post" class="book-form">

     <div class="flex">
      <div class="inputBox">
        <span>name :</span>
        <input type="text" placeholder="enter your name" name="name">
      </div>
      <div class="inputBox">
        <span>email :</span>
        <input type="email" placeholder="enter your email" name="email">
      </div>
      <div class="inputBox">
        <span>phone :</span>
        <input type="number" placeholder="enter your number" name="phone">
      </div>
      <div class="inputBox">
        <span>address :</span>
        <input type="text" placeholder="enter your address" name="address">
      </div>
      <div class="inputBox">
        <span>where to :</span>
        <input type="text" placeholder="place you want to visit" name="location">
      </div>
      <div class="inputBox">
        <span>how many :</span>
        <input type="number" placeholder="number of guests" name="guests">
      </div>
      <div class="inputBox">
        <span>arrivals :</span>
        <input type="date" name="arrivals">
      </div>
      <div class="inputBox">
        <span>leaving :</span>
        <input type="date" name="leaving">
      </div> 
     </div>

      <input type="submit" value="submit" class="btn" name="send">

   </form>

</section>

<!--booking section end-->





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