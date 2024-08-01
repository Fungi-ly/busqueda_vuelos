<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Reserva</title>
</head>
<body>
    <h1>Registrar Reserva</h1>
    <form action="procesar_reserva.php" method="post">
        ID Cliente: <input type="number" name="id_cliente" required><br>
        Fecha Reserva: <input type="date" name="fecha_reserva" required><br>
        
        ID Vuelo: 
        <select name="id_vuelo" required>
            <option value="">Seleccione un vuelo</option>
            <?php
            include 'conexion.php';
            $result = $conn->query("SELECT id_vuelo, origen, destino, fecha FROM VUELO");
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row['id_vuelo'] . "'>" . $row['origen'] . " a " . $row['destino'] . " - " . $row['fecha'] . "</option>";
                }
            } else {
                echo "<option value=''>No hay vuelos disponibles</option>";
            }
            ?>
        </select><br>
        
        ID Hotel: 
        <select name="id_hotel" required>
            <option value="">Seleccione un hotel</option>
            <?php
            $result = $conn->query("SELECT id_hotel, nombre, ubicación FROM HOTEL");
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row['id_hotel'] . "'>" . $row['nombre'] . " - " . $row['ubicación'] . "</option>";
                }
            } else {
                echo "<option value=''>No hay hoteles disponibles</option>";
            }
            ?>
        </select><br>
        
        <input type="submit" value="Registrar Reserva">
    </form>
</body>
</html>