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

<?php include "Header.php" ?>

<body>


    <h1>Muse Fairytale</h1>
    <div class="kryesori">

        <?php

        include "DatabaseConnection.php";
        include_once "PikturaRepository.php";
        $strep = new PikturaRepository();
        $pikturat = $strep->getAllPaintings();
        if (!$pikturat) {
            die("Invalid query: " . $connection->connect_error);
        }

        
        foreach ($pikturat as $piktura) {
            echo "<div class='picture'>
                <img src='$piktura[Piktura]' alt=''>
                <div class='autori'>
                    <p>$piktura[Emri]</p>
                    <p>$piktura[Autori]</p>
                    <p>\${$piktura['Cmimi']}</p>     
               <a class='btn btn-primary add-to-cart' data-painting-id='{$piktura['ID']}' role='button'>Add to Cart</a>
                </div>
            </div>";
        }
        ?>



    </div>


</body>
<?php include "Footer.php" ?>

</html>