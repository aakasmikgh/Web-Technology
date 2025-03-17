<?php
include 'db.php';

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM users WHERE id=$id");
$user = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit User</title>
</head>
<body>
    <h2>Edit User</h2>
    <form action="update_user.php" method="post">
        <input type="hidden" name="id" value="<?= $user['id'] ?>">
        
        <label>Name:</label>
        <input type="text" name="name" value="<?= $user['name'] ?>" required><br><br>

        <label>Email:</label>
        <input type="email" name="email" value="<?= $user['email'] ?>" required><br><br>

        <label>Address:</label>
        <textarea name="address" required><?= $user['address'] ?></textarea><br><br>

        <label>Number:</label>
        <input type="text" name="number" value="<?= $user['number'] ?>" required><br><br>

        <button type="submit">Update User</button>
    </form>
</body>
</html>
