<!DOCTYPE html>
<html>
<head>
    <title>Chỉnh sửa khách hàng</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Chỉnh sửa khách hàng</h1>
    <form method="post" action="">
        <input type="hidden" name="id" value="<?= $customer->id ?>">
        <label for="name">Tên:</label>
        <input type="text" id="name" name="name" value="<?= htmlspecialchars($customer->name) ?>" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?= htmlspecialchars($customer->email) ?>" required>
        <br>
        <label for="address">Địa chỉ:</label>
        <input type="text" id="address" name="address" value="<?= htmlspecialchars($customer->address) ?>" required>
        <br>
        <button type="submit">Cập nhật</button>
        <a href="index.php">Hủy</a>
    </form>
</body>
</html>
