<?php
class CustomerController {
    private $customerDB;

    public function __construct($customerDB) {
        $this->customerDB = $customerDB;
    }

    // Hiển thị danh sách khách hàng
    public function index() {
        $customers = $this->customerDB->getAll(); // Gọi phương thức getAll()
        include 'views/list.php'; // Hiển thị danh sách
    }

    // Thêm một khách hàng mới
    public function add() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $this->customerDB->add($name, $email, $address);
            header('Location: index.php'); // Quay lại danh sách sau khi thêm
        } else {
            include 'views/add.php'; // Hiển thị form thêm
        }
    }

    // Chỉnh sửa thông tin khách hàng
    public function edit($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $this->customerDB->update($id, $name, $email, $address);
            header('Location: index.php'); // Quay lại danh sách sau khi chỉnh sửa
        } else {
            $customer = $this->customerDB->getById($id);
            include 'views/edit.php'; // Hiển thị form sửa
        }
    }

    // Xóa một khách hàng
    public function delete($id) {
        $this->customerDB->delete($id);
        header('Location: index.php'); // Quay lại danh sách sau khi xóa
    }

    // Xem thông tin chi tiết một khách hàng
    public function view($id) {
        $customer = $this->customerDB->getById($id);
        include 'views/view.php'; // Hiển thị thông tin chi tiết
    }
}
?>
