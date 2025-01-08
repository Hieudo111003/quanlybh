<?php
// Import các file cần thiết
include_once 'controllers/CustomerController.php';
include_once 'models/CustomerDB.php';

// Cấu hình thông tin kết nối CSDL
$dsn = 'mysql:host=localhost;dbname=quanlykh';
$username = 'root'; // Mặc định là "root" trong XAMPP
$password = '';     // Mặc định không có mật khẩu trong XAMPP

// Tạo kết nối với CSDL
try {
    $connection = new PDO($dsn, $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Kết nối CSDL thất bại: " . $e->getMessage());
}

// Tạo đối tượng Controller và kết nối tới model
$controller = new CustomerController(new CustomerDB($connection));

// Lấy action từ URL (mặc định là 'index')
$action = $_GET['action'] ?? 'index';
$id = $_GET['id'] ?? null;

switch ($action) {
    case 'add':
        $controller->add();
        break;
    case 'edit':
        $controller->edit($id);
        break;
    case 'delete':
        $controller->delete($id);
        break;
    case 'view':
        $controller->view($id);
        break;
    default:
        $controller->index();
        break;
}
?>
