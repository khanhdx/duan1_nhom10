<?php
// File: Database.php (ví dụ)

namespace Ductong\BaseMvc\Database;

use PDO;
use PDOException;

class Database
{
    private static $instance;
    private $connection;

    private function __construct()
    {
        // Thông số kết nối cơ sở dữ liệu được thiết lập từ file constants.php
        $dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_DATABASE . ';charset=utf8';
        $username = DB_USERNAME;
        $password = DB_PASSWORD;

        try {
            $this->connection = new PDO($dsn, $username, $password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die('Connection failed: ' . $e->getMessage());
        }
    }

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getConnection()
    {
        return $this->connection;
    }
}
