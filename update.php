<?php
require 'config.php';

$stmt = $pdo->prepare("UPDATE users SET nama = ? WHERE id = ?");
$stmt->execute(["Budi Update", 1]);
echo $stmt->rowCount() . " baris diupdate ";
?>