<?php
   include_once('DatabaseConnection.php');

class PikturaRepository{
    private $connection;

    public function __construct()
    {
        $conn = new DatabaseConnection;
        $this->connection = $conn->startConnection();
    }
  
    
    public function insertPainting($Piktura){
        $conn = $this->connection;

        $piktura = $Piktura->getPiktura();
        $emri=$Piktura->getEmri();
        $autori=$Piktura->getAutori();
        $cmimi=$Piktura->getCmimi();
        

        $sql = "INSERT INTO Piktura(piktura,emri,autori,cmimi) VALUES (?,?,?,?,?,?,?,?)";

        $statement = $conn->prepare($sql);
        $statement->execute([$piktura,$emri,$autori,$cmimi]);

        echo "<script>alert('U shtua me sukses!')</script>";
    }


    public function getAllPaintings(){
        $conn = $this->connection;

        $sql = "SELECT * FROM piktura";
        $statement = $conn->query($sql);

        $pikturat = $statement->fetchAll();
        return $pikturat;
    }



}



?>