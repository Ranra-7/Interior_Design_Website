<?php
session_start();
include "./database.php";

if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: admin-login.php");
    exit();
}



$sql = "SELECT * FROM booking";
$result = mysqli_query($connection, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="admin-dashboard.css">
</head>
<body>
    <h2 style="text-align:center;">Booking Records</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Contact Method</th>
            <th>Project Type</th>
            <th>Design Style</th>
            <th>Budget</th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?= $row['CustomerID'] ?></td>
            <td><?= $row['name'] ?></td>
            <td><?= $row['email'] ?></td>
            <td><?= $row['phone'] ?></td>
            <td><?= $row['address'] ?></td>
            <td><?= $row['contactmethod'] ?></td>
            <td><?= $row['projectType'] ?></td>
            <td><?= $row['designStyle'] ?></td>
            <td><?= $row['budget'] ?></td>
        </tr>
        <?php }
         ?>
    </table>
</body>
</html>
