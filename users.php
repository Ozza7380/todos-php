<?php
require 'config.php';

$stmt = $pdo->query("SELECT * FROM users");
$users = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>See all users</title>
</head>
<body>
    <table>
        <tr>
            <th>Nama</th>
            <th>Email</th>
        </tr>
        <?php
        foreach ($users as $user) {
            echo "<tr><td>{$user['nama']}</td><td>{$user['email']}</td></tr>";
        }
        ?>
    </table>
</body>
</html>