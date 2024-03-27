<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .container {
            background-color: #fff; /* Add background color */
            padding: 20px; /* Add padding */
            border-radius: 10px; /* Add border radius */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Add box shadow */
        }
        h2 {
            color: #333;
            margin-bottom: 20px; /* Add margin bottom */
            text-align: center; /* Center align the title */
            font-size: 24px; /* Increase font size */
            text-transform: uppercase; /* Uppercase text */
            letter-spacing: 2px; /* Add letter spacing */
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            transition: all 0.3s ease; /* Add transition */
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
            transform: scale(1.05); /* Add scale effect on hover */
        }
        .table thead {
            background-color: #6c757d;
            color: #fff;
        }
        .table th, .table td {
            vertical-align: middle;
        }
        .imag {
            max-width: 100px;
            height: auto;
            border-radius: 5px; /* Add border radius to images */
            transition: all 0.3s ease; /* Add transition */
        }
        img:hover {
            transform: scale(1.1); /* Add scale effect on hover */
        }
        .table tbody tr:nth-child(odd) {
            background-color: #f2f2f2;
        }
        .table tbody tr:hover {
            background-color: #e2e6ea;
        }
        .table td.actions {
            width: 150px; /* Set width for action buttons column */
        }
        .painting-info {
            font-size: 16px; /* Adjust font size */
            line-height: 1.5; /* Adjust line height */
            color: #333; /* Set text color */
        }
        .painting-info b {
            font-weight: bold; /* Make painting name bold */
        }
        .painting-info br {
            display: none; /* Hide line breaks */
        }
        .painting-info:hover br {
            display: block; /* Show line breaks on hover */
        }
    </style>
</head>
<body>
    <?php include "Header.php" ?>
    <?php 
        if (!isset($_SESSION['user']['isAdmin']) || $_SESSION['user']['isAdmin'] != 1) {
            header("Location: SignIn.php");
            exit;
        }
    ?>
    <div class="container">
        <h2>Lista e Pikturave</h2>
        <a class="btn btn-primary mb-3" href="create.php" role="button">Shto nje Pikture</a>
        <div class="table-responsive">
            <table class="table table-sm">
                <thead class="table-secondary">
                    <tr>
                        <th>ID</th>
                        <th>Piktura</th>
                        <th>Emri</th>
                        <th>Autori</th>
                        <th>Cmimi</th>
                        <th class="actions">Veprime</th> <!-- Added class for styling -->
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include "DatabaseConnection.php";
                        include_once "PikturaRepository.php";

                        $strep = new PikturaRepository();
                        $pikturat = $strep->getAllPaintings();

                        if(!$pikturat){
                            die("Invalid query: ". $connection->connect_error);
                        }

                        foreach($pikturat as $piktura) { 
                            echo "    
                                <tr>
                                    <td>$piktura[ID]</td>
                                    <td><img src='$piktura[Piktura]' alt='Piktura' class='imag'></td>
                                    <td>
                                        <span class='painting-info'>
                                            <b>$piktura[Emri]</b><br>
                                            $piktura[Piktura]
                                        </span>
                                    </td>
                                    <td>$piktura[Autori]</td>
                                    <td>\$$piktura[Cmimi]</td>
                                    <td class='actions'>
                                        <a class='btn btn-primary btn-sm me-2' href='edit.php?id=$piktura[ID]'>Ndrysho</a>
                                        <a class='btn btn-danger btn-sm' href='delete.php?id=$piktura[ID]'>Fshije</a>
                                    </td>
                                </tr>
                            ";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php include "Footer.php" ?>
</body>
</html>
