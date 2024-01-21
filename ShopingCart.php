<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Header.css">
    <link rel="stylesheet" href="foter.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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
</head>

    <header>
        <nav>
          <ul class="menu">
              <li class="logo"><img src="sell art.png" alt="Sell Art"></li>
              <li class="item"><a href="Header.php">Home</a></li>
              <li class="item"><a href="Paintings.php">Paintings</a></li>
              <li class="item"><a href="about.php">About</a></li>
              <li class="item"><a href="Services.php">Services</a></li>
              
              </li>
              <li class="item button"><a href="Sign.php">Log In</a></li>
              <li class="item button secondary"><a href="SignUp.php">Sign Up</a></li>
              <li class="toggle"><span class="bars"></span></li>
          </ul>
      </nav>
      </header>
  <body>
    <p style="font-size: xx-large; margin-left: 150px;">Shoping Cart</p>
     
     

  </body>
      <footer class="footer">
        <div class="kryesor">
            <div class="rreshti">
                <div class="kolon">
                    <h4><i class='bx bxs-paint' ></i>SA-SELL ART</h4>
                   
                   
                   <p style="color: black;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:20px;">"What would life be if we had no courage to attempt anything"</p>
                </div>
      
                
                    <div class="kolon">
                        <h4>Address</h4>
                        <ul>
                            <li><a href="#"><i class='bx bxs-map-pin' ></i>Lagjja Kalabria,10000 Prishtine,Kosove</a></li>
                            <li><a href="#"><i class='bx bxs-home' ></i>More About us</a></li>
                        </ul>
           </div>
      
      
      
            <div class="kolon">
                <h4>KONTAKTE</h4>
                <ul>
                    <li><a href="Services.html"><i class='bx bxs-info-circle' ></i>info@sellart.net</a></li>
                    <li><a href="#"><i class='bx bxs-phone' ></i>+383 38 142 283</a></li>
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