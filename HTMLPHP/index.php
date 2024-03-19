<?php
session_start();

if (!isset($_SESSION['username']) || empty($_SESSION['username'])) {
    header("Location: reglog.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../CSS/styleindex.css">
</head>

<body>

    <header>
        <h2 class="logo">PAI-Project</h2>
        <nav class="navigation">
            <button onclick="Logout()" class="btnLogout-popup">Logout</button>
        </nav>
    </header>
    <div class="bigwrapper">
        <div class="wrapper">
            <div class="form-box login">
                <h2>Map</h2>
                <img src="../IMG/map.gif" alt="Map Image">
                <button onclick="redirectToMap()" class="btn">Go to Map</button>
            </div>
        </div>

        <div class="wrapper">
            <div class="form-box register">
                <h2>CV</h2>
                <img src="../IMG/img.jpg" alt="CV Image">
                <button onclick="redirectToCV()" class="btn">Go to CV</button>
                </form>
            </div>
        </div>
    </div>




    <script src="script.js"></script>
    <script>
        function redirectToMap() {
            window.location.href = "map.php";
        }

        function redirectToCV() {
            window.location.href = "index.html";
        }
        function Logout() {
            window.location.href = "logout.php";
        }
    </script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>