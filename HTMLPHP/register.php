<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = mysqli_connect("localhost", "root", "") or die(mysqli_error());
    mysqli_select_db($conn, "accountdatabase");


    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Verificăm mai întâi dacă username-ul există deja
    $check_query = "SELECT * FROM users WHERE username = ?";
    $check_stmt = mysqli_prepare($conn, $check_query);
    mysqli_stmt_bind_param($check_stmt, "s", $username);
    mysqli_stmt_execute($check_stmt);
    mysqli_stmt_store_result($check_stmt);
    $row_count = mysqli_stmt_num_rows($check_stmt);

    $check_query = "SELECT * FROM users WHERE email = ?";
    $check_stmt = mysqli_prepare($conn, $check_query);
    mysqli_stmt_bind_param($check_stmt, "s", $username);
    mysqli_stmt_execute($check_stmt);
    mysqli_stmt_store_result($check_stmt);
    $row_count = mysqli_stmt_num_rows($check_stmt);

    if ($row_count > 0) {
        echo "<script>alert('Username already exists.'); window.location.href = 'reglog.php';</script>";
        exit;
    }
    if ($row_count > 0) {
        echo "<script>alert('Email already exists.'); window.location.href = 'reglog.php';</script>";
        exit;
    } else {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $sql_insert = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql_insert);
        mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPassword);

        $retval = mysqli_stmt_execute($stmt);
        if (!$retval) {
            die('Could not insert data: ' . mysqli_error($conn));
        }
        echo "Data inserted successfully\n";
        mysqli_close($conn);
        header("Location: reglog.php");
        exit;
    }

}
?>

