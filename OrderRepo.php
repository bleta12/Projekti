<?php
   include_once('DatabaseConnection.php');
   include_once('Piktura.php');
   include_once('PikturaRepository.php');


class OrderRepo{
    private $connection;

    public function __construct()
    {
        $conn = new DatabaseConnection;
        $this->connection = $conn->startConnection();
    }
  
    
    public function insertOrder($pikturaId,$user_id){
        try {
            $conn = $this->connection;
            $pikturaRepository = new PikturaRepository();
            $piktura = $pikturaRepository->getPikturaById($pikturaId);
            if($piktura){
                $cmimi = $piktura['Cmimi'];
    
                $sql = "INSERT INTO porosia(piktura_id, user_id, Cmimi, Totali) VALUES (?, ?, ?, ?)";
                $statement = $conn->prepare($sql);
                $statement->execute([$pikturaId, $user_id, $cmimi, $cmimi + 5]);
        
               if ($statement->rowCount() > 0) {
                return "Order inserted successfully!";
            } else {
                return "No rows were affected. Order might not have been inserted.";
            }

            }else{
                throw new Exception("Could not find piktura");
            }
        
    } catch (Exception $e) {
        return "No rows were affected. Order might not have been inserted.";
    }
    }

   
    public function getOrderFromUser($idUser) {
        $conn = $this->connection;
    
        $sql = "SELECT p.piktura_id,pi.Piktura as piktura,pi.Emri as emri,p.Cmimi,p.ID AS ID FROM  porosia p, piktura pi WHERE  p.piktura_id=pi.ID and user_id = ?";
        
        $statement = $conn->prepare($sql);
        $statement->execute([$idUser]);
    
        $order = $statement->fetchAll();
        return $order;
    }
    public function getAllUsers(){
        $conn = $this->connection;
        $sql = "SELECT p.ID,p.piktura_id,pi.piktura,p.user_id,p.Cmimi FROM porosia p,piktura pi where p.piktura_id=pi.ID";
        $statement = $conn->query($sql);
        $pikturat = $statement->fetchAll();
        return $pikturat;
    }


    function deleteOrder($ID){
        $conn=$this->connection;

        $sql="DELETE FROM porosia WHERE ID=?";
        $statment=$conn->prepare($sql);
        $statment->execute([$ID]);
    }
    }

?>