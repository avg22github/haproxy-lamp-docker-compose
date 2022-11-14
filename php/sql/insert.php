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

$sql = "INSERT INTO ejemplo2 (nombre, equipo)
VALUES ('Ale', 'Valle');";

if ($conn->multi_query($sql) === TRUE) {
    echo "Datos insertados correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>