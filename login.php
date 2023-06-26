<?php
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $login = "SELECT * FROM users WHERE username ='".$username."' AND password ='".$password."'";
    $result = mysqli_query($conn, $login);
    $count = mysqli_num_rows($result);
    // $stmt = $db->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
    // $stmt->execute([$username, $password]);

    if ($count > 0) {
        echo "Login berhasil!";
    } else {
        echo "Login failed";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login Pengguna</h2>
    <form method="POST" action="">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
