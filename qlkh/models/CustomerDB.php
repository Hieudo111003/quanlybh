<?php
class CustomerDB {
    private $connection;

    // Khởi tạo đối tượng với kết nối PDO
    public function __construct($connection) {
        $this->connection = $connection;
    }

    // Lấy danh sách tất cả khách hàng
    public function getAll() {
        $query = 'SELECT * FROM customers';
        $statement = $this->connection->prepare($query); // Sử dụng prepare() thay vì query()
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ); // Trả về danh sách khách hàng dưới dạng đối tượng
    }

    // Thêm một khách hàng mới
    public function add($name, $email, $address) {
        $query = 'INSERT INTO customers (name, email, address) VALUES (:name, :email, :address)';
        $statement = $this->connection->prepare($query);
        $statement->bindParam(':name', $name);
        $statement->bindParam(':email', $email);
        $statement->bindParam(':address', $address);
        $statement->execute();
    }

    // Lấy thông tin chi tiết một khách hàng
    public function getById($id) {
        $query = 'SELECT * FROM customers WHERE id = :id';
        $statement = $this->connection->prepare($query);
        $statement->bindParam(':id', $id, PDO::PARAM_INT);
        $statement->execute();
        return $statement->fetch(PDO::FETCH_OBJ);
    }

    // Cập nhật thông tin khách hàng
    public function update($id, $name, $email, $address) {
        $query = 'UPDATE customers SET name = :name, email = :email, address = :address WHERE id = :id';
        $statement = $this->connection->prepare($query);
        $statement->bindParam(':id', $id, PDO::PARAM_INT);
        $statement->bindParam(':name', $name);
        $statement->bindParam(':email', $email);
        $statement->bindParam(':address', $address);
        $statement->execute();
    }

    // Xóa một khách hàng
    public function delete($id) {
        $query = 'DELETE FROM customers WHERE id = :id';
        $statement = $this->connection->prepare($query);
        $statement->bindParam(':id', $id, PDO::PARAM_INT);
        $statement->execute();
    }
}
?>
