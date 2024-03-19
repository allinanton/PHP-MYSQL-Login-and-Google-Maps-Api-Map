<?php
session_start();
// Verifică dacă utilizatorul este autentificat
if (!isset($_SESSION['username'])) {
    // Redirectează către pagina de login dacă utilizatorul nu este autentificat
    header('Location: login.php');
    exit();
}

// Conectează-te la baza de date și obține datele din tabela "points"
$conn = mysqli_connect("localhost", "root", "", "accountdatabase");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = "SELECT * FROM points";
$result = mysqli_query($conn, $query);

// Creează un array pentru a stoca punctele
$points = array();
while ($row = mysqli_fetch_assoc($result)) {
    $points[] = $row;
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google Maps with Authentication</title>
    <!-- Include the Google Maps API script -->
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBjCpvc1gYX3GXWJlygplnsT4KT0K6OL2w&libraries=places"></script>
    <link rel="stylesheet" href="../CSS/styles.css">
</head>

<body>

    <div id="header">
        <p>Bine ai venit,
            <?php echo htmlspecialchars($_SESSION['username']); ?>!
        </p>
        <a href="logout.php" class="btnLogout-popup">Logout</a>
    </div>

    <div id="map"></div>

    <script>
        var points = <?php echo json_encode($points); ?>; // Utilizează datele din baza de date

        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                center: { lat: 45.72673448005368, lng: 24.84959560911226 },
                zoom: 6
            });

            for (var i = 0; i < points.length; i++) {
                var marker = new google.maps.Marker({
                    position: { lat: parseFloat(points[i].lat), lng: parseFloat(points[i].lng) },
                    map: map,
                    label: points[i].description
                });
            }
        }
    </script>

    <!-- Apelul funcției initMap() la încărcarea paginii -->
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBjCpvc1gYX3GXWJlygplnsT4KT0K6OL2w&callback=initMap"></script>

</body>

</html>