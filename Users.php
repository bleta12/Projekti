<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
 
  <?php include "Header.php"  ?>
<body>
<?php

if (!isset($_SESSION['user']['isAdmin']) || $_SESSION['user']['isAdmin'] != 1) {
    header("Location: SignIn.php");
    exit;
}
?>
    <div class="container my-5">
        <h2>User List</h2>
        <br>
        <div class="table-responsive">
        <table class="table table-sm">
            <thead class="table-secondary">
                <tr>
                    <th>Order_ID</th>
                    <th>piktura_id</th>
                    <th>piktura</th>
                    <th>user_id</th>
                    <th>Cmimi</th>
                </tr>
            </thead>
            <tbody>
                 <?php
                  
                  include "DatabaseConnection.php";
                  include_once "OrderRepo.php";


                  $strep = new OrderRepo();
                  $orders = $strep->getAllUsers();


                foreach($orders as $order) { 
                    echo "    
                <tr>
                    <td>$order[ID]</td>
                    <td><b>$order[piktura_id]</b> </td>
                    <td><img src='$order[piktura]'></td>
                    <td>$order[user_id]</td>
                    <td>\${$order['Cmimi']}</td>
                </tr>
                ";
                }

                 ?>
            </tbody>
        </table>
        </div>
    </div>
</body>


<?php include "Footer.php" ?>
</html>