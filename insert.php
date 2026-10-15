<?php
require 'config.php';

$stmt = $pdo->prepare("INSERT INTO users (nama, email) VALUES (?, ?)");
$stmt->execute(["bayu", "bayu@email.com"]);
$id = $pdo->lastInsertId();
echo "Data berhasil ditambahkan dengan ID: $id";
?>