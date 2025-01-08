<!DOCTYPE html>
<html>
<head>
    <title>Danh sách khách hàng</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Danh sách khách hàng</h1>
    <a href="index.php?action=add">Thêm khách hàng mới</a>
    <table border="1">
        <thead>
            <tr>
                <th>Tên</th>
                <th>Email</th>
                <th>Địa chỉ</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($customers as $customer): ?>
                <tr>
                    <td><?= htmlspecialchars($customer->name) ?></td>
                    <td><?= htmlspecialchars($customer->email) ?></td>
                    <td><?= htmlspecialchars($customer->address) ?></td>
                    <td>
                        <a href="index.php?action=view&id=<?= $customer->id ?>">Xem</a> | 
                        <a href="index.php?action=edit&id=<?= $customer->id ?>">Sửa</a> | 
                        <a href="index.php?action=delete&id=<?= $customer->id ?>">Xoá</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <!-- Phân trang -->
    <div>
        <?php
        $totalPages = ceil(count($customers) / 6);
        for ($i = 1; $i <= $totalPages; $i++) {
            echo "<a href='index.php?page=$i'>$i</a> ";
        }
        ?>
    </div>
</body>
</html>
