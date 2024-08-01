<?php
include 'conexion.php';

$id_cliente = $_POST['id_cliente'];
$fecha_reserva = $_POST['fecha_reserva'];
$id_vuelo = $_POST['id_vuelo'];
$id_hotel = $_POST['id_hotel'];

if(!empty($id_cliente) && !empty($fecha_reserva) && !empty($id_vuelo) && !empty($id_hotel)) {
    $sql = "INSERT INTO RESERVA (id_cliente, fecha_reserva, id_vuelo, id_hotel) VALUES ('$id_cliente', '$fecha_reserva', '$id_vuelo', '$id_hotel')";
    if ($conn->query($sql) === TRUE) {
        echo "Nueva reserva agregada exitosamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Todos los campos son obligatorios.";
}

$conn->close();
?>
