<?php
 session_start();


 if (isset($_GET['logout'])) {
  
  $_SESSION = array();

  
  session_destroy();

  
  header("Location: SignIn.php");
  exit;
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <link rel="stylesheet" href="cssfiles/Header.css">
    <link rel="stylesheet" href="cssfiles/foter.css">
    <link rel="stylesheet" href="cssfiles/services.css">

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
  function validateForm() {
       var name = document.getElementById("name").value;
       var email = document.getElementById("email").value;


      var nameError = document.getElementById("nameError");
      var emailError = document.getElementById("emailError");

     nameError.innerHTML = "";
     emailError.innerHTML = "";

           if (name === "") {
              nameError.innerHTML = "Name is required.";
              return false;
            }

    var emailPattern = /^([A-Za-z0-9_\-.])+@([A-Za-z0-9_\-.])+\.([A-Za-z]{2,4})$/;
    
          if (!emailPattern.test(email)) {
            emailError.innerHTML = "Invalid email address.";
            return false;
          }

    alert("Form submitted successfully!");
    return true;
  }
        </script>
         <?php  
    $faqja='SELLART';
    setcookie("faqja",$faqja,time()+30*24*60*60);
    ?>
</head>
<header>
  <nav>
    <ul class="menu">
        <li class="logo"><img src="photo/sell art.png" alt="Sell Art"></li>
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
          echo '<li class="item button"><a href="Users.php">Users</a></li>';
           }
        ?>
        <li class="toggle"><span class="bars"></span></li>
    </ul>
</nav>
</header>

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

     
       <div class="permbajtja">
         <div class="titulliServices" style="background-image: url(photo/titulli.jpg);">
            <p>Our Features & Services</p>
         </div>

         <div class="blloqet">
           
            <div class="section">
                <div class="fotoS">
                <img src="photo/comunication.jpg" alt="">
            </div>
                <h2>Communications</h2>
                <p>Hear from our satisfied customers who have found joy and inspiration in our art. Read their testimonials and discover why SELL ART is a trusted source for art enthusiasts.</p>
                <div id="extraText1" class="hidden" style="display: none;">
                  <p>Our commitment to excellence is reflected in the quality of materials we use.
                     From premium canvas to archival inks, every piece is crafted with meticulous attention to detail.</p>
              </div>
              <a href="javascript:void(0)" id="readMoreBtn1"class="readMoreBtn" onclick="toggleReadMore(1)">READ MORE</a>
            </div>
            <div class="section">
                <div class="fotoS">
                    <img src="photo/features.jpg" alt="">
                </div>
                <h2>Features</h2>
                <p>Become part of our vibrant art community. Engage with us on social media, attend events, and connect with fellow art enthusiasts who share a passion for creativity.</p>
                <div id="extraText2" class="hidden" style="display: none;">
                  <p>Experience exclusivity with our limited edition pieces.
                    Each numbered and signed edition is a rare gem, adding a touch of prestige to your art collection.</p>
              </div>
              <a href="javascript:void(0)"id="readMoreBtn2" class="readMoreBtn" onclick="toggleReadMore(2)">READ MORE</a>
            </div>
            <div class="section">
              <div class="fotoS">
                  <img src="photo/customer-engagent-model.png" alt="">
              </div>
              <h2>Customer Support and Engagement</h2>
              <p>Customers who receive a personalized experience will return to their favorite painting to buy more in the future than disengaged customers.</p>
              <div id="extraText3" class="hidden" style="display: none;">
                <p>Our artistic philosophy shapes every stroke and color, creating a unique and meaningful artistic expression.</p>
            </div>
            <a href="javascript:void(0)"id="readMoreBtn3" class="readMoreBtn" onclick="toggleReadMore(3)">READ MORE</a>
                </div>
                
         </div>
        </div> 

 <div class="getInTouch">
         <div class="gitTitulli">
                <p>GET IN TOUCH</p>
         </div>

         <div class="txtGetInTouch">
           <p>
            We'd love to hear from you! Whether you have a question about our products,
             want to collaborate,<br> or just want to say hello, feel free to reach out to us.
           </p>
         </div>
    <div class="contactUs">
         <div class="container">
            <div class="row">
              
              <div class="contact-info">
                <div class="contact-info-item">
                  <div class="contact-info-icon">
                    <i class="fas fa-home"></i>
                  </div>
                  
                  <div class="contact-info-content">
                    <h4>Address</h4>
                    <p>4671 Rruga street,<br/> Gjilan, Kosovë, <br/>6000</p>
                  </div>
                </div>
                
                <div class="contact-info-item">
                  <div class="contact-info-icon">
                    <i class="fas fa-phone"></i>
                  </div>
                  
                  <div class="contact-info-content">
                    <h4>Phone</h4>
                    <p>044-456-232</p>
                  </div>
                </div>
                
                <div class="contact-info-item">
                  <div class="contact-info-icon">
                    <i class="fas fa-envelope"></i>
                  </div>
                     
                  <div class="contact-info-content">
                    <h4>Email</h4>
                    <p>example@email.com</p>
                 </div>
               </div>
            </div>
        </div> 
      </div>

      <div class="contact-form">
        <form action="" id="registrationForm" onsubmit="return validateForm()" method="POST">
          <h2>Send Message</h2>
          <div class="input-box">
            <input type="text" required="true" name="name"id="name" placeholder="Full Name">
            <span id="nameError" class="error" style="color: red;"></span>
          </div>
          
          <div class="input-box">
            <input type="email" required="true" name="email" id="email" placeholder="Email">
            <span id="emailError" class="error" style="color: red;"></span>
          </div>
          
          <div class="input-box">
            <textarea required="true" name="textarea" placeholder="Type your Message..."></textarea>
          </div>
          
          <div class="input-box">
            <input type="submit" value="Send" name="">
          </div>
        </form>
      </div>
    </div>
 </div>
<footer class="footer" style="background-color: rgb(200, 198, 195);">
    <div class="kryesor">
        <div class="rreshti">
            <div class="kolon">
                <h4><i class='bx bxs-paint' ></i>SA-SELL ART</h4>
               <p style="color: black;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:20px;">"What would life be if we had no courage to attempt anything"</p>
            </div>
          
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d23550.12178133761!2d21.46153275!3d42.4540112!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1702102215730!5m2!1sen!2s" width="570" height="200" style="border:0; margin-top: 50px; margin-left: 5px; margin-right: 10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        <div class="kolon">
          <h4>Follow us on:</h4>
      <div class="linqet">

   <a href="#"><i class="fab fa-facebook-f"></i></a>
   <a href="#"><i class="fab fa-twitter"></i></a>
   <a href="#"><i class="fab fa-instagram"></i></a>
  <a href="#"><i class="fab fa-linkedin-in"></i></a>

    </div>
    </div>
   </div>   
</div>
<hr>
<p class="copyright">All rights reserved by &copy;Sell Art 2023</p>
</footer>

</html>