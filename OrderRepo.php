<?php
   include_once('DatabaseConnection.php');

class OrderRepo{
    private $connection;

    public function __construct()
    {
        $conn = new DatabaseConnection;
        $this->connection = $conn->startConnection();
    }
  
    
    public function insertOrder($Order){
        $conn = $this->connection;

        $piktura_id=$Order->getPiktura_Id();
        $user_id=$Order->getUser_Id();
        $transporti=$Order->getTransporti();
        $totali=$Order->getTotali();

        $sql = "INSERT INTO porosia(piktura_id,user_id,transporti,totali) VALUES (?,?,?,?)";

        $statement = $conn->prepare($sql);
        $statement->execute($piktura_id,$user_id,$transporti,$totali);
    }
    
}
?>