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
        
        if (!$this->pikturaExists($piktura)){
        $sql = "INSERT INTO Piktura(piktura,emri,autori,cmimi) VALUES (?,?,?,?)";

        $statement = $conn->prepare($sql);
        $statement->execute([$piktura,$emri,$autori,$cmimi]);
        return true;
        }else{
            return false;
            
        }
        
    }
    public function pikturaExists($piktura) {
        $sql = "SELECT COUNT(*) FROM Piktura WHERE piktura = ?";
        $statement = $this->connection->prepare($sql);
        $statement->execute([$piktura]);
        return ($statement->fetchColumn() > 0);
    }

    public function anotherPikturaExists($piktura,$id) {
        $sql = "SELECT COUNT(*) FROM Piktura WHERE piktura = ? AND ID != ?";
        $statement = $this->connection->prepare($sql);
        $statement->execute([$piktura,$id]);
        return ($statement->fetchColumn() > 0);
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
        $sql = "UPDATE piktura SET piktura=?,emri=?, autori=?, cmimi=? WHERE ID=?";


        if ($this->anotherPikturaExists($piktura,$id)){
            throw new Exception("Kjo pikture tashme ekziston!");
        }else{
            $statement = $conn->prepare($sql);
            $statement->execute([$piktura,$emri,$autori,$cmimi,$id]);
            }
    }
    function getPikturaById($id){
        $conn = $this->connection;

        $sql = "SELECT * FROM piktura WHERE Id=?";

        $statement = $conn->prepare($sql);
        $statement->execute([$id]);
        $piktura=$statement->fetch();

        return $piktura;
    }

    public function getAllOrders(){
        $conn = $this->connection;
        $sql = "SELECT * FROM order o,piktura p,user u";
        $statement = $conn->query($sql);
        $pikturat = $statement->fetchAll();
        return $pikturat;
    }

    function deletePiktura($id){
        $conn=$this->connection;

        $sql="DELETE FROM piktura WHERE id=?";
        $statment=$conn->prepare($sql);
        $statment->execute([$id]);
    }
    

}



?>