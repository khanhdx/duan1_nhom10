<?php

namespace Ductong\BaseMvc\Models;

use Ductong\BaseMvc\Model;

class User extends Model
{
    protected $table = 'users';
    protected $columns = [
        'name',
        'email',
        'address',
        'password',
        'is_admin',
    ];

    public function getUserByEmailPassword($email, $password)
    {
        $sql = "
            SELECT 
                * 
            FROM {$this->table} 
            WHERE 
                email = :email 
                AND 
                password = :password 
            LIMIT 1
        ";

        $stmt = $this->conn->prepare($sql);

        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);

        $stmt->execute();

        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    public function emailExists($email)
    {
        $sql = "
            SELECT 
                id 
            FROM {$this->table} 
            WHERE 
                email = :email
            LIMIT 1
        ";

        $stmt = $this->conn->prepare($sql);

        $stmt->bindParam(':email', $email);

        $stmt->execute();

        return ($stmt->fetchColumn() !== false);
    }
}
