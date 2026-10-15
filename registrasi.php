<?php
require 'config.php';
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $confirm = $_POST['konfirmasiPassword'] ?? '';

    if (empty($name) || empty($email) || empty($password) || empty($confirm)) {
        $error = 'form wajib diisi!';
    } else {
        $stmt = $pdo->prepare("INSERT INTO users (nama, email, password) VALUES (?, ?, ?)");
        $stmt->execute([$name, $email, $password]);
        $id = $pdo->lastInsertId();
        echo "Berhasil registrasi!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
</head>
<body>
    <form action="" method="post">
    <input type="text" name="name" placeholder="Name">
    <input type="email" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Password">
    <input type="password" name="konfirmasiPassword" placeholder="Konfirmasi Password">
    <button type="submit">Register</button>
</form>
<?php if ($error): ?>
    <p style="color: red;"><?= $error ?></p>
    <?php endif; ?>
</body>
</html>