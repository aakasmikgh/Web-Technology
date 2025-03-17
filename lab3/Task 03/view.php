<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "image_uploads";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name FROM uploads ORDER BY id DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Uploads</title>
</head>
<body>
    <h2>Uploaded Images</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Image Name</th>
            <th>Photo</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td><img src='uploads/" . $row["name"] . "' width='100' height='100'></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No uploads found</td></tr>";
        }
        $conn->close();
        ?>
    </table>
    <a href="fileupload.php">Upload More</a>
</body>
</html>
