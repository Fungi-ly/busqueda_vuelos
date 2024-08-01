<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Hotel</title>
    <script>
        function validarFormulario() {
            var nombre = document.forms["formHotel"]["nombre"].value;
            var ubicacion = document.forms["formHotel"]["ubicación"].value;
            var habitaciones = document.forms["formHotel"]["habitaciones_disponibles"].value;
            var tarifa = document.forms["formHotel"]["tarifa_noche"].value;
            if (nombre == "" || ubicacion == "" || habitaciones == "" || tarifa == "") {
                alert("Todos los campos deben ser completados");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
    <h1>Agregar Hotel</h1>
    <form name="formHotel" action="procesar_hotel.php" method="post" onsubmit="return validarFormulario();">
        Nombre: <input type="text" name="nombre"><br>
        Ubicación: <input type="text" name="ubicación"><br>
        Habitaciones Disponibles: <input type="number" name="habitaciones_disponibles"><br>
        Tarifa por Noche: <input type="text" name="tarifa_noche"><br>
        <input type="submit" value="Agregar Hotel">
    </form>
</body>
</html>
