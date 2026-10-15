<?php
require 'config.php';

 if (isset($_GET['id'])) {
        $id = htmlspecialchars($_GET['id']);
$stmt = $pdo->prepare("DELETE FROM users WHERE id = ?");
$stmt->execute([$id]);
//echo $stmt->rowCount() . " baris dihapus ";
header("Location: /todo-app/users.php");
exit();
    } else {
        echo "<p>Id tidak ditemukan</p>";
    }
?>