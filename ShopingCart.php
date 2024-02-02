<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
    <link rel="stylesheet" href="cssfiles/shop.css">

</head>

<?php include "Header.php" ?>

<body>
    <div class="container my-5">
        <h1>SHOPPING CART</h1>
        <h2>Lista e Porosive</h2>
        <a class="btn btn-primary" href="Paintings.php" role="button">Kthehu ne shopping </a>
        <br>
        <div class="table-responsive">
            <table class="table table-sm">
                <thead class="table-secondary">
                    <tr>
                        <th>ID</th>
                        <th>Piktura</th>
                        <th>Emri</th>
                        <th>Cmimi</th>
                    
                    </tr>
                </thead>
                <tbody>
                  <?php               
                   include "OrderRepo.php";
                  
                      $user_id = isset($_SESSION['user']['ID']) ? $_SESSION['user']['ID'] : null;
                      

                      $orderRepo = new OrderRepo();
                      $orders = $orderRepo->getOrderFromUser($user_id);
                      
                        foreach($orders as $order) {
                            echo "    
                        <tr>
                           <td>$order[piktura_id]</td>
                           <td><img src='$order[piktura]'></td>
                           <td>$order[emri]</td>
                           <td>\${$order['Cmimi']}</td>
                           <td><a class='btn btn-danger btn-sm' href='delete2.php?id=$order[ID]'>Fshije</a></td>
                        <tr> ";
                        }
                    ?>

                </tbody>
            </table>
        </div>
    </div>
</body>

<?php include "Footer.php";  ?>

</html>
