<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Sistema de gestión Odontológica</title>
        <link rel="stylesheet" type="text/css" href="Vista/css/estilo.css">
        <script type="text/javascript" src="Vista/jquery/jquery-1.8.1.min.js"></script>
        <script type="text/javascript" src="Vista/js/script.js"></script>
    </head>
    <body>
        <div id="contenedor">
            <div id="encabezado">
            <img src="Vista/img/Banner.png" alt="">

            </div>
            <ul id="menu">
                <li><a href="index.php">Inicio</a></li>
                <li><a href="index.php?accion=asignar">Asignar cita</a></li>
                <li class="activa"><a href="index.php?accion=consultar">Consultar cita</a></li>
                <li><a href="index.php?accion=cancelar">Cancelar cita</a></li>
            </ul>
            <div id="contenido">
                <h2>Consultar cita</h2>
                <form action="index.php?accion=consultarCita" method="post" id="frmconsultar">
                    <table>
                        <tr>
                            <td>Documento del paciente</td>
                            <td><input type="text" name="consultarDocumento" id="consultarDocumento"></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="button" value="Consultar" onclick="consultarCita()">
                            </td>
                        </tr>
                        <tr><td colspan="2"><div id="paciente2"></div></td></tr>
                    </table>
                </form>
            </div>
        </div>
    </body>
</html>
