<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Vuelo</title>
    <script>
        function validarFormulario() {
            var origen = document.forms["formVuelo"]["origen"].value;
            var destino = document.forms["formVuelo"]["destino"].value;
            var fecha = document.forms["formVuelo"]["fecha"].value;
            var plazas = document.forms["formVuelo"]["plazas_disponibles"].value;
            var precio = document.forms["formVuelo"]["precio"].value;
            if (origen == "" || destino == "" || fecha == "" || plazas == "" || precio == "") {
                alert("Todos los campos deben ser completados");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
    <h1>Agregar Vuelo</h1>
    <form name="formVuelo" action="procesar_vuelo.php" method="post" onsubmit="return validarFormulario();">
        Origen: <input type="text" name="origen"><br>
        Destino: <input type="text" name="destino"><br>
        Fecha: <input type="date" name="fecha"><br>
        Plazas Disponibles: <input type="number" name="plazas_disponibles"><br>
        Precio: <input type="text" name="precio"><br>
        <input type="submit" value="Agregar Vuelo">
    </form>
</body>
</html>