<!DOCTYPE html>
<html>
<head>
    <title>Xóa khách hàng</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Xóa khách hàng</h1>
    <p>Bạn có chắc chắn muốn xóa khách hàng này không?</p>
    <p>
        Tên: <?= htmlspecialchars($customer->name) ?><br>
        Email: <?= htmlspecialchars($customer->email) ?><br>
        Địa chỉ: <?= htmlspecialchars($customer->address) ?>
    </p>
    <form method="post" action="">
        <input type="hidden" name="id" value="<?= $customer->id ?>">
        <button type="submit">Xóa</button>
        <a href="index.php">Hủy</a>
    </form>
</body>
</html>
