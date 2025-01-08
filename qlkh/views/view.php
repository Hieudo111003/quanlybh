<!DOCTYPE html>
<html>
<head>
    <title>Chi tiết khách hàng</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Chi tiết khách hàng</h1>
    <p>
        <strong>Tên:</strong> <?= htmlspecialchars($customer->name) ?><br>
        <strong>Email:</strong> <?= htmlspecialchars($customer->email) ?><br>
        <strong>Địa chỉ:</strong> <?= htmlspecialchars($customer->address) ?>
    </p>
    <a href="index.php">Quay lại danh sách</a>
</body>
</html>
