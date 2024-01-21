<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="signin.css">
    <link rel="stylesheet" href="foter.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
   

<body>


    <script>
    
    function validateForm() {
    var name = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    var nameError = document.getElementById("nameError");
    var passwordError = document.getElementById("passwordError");
    nameError.innerHTML = "";
    passwordError.innerHTML = "";

    var nameRegex = /^(?=.*[a-zA-Z])(?=.*[0-9])[a-zA-Z0-9]{3,}$/;

    if (!nameRegex.test(name)) {
        nameError.innerHTML = "Invalid username. Use at least 3 characters, letters, and numbers.";
        nameError.style.color = "red";
        return false;
    }
    
    var passwordRegex = /^(?=.*[a-zA-Z])(?=.*[0-9]).{8,}$/;
    if (!passwordRegex.test(password)) {
        passwordError.innerHTML = "Invalid password. Use at least 8 characters with letters and numbers.";
        passwordError.style.color = "red";

        return false;
    }

    
    alert("Form submitted successfully!");
    return true;
    
}
       
</script>


    
    

    <div class="b">
    <div class="TXT">
        <h2>SELL ART </h2>
        <p>Connect to see the greatest paintings of all the time</p>
    </div>

    <div class="form">
        <form action="Header.php"id="registrationForm" onsubmit="return validateForm()" method="POST">
            <h1>Log in</h1>
            <div class="input-box">
                <input type="text" id="username" placeholder="username" name="username" size="8" required>
                <i class='bx bxs-user'></i>
                <span id="nameError" class="error" style="color: red;"></span>
            </div>
            <div class="input-box">
                <input type="password" id="password" placeholder="password" size="16" required>
                <i class='bx bxs-lock-alt' ></i>
                <span id="passwordError" class="error" style="color: red;"></span>
            </div>
            <div class="remember-forget">
                <label><input type="checkbox">Remember me </label>
                <a href="#">Forgot password?</a>
            </div>
                <button type="submit" name="submit" class="btn">Login</button>
            
            <div class="register-link">
                <p>Don't have an account?<a href="SignUp.html"> Register</a></p>
            </div>
        </form>
    </div>
</div>
</body>

<footer class="footer" style="background-color: rgb(184,202,220)">
    <div class="kryesor">
        <div class="rreshti">
            <div class="kolon">
                <h4><i class='bx bxs-paint' ></i>SA-SELL ART</h4>
               
               
               <p style="color: black;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size:20px;
">"What would life be if we had no courage to attempt anything"</p>
               
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