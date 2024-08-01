<?php
include 'conexion.php';

$origen = $_POST['origen'];
$destino = $_POST['destino'];
$fecha = $_POST['fecha'];
$plazas_disponibles = $_POST['plazas_disponibles'];
$precio = $_POST['precio'];

$sql = "INSERT INTO VUELO (origen, destino, fecha, plazas_disponibles, precio) VALUES 
('Santiago', 'Buenos Aires', '2024-08-01', 100, 200.00),
('Lima', 'Bogotá', '2024-08-05', 150, 250.00),
('Madrid', 'París', '2024-08-10', 200, 300.00);";

if ($conn->query($sql) === TRUE) {
    echo "Nuevo vuelo agregado exitosamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
