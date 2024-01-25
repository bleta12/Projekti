<?php
 include_once 'Order.php';
 include_once 'OrderRepo.php';


if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $piktura=$_POST["Piktura"];
    $emri=$_POST["Emri"];
    $autori=$_POST["Autori"];
    $cmimi=$_POST["Cmimi"];


   do {

    $order = new Order($piktura_id,$user_id,$transporti,$totali);

    $orderRepo = new OrderRepo();
    $exist=$orderRepo ->insertOrder($piktura1);


     header("location: Tabela.php");
     exit;

   }while(false);

}

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
 
  <?php  include "Header.php" ?>
<body>
<div class="container my-5">
    <h2>Lista e Porosive</h2>
    <a class="btn btn-primary" href="Paintings.php" role="button">kthehuni ne shoping</a>
    <br>
    <div class="table-responsive">
    <table class="table table-sm">
        <thead class="table-secondary">
            <tr>
                <th>ID</th>
                <th>Emri Porosise</th>
                <th>Cmimi</th>
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
    </div>
</div>


</body>
  <?php include "Footer.php";  ?>
</html>