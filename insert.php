<?php
require 'config.php';

$stmt = $pdo->prepare("INSERT INTO users (nama, email, password) VALUES (?, ?,?)");
$stmt->execute(["bayu", "bayu@email.com", "bayu_21"]);
$id = $pdo->lastInsertId();
echo "Data berhasil ditambahkan dengan ID: $id";
?>