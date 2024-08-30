<?php

class UserController {
    private $conn;

    public function __construct($pdo) {
        $this->conn = $pdo;
    }

    public function register($name, $email, $password, $type = 'user') {
        if (empty($name) || empty($email) || empty($password)) {
            die("All fields are required");
        }
    
        $hash_password = password_hash($password, PASSWORD_DEFAULT);
    
        $sql = "INSERT INTO admin (name, email, password, type) VALUES (:name, :email, :password, :type)";
        $stmt = $this->conn->prepare($sql);
    
        if ($stmt === false) {
            die("Prepare failed: " . implode(", ", $this->conn->errorInfo()));
        }
    
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $hash_password);
        $stmt->bindParam(':type', $type);
    
        $stmt->execute();
    
        if ($stmt->rowCount() > 0) {
            return $this->conn->lastInsertId();
        } else {
            return null;
        }
    }
    

    public function validateLogin($email, $password) {
        $sql = "SELECT id, name, password, type FROM admin WHERE email = :email";
        $stmt = $this->conn->prepare($sql);
    
        if ($stmt === false) {
            die("Prepare failed: " . implode(", ", $this->conn->errorInfo()));
        }
    
        $stmt->bindParam(':email', $email);
        $stmt->execute();
    
        if ($stmt->errorCode() != '00000') {
            die("Execute failed: " . implode(", ", $stmt->errorInfo()));
        }
    
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
        if ($user && password_verify($password, $user['password'])) {
            return $user;
        } else {
            return null;
        }
    }
}
