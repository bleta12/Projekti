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
                 $servername="127.0.0.1";
                 $username="root";
                 $password="";
                 $database="paintings";

                $connection= new mysqli($servername,$username,$password,$database);

                if($connection->connect_error){
                    die("Lidhja deshtoi: " . $connection->connect_error);
                }


                $result=$connection->query("SELECT * FROM piktura");

                if(!$result){
                    die("Invalid query: ". $connection->connect_error);
                }

                while($row=$result->fetch_assoc()){
                    echo "    
                <tr>
                    <td>$row[ID]</td>
                    <td><a href='#'>$row[Piktura]</a></td>
                    <td>$row[Emri]</td>
                    <td>$row[Autori]</td>
                    <td>$row[Cmimi]</td>
                    <td>
                        <a class='btn btn-primary btn-sm' href='edit.php?id=$row[ID]'>Ndrysho</a>
                        <a class='btn btn-danger btn-sm' href='delete.php?id=$row[ID]'>Fshije</a>
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