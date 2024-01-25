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

<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa; /* Set a background color if needed */
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }

        h2 {
            color: #333;
        }

        .btn-primary {
            display: inline-block;
            padding: 10px 20px;
            margin-bottom: 20px;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            text-decoration: none;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>   

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