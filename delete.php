<?php
require 'config.php';

$stmt = $pdo->prepare("DELETE FROM users WHERE id = ?");
$stmt->execute([1]);
echo $stmt->rowCount() . " baris dihapus ";
?>