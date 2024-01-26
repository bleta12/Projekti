<?php
include_once 'Order.php';
include_once 'OrderRepo.php';

$host = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "paintings";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $piktura = $_POST["Piktura"];
    $emri = $_POST["Emri"];
    $autori = $_POST["Autori"];
    $cmimi = $_POST["Cmimi"];

    $user_id = 1;
    $transporti = "5";
    $GetCmimi = 1500;
    $totali = 5 * $GetCmimi;

    do {

        $order = new Order($piktura, $user_id, $transporti, $totali);

        $orderRepo = new OrderRepo();

        $exist = $orderRepo->insertOrder($order, $conn);

        header("location: Tabela.php");
        exit;
    } while (false);
}

?>

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
                        <th>Emri Porosise</th>
                        <th>Cmimi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM pikurat";
                    $result = $conn->query($sql);
                    if ($result !== false && $result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>
                                    <td>" . $row["id"] . "</td>
                                    <td>" . $row["Emri"] . "</td>
                                    <td>" . $row["Emri_Autorit"] . "</td>
                                    <td>" . $row["cmimi"] . "</td>
                                  </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='3'>No orders available</td></tr>";
                    }
                    ?>

                </tbody>
            </table>
        </div>
    </div>
</body>

<?php include "Footer.php";  ?>

</html>

<?php
$conn->close();
?>