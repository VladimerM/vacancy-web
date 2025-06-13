<?php
class User {
    private $conn;
    
    public function __construct($db) {
        $this->conn = $db;
    }
    
    
    public function createUser($data) {
        if ($this->emailExists($data['email'])) {
            echo "This email is already registered.<br>";
            return false;
        }
        
        $query = "INSERT INTO users (full_name, email, password, terms_accepted, job_alerts, created_at) 
                  VALUES (:full_name, :email, :password, :terms_accepted, :job_alerts, NOW())";
        
        $stmt = $this->conn->prepare($query);
        
       
        $stmt->bindParam(':full_name', $data['full_name']);
        $stmt->bindParam(':email', $data['email']);
        $stmt->bindParam(':password', $data['password']);
        $stmt->bindParam(':terms_accepted', $data['terms_accepted'], PDO::PARAM_BOOL);
        $stmt->bindParam(':job_alerts', $data['job_alerts'], PDO::PARAM_BOOL);
        
        return $stmt->execute();
    }
    
    
    public function emailExists($email) {
        $query = "SELECT id FROM users WHERE email = :email";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        
        return $stmt->rowCount() > 0;
    }
    
  
    public function getUserByEmail($email) {
        $query = "SELECT * FROM users WHERE email = :email AND status = 'active'";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        
        return $stmt->fetch();
    }
    
    
    public function verifyPassword($password, $hashed_password) {
        return password_verify($password, $hashed_password);
    }
    
   
    public function getUserById($user_id) {
        $query = "SELECT * FROM users WHERE id = :user_id AND status = 'active'";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
        $stmt->execute();
        
        return $stmt->fetch();
    }
}
?>