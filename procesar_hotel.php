<?php
include 'conexion.php';

$nombre = $_POST['nombre'];
$ubicacion = $_POST['ubicación'];
$habitaciones_disponibles = $_POST['habitaciones_disponibles'];
$tarifa_noche = $_POST['tarifa_noche'];

$sql = "INSERT INTO HOTEL (nombre, ubicación, habitaciones_disponibles, tarifa_noche) VALUES 
('Hotel Central', 'Buenos Aires', 50, 100.00),
('Hotel Pacífico', 'Bogotá', 70, 150.00),
('Hotel Europa', 'París', 80, 200.00);";

if ($conn->query($sql) === TRUE) {
    echo "Nuevo hotel agregado exitosamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
