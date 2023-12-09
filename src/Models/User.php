<?php
namespace Ductong\BaseMvc\Models;

use Ductong\BaseMvc\Model;

session_start();
class User extends Model
{
    protected $table = 'users';
    protected $columns = ['name', 'email', 'address', 'password', 'is_admin'];

    private $name;
    private $email;
    private $address;
    private $password;
    private $is_admin;
    public function getUserByEmailPassword($email, $password)
    {
        $sql = "SELECT * FROM {$this->table} WHERE email = :email AND password = :password LIMIT 1";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->execute();

        // Thiết lập chế độ trả về kết quả dưới dạng mảng liên hợp
        $stmt->setFetchMode(\PDO::FETCH_ASSOC);

        // Lấy người dùng từ kết quả truy vấn
        $user = $stmt->fetch();

        return $user;
    }

    // Các phương thức getter và setter

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function setIsAdmin($is_admin)
    {
        $this->is_admin = $is_admin;
    }

    // Các phương thức getter

    public function getName()
    {
        return $this->name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getIsAdmin()
    {
        return $this->is_admin;
    }
    public function getUserByEmail($email)
    {
        $sql = "SELECT * FROM {$this->table} WHERE email = :email LIMIT 1";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        // Thiết lập chế độ trả về kết quả dưới dạng mảng liên hợp
        $stmt->setFetchMode(\PDO::FETCH_ASSOC);

        // Lấy người dùng từ kết quả truy vấn
        $user = $stmt->fetch();

        return $user;
    }

    // Phương thức lưu người dùng vào cơ sở dữ liệu
    public function save()
    {
        $sql = "
            INSERT INTO {$this->table} (name, email, address, password, is_admin)
            VALUES (:name, :email, :address, :password, :is_admin)
        ";

        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(':name', $this->name);
        $stmt->bindValue(':email', $this->email);
        $stmt->bindValue(':address', $this->address);
        $stmt->bindValue(':password', $this->password);
        $stmt->bindValue(':is_admin', $this->is_admin);
        

        try {
            $stmt->execute();
        } catch (\PDOException $e) {
            // Xử lý lỗi khi không thể thêm vào cơ sở dữ liệu
            // Ví dụ: log lỗi, hiển thị thông báo cho người dùng
            echo "Lỗi: " . $e->getMessage();
            // Ghi log lỗi hoặc xử lý theo cách khác nếu cần thiết
            return false; // Trả về false để biểu thị rằng quá trình lưu thất bại
        }

        return true; // Trả về true để biểu thị rằng quá trình lưu thành công
    }
}
