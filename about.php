<?php
 session_start();


 if (isset($_GET['logout'])) {
  
  $_SESSION = array();

  
  session_destroy();

  
  header("Location: SignIn.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sell Art</title>

    <link rel="stylesheet" href="cssfiles/about.css">
    <link rel="stylesheet" href="cssfiles/Header.css">
    <link rel="stylesheet" href="cssfiles/foter.css">
    <link rel="stylesheet" href="cssfiles/Abbout.css">
    <link rel="stylesheet" href="cssfiles/m.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@1,300&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>
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

<script>

document.addEventListener("DOMContentLoaded", function () {
    var currentSlideIndex = 0;

    function showSlides() {
        var slides = document.querySelectorAll('.card');

        slides.forEach((slide, i) => {
            // Adjusted visibility condition
            var isVisible = i >= currentSlideIndex && i < currentSlideIndex + 2;
            slide.style.display = isVisible ? 'flex' : 'none';
        });
    }

    function nextSlide() {
        var slides = document.querySelectorAll('.card');
        currentSlideIndex = (currentSlideIndex + 1) % (slides.length - 1); // Updated to handle 4 cards
        showSlides();
    }

    function prevSlide() {
        var slides = document.querySelectorAll('.card');
        currentSlideIndex = (currentSlideIndex - 1 + slides.length - 1) % (slides.length - 1); // Updated to handle 4 cards
        showSlides();
    }

    // Show initial slides
    showSlides();

    // Attach event listeners to buttons
    document.getElementById('nextButton').addEventListener('click', nextSlide);
    document.getElementById('prevButton').addEventListener('click', prevSlide);
});




</script>


    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
    <header style="width: 100%;">
  <nav>
    <ul class="menu">
        <li class="logo"><img src="sell art.png" alt="Sell Art"></li>
        <li class="item"><a href="Home.php">Home</a></li>
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
       <?php 
         if (isset($_SESSION['user'])){
          echo '<li class="item button"><a href="?logout=1">Log Out</a></li>';
              
         }
         else{
        echo '<li class="item button"><a href="SignIn.php">Log In</a></li>';
        echo '<li class="item button secondary"><a href="SignUp.php">Sign Up</a></li>';     
         }
         if (isset($_SESSION['user']) && $_SESSION['user']['isAdmin'] == 1) {
          echo '<li class="item button"><a href="Tabela.php">Menage Painting</a></li>';
           }
        ?>
        <li class="toggle"><span class="bars"></span></li>
    </ul>
</nav>
</header>

    <div class="bgfoto" style="background-image: url(photo/son.png);">
        <h1>ABOUT ART</h1>
    </div>

    <script>
        function toggleReadMore(cardNumber) {
            var extraText = document.getElementById("extraText" + cardNumber);
            var btnText = document.getElementById("readMoreBtn" + cardNumber);

            if (extraText.style.display === "none" || extraText.style.display === "") {
                extraText.style.display = "block";
                btnText.innerHTML = "READ LESS";
            } else {
                extraText.style.display = "none";
                btnText.innerHTML = "READ MORE";
            }
        }
    </script>

    <hr style="display: flex; margin-top: 150px; width:100%;height: 6px;background-color: rgb(5, 66, 45);">
    <div class="r">
        <h1>"I paint my own reality"</h1>
        <img src="photo/blog-3.webp" alt="">
    </div>

    <hr style="display: flex; margin-top: 150px; width:100%;height: 6px;background-color: rgb(5, 66, 45);">
    <main>
        <div class="info">
            <div class="Fotot">
                <div class="teHistori">
                    <div class="imgWrapper">
                        <img src="photo/colourful-winter-nermine-hanna.jpg" alt="">
                    </div>
                    <div class="imgWrapper">
                        <img src="photo/close-up-of-god-and-adam-s-hands-157844809-58ab54a23df78c345b08689c-5c531771c9e77c00014b025e.jpg" alt="">
                    </div>
                    <div class="imgWrapper">
                        <img src="photo/TheStoryOfArt.jpg" alt="">
                    </div>
                    <div class="imgWrapper">
                        <img src="photo/il_570xN.3175370807_a269.webp" alt="">
                    </div>
                </div>
            </div>
            <div class="Permbajtja">
                <div class="SA">
                    <h4>History of "Sell Art"</h4>
                    <h2>How it all started...</h2>
                    <p>The story of SELL ART began at the beginning of 2018, a story which continues even stronger
                        than ever. The reason for creating this website is to know more about the beautiful art of
                        paintings, to learn something new from it, to get to know the artists who started everything,
                        and over time the sale of the paintings of the greatest painters of all time.</p>
                    <a href="https://www.artsy.net/">For more information</a>
                </div>
            </div>
        </div>
    </main>

    <div class="square-hr">
        <span>Artists who made the world of Art complete</span>
    </div>

<body>
    <section class="main">
    <button id="prevButton" onclick="prevSlide()">&#60;</button>
        <div class="card"  id="1">
            <div id="container">
                <div class="card-img car-1" style="background-image: url(photo/Leonardo.webp)"></div>
                <h1>Leonardo Da Vinci</h1>
                <p> Leonardo da Vinci was born in Italy.<br>He began his career in the city, but then spent much
                    time in the service of Ludovico Sforza in Milan,he spent his last three years in France, where he
                    died in 1519.</p>
                <div id="extraText1" class="hidden">
                    <h1> Paintings</h1>
                    <p>Despite the recent awareness and admiration of Leonardo as a scientist and inventor, his fame
                        rested on his achievements as a painter. These paintings are famous for a variety of qualities
                        that have been much imitated by students and discussed at great length by connoisseurs and
                        critics. By the 1490s Leonardo had already been described as a "Divine" painter</p>
                </div>
                <a href="javascript:void(0)" id="readMoreBtn1" onclick="toggleReadMore(1)">READ MORE</a>
            </div>
        </div>

        <div class="card"  id="2">
    <div id="container">
        <div class="card-img car-1" style="background-image: url('photo/Georgia.jpg')"></div>
        <h1>Georgia</h1>
        <p>Georgia Totto O'Keeffe was an American modernist painter called the "Mother of American
 modernism". By the time she graduated from high school in 1905, O’Keeffe had determined to make her
 way as an artist. She studied at the Art Institute of Chicago and the Art Students League in New
 York.</p>
        <div id="extraText1" class="hidden">
            <h1> Getting Famouse</h1>
            <p>By the mid-1920s, O’Keeffe was recognized as one of America’s most important and successful
 artists, known for her paintings of New York skyscrapers—an essentially American symbol of
 modernity—as well as her equally radical depictions of flowers.</p>                  
        </div>
        <a href="javascript:void(0)" id="readMoreBtn1" onclick="toggleReadMore(1)">READ MORE</a>
      </div>
   </div>

   <div class="card"  id="3">
 <div id="container">
     <div class="card-img car-1" style="background-image: url(photo/Leonardo.webp)"></div>
     <h1>Leonardo3 Da Vinci</h1>
     <p> Leonardo da Vinci was born in Italy.<br>He began his career in the city, but then spent much
         time in the service of Ludovico Sforza in Milan,he spent his last three years in France, where he
         died in 1519.</p>
     <div id="extraText1" class="hidden">
         <h1> Paintings</h1>
         <p>Despite the recent awareness and admiration of Leonardo as a scientist and inventor, his fame
             rested on his achievements as a painter. These paintings are famous for a variety of qualities
             that have been much imitated by students and discussed at great length by connoisseurs and
             critics. By the 1490s Leonardo had already been described as a "Divine" painter</p>
     </div>
     <a href="javascript:void(0)" id="readMoreBtn1" onclick="toggleReadMore(1)">READ MORE</a>
   </div>
</div>

<!--
<div class="card"  id="4" style="width: 50px;">
 <div id="container">
     <div class="card-img car-1" style="background-image: url(photo/Leonardo.webp)"></div>
     <h1>Leonardo4 Da Vinci</h1>
     <p> Leonardo da Vinci was born in Italy.<br>He began his career in the city, but then spent much
         time in the service of Ludovico Sforza in Milan,he spent his last three years in France, where he
         died in 1519.</p>
     <div id="extraText1" class="hidden">
         <h1> Paintings</h1>
         <p>Despite the recent awareness and admiration of Leonardo as a scientist and inventor, his fame
             rested on his achievements as a painter. These paintings are famous for a variety of qualities
             that have been much imitated by students and discussed at great length by connoisseurs and
             critics. By the 1490s Leonardo had already been described as a "Divine" painter</p>
     </div>
     <a href="javascript:void(0)" id="readMoreBtn1" onclick="toggleReadMore(1)">READ MORE</a>
   </div>
</div>
    -->
<!--
        <div class="card" id="2">
            <div class="card-img car-2" style="background-image: url('photo/Georgia.jpg');"></div>
            <h1>Georgia</h1>
            <p>Georgia Totto O'Keeffe was an American modernist painter called the "Mother of American
                modernism". By the time she graduated from high school in 1905, O’Keeffe had determined to make her
                way as an artist. She studied at the Art Institute of Chicago and the Art Students League in New
                York.
            </p>
            <div id="extraText2" class="hidden">
                <h1>Getting Famouse</h1>
                <p>By the mid-1920s, O’Keeffe was recognized as one of America’s most important and successful
                    artists, known for her paintings of New York skyscrapers—an essentially American symbol of
                    modernity—as well as her equally radical depictions of flowers.</p>
            </div>
            <a href="javascript:void(0)" id="readMoreBtn2" onclick="toggleReadMore(2)">READ MORE</a>
        </div>

        <div class="card" id="3">
            <div class="card-img car-3" style="background-image: url('photo/Michelangelo.jpg');"></div>
            <h1>Michelangelo</h1>
            <p>Michelangelo was born on 6 March 1475 in Caprese, known today as Caprese Michelangelo.Several months
                after Michelangelo's birth, the family returned to Florence. During his mother's illness, and after
                her death in 1481 (when he was six years old), Michelangelo lived with a nanny and her husband.</p>
            <div id="extraText3" class="hidden">
                <h1>How It Started</h1>
                <p>As a young boy, Michelangelo was sent to Florence to study grammar under the Humanist Francesco da
                    Urbino. He showed no interest in his schooling, preferring to copy paintings from churches and
                    seek the company of other painters.</p>
            </div>
            <a href="javascript:void(0)" id="readMoreBtn3" onclick="toggleReadMore(3)">READ MORE</a>
        </div>

        <div class="card" id="4">
     <div class="card-img car-3" style="background-image: url('photo/Michelangelo.jpg');"></div>
     <h1>Michelangelo</h1>
     <p>Michelangelo was born on 6 March 1475 in Caprese, known today as Caprese Michelangelo.Several months
         after Michelangelo's birth, the family returned to Florence. During his mother's illness, and after
         her death in 1481 (when he was six years old), Michelangelo lived with a nanny and her husband.</p>
     <div id="extraText3" class="hidden">
         <h1>How It Started</h1>
         <p>As a young boy, Michelangelo was sent to Florence to study grammar under the Humanist Francesco da
             Urbino. He showed no interest in his schooling, preferring to copy paintings from churches and
             seek the company of other painters.</p>
     </div>
     <a href="javascript:void(0)" id="readMoreBtn3" onclick="toggleReadMore(3)">READ MORE</a>
 </div>-->
 <button id="nextButton" onclick="nextSlide()">&#62;</button>
    </section>
</body>



<footer class="footer" style="width: 100%;">
    <div class="kryesor">
        <div class="rreshti">
            <div class="kolon">
                <h4><i class='bx bxs-paint'></i>SA-SELL ART</h4>
                <p style="color: black;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS',
                        sans-serif;font-size:20px;">"What would life be if we had no courage to attempt
                    anything"</p>
            </div>

            <div class="kolon">
                <h4>Address:</h4>
                <ul>
                    <li><a href="#"><i class='bx bxs-map-pin'></i>Lagjja Kalabria,10000
                            Prishtine,Kosove</a></li>
                    <li><a href="#"><i class='bx bxs-home'></i>More About us</a></li>
                </ul>
            </div>

            <div class="kolon">
                <h4>KONTAKTE:</h4>
                <ul>
                    <li><a href="Services.html"><i class='bx bxs-info-circle'></i>info@sellart.net</a></li>
                    <li><a href="#"><i class='bx bxs-phone'></i>+383 38 142 283</a></li>
                </ul>
            </div>

            <div class="kolon">
                <h4>Follow us on:</h4>
                <div class="linqet">
                    <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>

    <hr>

    <p class="copyright">All rights reserved by &copy;Sell Art 2023</p>
</footer>


</html>