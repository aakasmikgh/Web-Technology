<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add User</title>
</head>
<body>
    <h2>Add New User</h2>
    <form action="insert_user.php" method="post">
        <label>Name:</label>
        <input type="text" name="name" required><br><br>

        <label>Email:</label>
        <input type="email" name="email" required><br><br>

        <label>Address:</label>
        <textarea name="address" required></textarea><br><br>

        <label>Number:</label>
        <input type="text" name="number" required><br><br>

        <button type="submit">Add User</button>
    </form>
</body>
</html>
