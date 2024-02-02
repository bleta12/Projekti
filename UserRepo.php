<?php
   include_once('DatabaseConnection.php');

class UserRepo{
    private $connection;

    public function __construct()
    {
        $conn = new DatabaseConnection;
        $this->connection = $conn->startConnection();
    }
  
    
    public function insertUser($User){
        $conn = $this->connection;

          $name=$User->getName();
          $email=$User->getEmail();
          $username=$User->getUsername();
          $isAdmin=$User->getIsAdmin();
          $password=$User->getPassword();
        
        if (!$this->UserExists($email)){
        $sql = "INSERT INTO user (name,email,username,isAdmin,password) VALUES (?,?,?,?,?)";

        $statement = $conn->prepare($sql);
        $statement->execute([$name,$email,$username,$isAdmin,$password]);
        return true;
        }else{
            return false;
            
        }
        
    }
    public function UserExists($email) {
        $sql = "SELECT COUNT(*) FROM user WHERE Email = ?";
        $statement = $this->connection->prepare($sql);
        $statement->execute([$email]);
        return ($statement->fetchColumn() > 0);
    }
    
    public function getAllUsers(){
        $conn = $this->connection;

        $sql = "SELECT * FROM user";
        $statement = $conn->query($sql);

        $user = $statement->fetchAll();
        return $user;
    }
    function getUserByUsernamePassword($username,$password){
        try {
        $conn = $this->connection;

        $sql = "SELECT * FROM user WHERE Username=? AND Password=?";

        $statement = $conn->prepare($sql);
        $statement->execute([$username,$password]);
        $userData=$statement->fetch();
        if ($userData) {
            $user = new User(
                $userData['ID'],
                $userData['Name'],
                $userData['Email'],
                $userData['Username'],
                $userData['IsAdmin'],
                $userData['Password']
            );
        return $user;
    }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        return null;
    }
    }


    }
    ?>