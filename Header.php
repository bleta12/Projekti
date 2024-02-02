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
    <link rel="stylesheet" href="cssfiles/Header.css">
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

    <?php
    $faqja = 'SELLART';
    setcookie("faqja", $faqja, time() + 30 * 24 * 60 * 60);
    ?>

</head>

<body>
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
                        <svg class="item" style="height:20px; margin-bottom:0px" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 15a2 2 0 1 0 0 4 2 2 0 0 
0 0-4Zm0 0h8m-8 0-1-4m9 4a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-9-4h10l2-7H3m2 7L3 4m0 0-.792-3H1" />
                        </svg>
                    </a>
                </li>
                <?php
                if (isset($_SESSION['user'])) {
                    echo '<li class="item button"><a href="?logout=1">Log Out</a></li>';
                } else {
                    echo '<li class="item button"><a href="SignIn.php">Log In</a></li>';
                    echo '<li class="item button secondary"><a href="SignUp.php">Sign Up</a></li>';
                }
                if (isset($_SESSION['user']) && $_SESSION['user']['isAdmin'] == 1) {
                    echo '<li class="item button"><a href="Tabela.php">Manage Paintings</a></li>';
                    echo '<li class="item button"><a href="Users.php">Users</a></li>';
                }
                ?>
                <li class="toggle"><span class="bars"></span></li>
            </ul>
        </nav>
    </header>
</body>

</html>