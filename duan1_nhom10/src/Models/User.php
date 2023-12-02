<?php

namespace Ductong\BaseMvc\Models;

use Ductong\BaseMvc\Model;

class User extends Model {
    protected $table = 'users';
    protected $columns = [
        'name',
        'email',
        'address',
        'password',
        'is_admin',
    ];

    protected function checkConnection() {
        if ($this->getConnection() === null) {
        }
    }

    public function getUserByEmailPassword($email, $password) {
        $this->checkConnection();
    
        $conn = $this->getConnection();
    
        $stmt = $conn->prepare("SELECT * FROM {$this->table} WHERE email = :email AND password = :password");
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
    
        $user = $stmt->fetch(\PDO::FETCH_ASSOC);
    
        return $user;
    }
    
    public function isAdmin($userId){
        $user = new User();
        $user->checkConnection();
    
        $conn = $user->getConnection();
    
        $sql = "SELECT * FROM `admin` WHERE `user_id` = :user_id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':user_id', $userId);
        $stmt->execute();
    
        return $stmt->rowCount() > 0;
    }
    

}
    
