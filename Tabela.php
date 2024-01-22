<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <h2>Lista e Pikturave</h2>
        <a class="btn btn-primary" href="create.php" role="button">Shto nje Pikture</a>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Piktura</th>
                    <th>Emri</th>
                    <th>Autori</th>
                    <th>Cmimi</th>
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
                    <td><a href='#'>$piktura[Piktura]</a></td>
                    <td>$piktura[Emri]</td>
                    <td>$piktura[Autori]</td>
                    <td>$piktura[Cmimi]</td>
                    <td>
                        <a class='btn btn-primary btn-sm' href='edit.php?id=$piktura[ID]'>Ndrysho</a>
                        <a class='btn btn-danger btn-sm' href='delete.php?id=$piktura[ID]'>Fshije</a>
                    </td>
                </tr>
                ";
                }

                 ?>
            </tbody>
        </table>

    </div>
</body>
</html>