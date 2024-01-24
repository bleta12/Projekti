<?php
include_once 'User.php';
include_once 'UserRepo.php';

  session_start();

 $errorMesazh="";
 $successMessage="";


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $username = $_POST["username"];
  $isAdmin = (strtoupper(substr($_POST["email"], 0, 1)) === 'A') ? true : false;
  $password = $_POST["password"];
  do {

    $user = new User($name,$email,$username,$isAdmin,$password);

    $userRepo = new UserRepo();
    $exist=$userRepo->insertUser($user);
  
    if (!$exist) {
      echo '<script>alert("Useri ekziston ' . $name. '");</script>';
        break;
    }

     header("location: SignIn.php");
     exit;

   }while(false);

}

  
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <link rel="stylesheet" href="SignUp.css">
    <link rel="stylesheet" href="foter.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <script>
        function validateForm() {
          var name = document.getElementById("name").value;
          var email = document.getElementById("email").value;
          var username = document.getElementById("username").value;
          var password = document.getElementById("password").value;
          var confirmPassword = document.getElementById("confirmPassword").value;

    
          var nameError = document.getElementById("nameError");
          var emailError = document.getElementById("emailError");
          var usernameError = document.getElementById("usernameError");
          var passwordError = document.getElementById("passwordError");
    
          nameError.innerHTML = "";
          emailError.innerHTML = "";
          usernameError.innerHTML="";
          passwordError.innerHTML = "";
    

          if (name === "") {
            nameError.innerHTML = "Name is required.";
            return false;
          }
    
          var emailPattern = /^([A-Za-z0-9_\-.])+@([A-Za-z0-9_\-.])+\.([A-Za-z]{2,4})$/;
          if (!emailPattern.test(email)) {
            emailError.innerHTML = "Invalid email address.";
            return false;
          }
          var nameRegex = /^(?=.*[a-zA-Z])(?=.*[0-9])[a-zA-Z0-9]{3,}$/;

          if (!nameRegex.test(username)) {
               usernameError.innerHTML = "Invalid username. Use at least 3 characters, letters, and numbers.";
               usernameError.style.color = "red";
            return false;
          }
    
          if (password.length < 8) {
            passwordError.innerHTML = "Password must be at least 8 characters.";
            return false;
          }

         if (password !== confirmPassword) {
         passwordError.innerHTML = "Passwords do not match.";
         return false;
         }
    
          return true;
        }
      </script>
    
    <div class="contact-form">
        <form action="" id="registrationForm" onsubmit="return validateForm()" method="POST">
          <h2>Sign Up</h2>
          <input type="hidden" name="idAdmin" value="">
          <div class="input-box">
            <input type="text" required="true" name="name" id="name" placeholder="Full name" value="">
            <span id="nameError" class="error" style="color: red;"></span>
          </div> 
          
          <div class="input-box">
            <input type="email" required="true" name="email" id="email" placeholder="Email" value="">
            <span id="emailError" class="error" style="color: red;"></span>
          </div>

          <div class="input-box">
          <input type="text" id="username" placeholder="username" name="username" size="8" required value="">
            <span id="usernameError" class="error" style="color: red;"></span>
          </div>
          
          <div class="input-box">
            <input type="password" required="true" name="password" id="password" placeholder="Password" value="">
            <span id="passwordError" class="error" style="color: red;"></span>
          </div>

          <div class="input-box">
            <input type="password" required="true" name="confirmPassword" id="confirmPassword" placeholder="Confirm Password">
          </div>
          
          <div class="input-box">
           <input type="submit" value="Send" name="submitbtn">
          </div>
        </form>
      </div>
</body>

<footer class="footer" style="width: 100%; margin-left: 0%; background-color: rgb(184, 202, 220);">
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