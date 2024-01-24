<?php




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sell Art</title>
    <link rel="stylesheet" href="Header.css">
    <link rel="stylesheet" href="bodyHome.css">
    <script
    src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
    crossorigin="anonymous"></script>
    <script>
    $(function() {
    $(".toggle").on("click", function() {
        if ($(".item").hasClass("active")) {
            $(".item").removeClass("active");
        } else {
            $(".item").addClass("active");
        }
    });
});

    </script>
    
    <?php  
    $faqja='SELLART';
    setcookie("faqja",$faqja,time()+30*24*60*60);
    ?>
 
</head>
<body>
  <header>
    <nav>
      <ul class="menu">
          <li class="logo"><img src="sell art.png" alt="Sell Art"></li>
          <li class="item"><a href="Header.php">Home</a></li>
          <li class="item"><a href="Paintings.php">Paintings</a></li>
          <li class="item"><a href="about.php">About</a></li>
          <li class="item"><a href="Services.php">Services</a></li>
          <li class="item">
            <a href="ShopingCart.php">
              <svg class="item" style="height:20px; margin-bottom:0px"  aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 15a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0h8m-8 0-1-4m9 4a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-9-4h10l2-7H3m2 7L3 4m0 0-.792-3H1"/>
              </svg>
            </a>
          </li>
         
          <li class="item button"><a href="Sign.php">Log In</a></li>
          <li class="item button secondary"><a href="SignUp.php">Sign Up</a></li>
          <li class="toggle"><span class="bars"></span></li>
      </ul>
  </nav>
  </header>
<main>
      <div class="body">
         
        <div class="bllok">
            <img src="https://artdesigna.com/cdn/shop/products/MGLS-1041-1.jpg?v=1603884620" alt="">
            <div class="paragrafi-figures"><p>Being creative is not a hobby,<br> it's a way of life</p></div>
        </div>
        <div class="bllok">
          <p  class="titulli">Welcome!</p>
          <br>
          <p class="pershkrim">Best Painting for your home </p>
          <p class="pershkrim">We Care About Our Customers Satisfaction</p>
          <p class="pershkrimi2">Welcome to a world where colors dance and emotions come to life on canvas.
             Our collection of paintings is a celebration of creativity, where every brushstroke tells a unique story.
              From vibrant abstract compositions to serene landscapes, each piece is a testament to the power of art to captivate and inspire.
          </p>
        </div>

      </div>


</main>

<div class="titulli2">
  <p>Popular Posts</p>
 </div>

<div class="popularPost">
 
  <div class="rubrika">
      <div class="card">
        <img src="https://qph.cf2.quoracdn.net/main-qimg-99342d8bd6d85e80205b0aba8bceb188.webp" alt="" style="width:100%">
        <div class="container">
          <p class="title">October 21, 2011</p>
          <a href="#">10 Famous Artists Who Had To Deal With Rejection During Their Lifetime</a>
        </div>
    </div>
</div>
<div class="rubrika">
  <div class="card">
    <img src="https://www.jahroc.com.au/wp-content/uploads/2022/05/Sam-Broadhurst-Artist-Process.jpg" alt="" style="width:100%">
    <div class="container">
      <p class="title">June 15, 2020</p>
      <a href="#">Go Behind the Scenes of the Art World</a>
    </div>
</div>
</div>
<div class="rubrika">
<div class="card">
<img src="https://d2culxnxbccemt.cloudfront.net/craft/content/uploads/2020/11/02150102/mountain-landscape-painting.png" alt="" style="width:100%">
<div class="container">
  <p class="title">September 25, 2023</p>
  <a href="#">Mastering Composition In Landscape Painting: 10 Key Elements And Techniques</a>
</div>
</div>
</div>
<div class="rubrika">
  <div class="card">
  <img src="https://static.stacker.com/s3fs-public/2022-09/girl-with-the-pearl-earring.jpg" alt="" style="width:100%">
  <div class="container">
    <p class="title">September 27, 2011</p>
    <a href="#">Top 10 Ways Artists Make Money</a>
  </div>
  </div>
  </div>
</div>
<?php
include "Footer.php";
?>
</body>
</html>













