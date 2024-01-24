<?php
   include_once 'User.php';
   include_once 'UserRepo.php';
  
   session_start();


if (isset($_POST['submit'])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
   
    $userRepo = new UserRepo();
    $user = $userRepo->getUserByUsernamePassword($username,$password);

     if ($user !== null){
            $_SESSION['user'] = [
                'username' => $user->getUsername(),
                'email' => $user->getEmail(),
                'password' => $user->getPassword(),
                'isAdmin' => $user->getIsAdmin(),
            ];
            header("location: Header.php");
            exit;
        }
    else {
        echo '<script>alert("Invalid email/username or password");</script>';
        echo '<script>window.location.href = "Sign.php";</script>';
        exit;
    }

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="signin.css">
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

    return true;
}
       
</script>


    
    

    <div class="b">
    <div class="TXT">
        <h2>SELL ART </h2>
        <p>Connect to see the greatest paintings of all the time</p>
    </div>

    <div class="form">
        <form action="" id="registrationForm" onsubmit="return validateForm()" method="POST">
            <h1>Log in</h1>
            <div class="input-box">
                <input type="text" id="username" placeholder="username" name="username" size="8" required>
                <i class='bx bxs-user'></i>
                <span id="nameError" class="error" style="color: red;"></span>
            </div>
            <div class="input-box">
                <input type="password" id="password" name="password" placeholder="password" size="16" required>
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

    <?php include "Footer.php"; ?>
</html>