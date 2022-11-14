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

$sql = "DROP TABLE IF EXISTS ejemplo2 ;";

// sql to create table
$sql = "CREATE TABLE ejemplo2 (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
nombre VARCHAR(30) NOT NULL,
equipo VARCHAR(30) NOT NULL
);";

if ($conn->query($sql) === TRUE) {
    echo "Tabla creada satisfactoriamente";
} else {
    echo "Error creando la tabla " . $conn->error;
}

$conn->close();
?>