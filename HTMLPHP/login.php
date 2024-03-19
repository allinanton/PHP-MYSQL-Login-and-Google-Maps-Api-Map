<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = mysqli_connect("localhost", "root", "") or die(mysqli_error());
    mysqli_select_db($conn, "accountdatabase");

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $check_query = "SELECT password FROM users WHERE username = ?";
    $check_usr = mysqli_prepare($conn, $check_query);
    mysqli_stmt_bind_param($check_usr, "s", $username);
    mysqli_stmt_execute($check_usr);
    mysqli_stmt_store_result($check_usr);

    if (mysqli_stmt_num_rows($check_usr) > 0) {
        mysqli_stmt_bind_result($check_usr, $hashedPassword);
        mysqli_stmt_fetch($check_usr);

        if (password_verify($password, $hashedPassword)) {
            $_SESSION['username'] = $username;
            header("Location: index.php");
            exit;
        } else {
            echo "<script>alert('Wrong password.'); window.location.href = 'login.php';</script>";
            exit;
        }
    } else {
        echo "<script>alert('Username doesn\'t exist.'); window.location.href = 'login.php';</script>";
        exit;
    }
}
?>