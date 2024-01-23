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
        

        $sql = "INSERT INTO Piktura(piktura,emri,autori,cmimi) VALUES (?,?,?,?)";

        $statement = $conn->prepare($sql);
        $statement->execute([$piktura,$emri,$autori,$cmimi]);

        
    }


    public function getAllPaintings(){
        $conn = $this->connection;

        $sql = "SELECT * FROM piktura";
        $statement = $conn->query($sql);

        $pikturat = $statement->fetchAll();
        return $pikturat;
    }

    public function editPiktura($id,$piktura,$emri,$autori,$cmimi){
        $conn = $this->connection;
        $sql = "UPDATE studenti SET piktura=?,emri=?, autori=?, cmimi=? WHERE Id=?";

        $statement = $conn->prepare($sql);
        $statement->execute([$piktura,$emri,$autori,$cmimi,$id]);

        echo "<script>alert('U ndryshua me sukses!')</script>";

    }



}



?>