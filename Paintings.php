<?php

 include_once 'Order.php';
 include_once 'OrderRepo.php';
 

  if (isset($_POST['add_to_cart'])) {
    $product_id = $_POST['id'];
    $user_id=$_POST['user_id'];
    if(!$user_id){
        header("location:SignIn.php");
        exit();
    }

    $orderRepo = new OrderRepo();
    $exist = $orderRepo->insertOrder($product_id, $user_id);
    $_SESSION['successMessage'] = $exist;
    header('location:ShopingCart.php');
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paintings</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="cssfiles/detyra.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
 
<?php  include_once 'Header.php';  ?>

<body>
  

    <h1>Muse Fairytale</h1>
    <div class="kryesori">

        <?php

        include_once "PikturaRepository.php";
        $strep = new PikturaRepository();
        $pikturat = $strep->getAllPaintings();
        if (!$pikturat) {
            die("Invalid query: " . $connection->connect_error);
        }

        $user_id = isset($_SESSION['user']['ID']) ? $_SESSION['user']['ID'] : null;
        foreach ($pikturat as $piktura) {
            echo "
            <form method='POST'>
            <div class='picture'>
                <img src='$piktura[Piktura]' alt=''>
                <div class='autori'>
                    <p>$piktura[Emri]</p>
                    <p>$piktura[Autori]</p>
                    <p>\${$piktura['Cmimi']}</p> 
                    <input type='hidden' name='id' value='$piktura[ID]'>  
                    <input type='hidden' name='user_id' value='$user_id'>  
                    <button class='btn btn-primary' name='add_to_cart'>Add to Cart</button>
                </div>
            </div>
            </form>";
        }
        ?>

    </div>

</body>
<?php include "Footer.php" ?>

</html>
