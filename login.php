<!DOCTYPE html>
<html>
<head>
    <title>Login Mobilindo</title>
</head>
<body>
    <h2>Login Aplikasi Mobilindo</h2>
    <!-- <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?> -->
    <form method="post">
        <label>Username:</label><br>
        <input type="text" name="username"><br><br>

        <label>Password:</label><br>
        <input type="password" name="password"><br><br>

        <input type="submit" name="login" value="Login">
    </form>
</body>
</html>

<?php
session_start();
include_once "koneksi.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username']; 
    $password = $_POST['password'];
    $query = "SELECT * FROM users WHERE username = ? AND password = ?"; 
    $stmt = mysqli_prepare($conn, $query); 
    mysqli_stmt_bind_param($stmt, "ss", $username, $password); 
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt); 


if ($row = mysqli_fetch_assoc($result)) { 
    $_SESSION['username'] = $row['username']; 
    $_SESSION['role'] = $row['role'];  
    header("Location: index.php"); 
    exit; 
} else {
     echo "Login gagal!"; 
}}
?>
