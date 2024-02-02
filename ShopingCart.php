<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
    <link rel="stylesheet" href="cssfiles/shop.css">

</head>
<style>
    .buttoni {
        margin-left: 20px;
        padding: 8px 20px;
        background-color: black;
        color: #fff;
        text-decoration: none;
        border-radius: 4px;
        border: none;
        font-size: 18px;
        display: inline-block;
        margin-left: 850px;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }

    .buttoni:hover {
        background-color: #0056b3;
        text-decoration: none;
    }
</style>

<?php include "Header.php"; ?>



<body>
    <div class="container my-5">
        <h1>SHOPPING CART</h1>
        <h2>Order List</h2>
        <a class="btn btn-primary" href="Paintings.php" role="button">Back to shopping </a>
        <br>
        <div class="table-responsive">
            <table class="table table-sm">
                <thead class="table-secondary">
                    <tr>
                        <th>ID</th>
                        <th>Piktura</th>
                        <th>Emri</th>
                        <th>Cmimi</th>
                        <th>Modifiko</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "OrderRepo.php";

                    $user_id = isset($_SESSION['user']['ID']) ? $_SESSION['user']['ID'] : null;

                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        $strep2 = new OrderRepo();
                        $strep2->deleteAllOrders($user_id);
                    }
                    $orderRepo = new OrderRepo();
                    $orders = $orderRepo->getOrderFromUser($user_id);
                    $totaliCmimit = 0;
                    $totali = 0;
                    $transporti = 0;
                    if (!$orders) {
                        echo "No orders available";
                    } else {
                        foreach ($orders as $order) {
                            $totaliCmimit = $totaliCmimit + $order['Cmimi'];
                            if ($totaliCmimit === 0) {
                                $transporti = 0;
                            } else{
                                $transporti=5; 
                            }

                            echo "
                        <tr>
                           <td>$order[piktura_id]</td>
                           <td><img src='$order[piktura]'></td>
                           <td>$order[emri]</td>
                           <td>\${$order['Cmimi']}</td>
                           <td><a class='btn btn-danger btn-sm' href='delete2.php?id= $order[ID]'>Fshije</a></td>

                        <tr> ";
                        }
                        $totali = $totaliCmimit + $transporti;
                        echo "
                        <thead class='table-secondary'>
    <tr>
        <th>Cmimi</th>
        <th>Transporti</th>
        <th>Totali</th>
    </tr> 
    <tr>
    <td>\${$totaliCmimit}</td>
    <td>$transporti</td>
    <td>$totali</td>
</tr> 
</thead>";
                    }

                    ?>

                </tbody>
            </table>

        </div>
        <form method="POST">
        <button type="submit" class="buttoni" name="deleteOrders">Order</button>
        </form>
    </div>

</body>

<?php include "Footer.php";  ?>

</html>