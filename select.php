<?php
require 'config.php';

//ambil semua
$stmt = $pdo->query("SELECT * FROM users");
$users = $stmt->fetchAll();
foreach ($users as $user) {
    echo $user['nama'] . ' - ' . $user['email'] . '<br>';
}

//ambil satu
$stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
$stmt->execute([1]);
$user = $stmt->fetch();
echo $user['nama']
?>