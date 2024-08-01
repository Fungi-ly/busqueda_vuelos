<?php
include 'conexion.php';

$sql = "SELECT HOTEL.nombre, COUNT(RESERVA.id_reserva) AS total_reservas
        FROM HOTEL
        JOIN RESERVA ON HOTEL.id_hotel = RESERVA.id_hotel
        GROUP BY HOTEL.nombre
        HAVING total_reservas > 2";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>Hotel</th><th>Total Reservas</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["nombre"]. "</td><td>" . $row["total_reservas"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "No hay hoteles con más de dos reservas.";
}

$conn->close();
?>
