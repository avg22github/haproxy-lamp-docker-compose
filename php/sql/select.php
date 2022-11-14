<?php
$servername = "db";
$username = "frodo";
$password = "bolson";
$dbname = "ejemplo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, nombre, equipo FROM ejemplo2;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["nombre"]. " " . $row["equipo"]. "<br>";
    }
} else {
    echo "se lia";
}
$conn->close();
?>