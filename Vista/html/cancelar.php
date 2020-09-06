<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Sistema de gestión Odontológica</title>
      
        <script type="text/javascript" src="Vista/jquery/jquery-1.8.1.min.js"></script>
        <script type="text/javascript" src="Vista/js/script.js"></script>
      
        <link rel="stylesheet" href="Vista/jquery/dialog/jquery-ui-1.8.23/themes/base/jquery.ui.all.css">
        <script src="Vista/jquery/dialog/jquery-ui-1.8.23/external/jquery-bgiframe-2.1.2.js"></script>
        <script src="Vista/jquery/dialog/jquery-ui-1.8.23/ui/jquery.ui.core.js"></script>
        <script src="Vista/jquery/dialog/jquery-ui-1.8.23/ui/jquery.ui.widget.js"></script>
        <script src="Vista/jquery/dialog/jquery-ui-1.8.23/ui/jquery.ui.position.js"></script>
        <script src="Vista/jquery/dialog/jquery-ui-1.8.23/ui/jquery.ui.dialog.js"></script>
       
        <link rel="stylesheet" href="Vista/jquery/dialog/jquery-ui-1.8.23/themes/base/jquery.ui.all.css">
        <script src="Vista/jquery/dialog/jquery-ui-1.8.23/ui/jquery.ui.datepicker.js"></script>

        <link rel="stylesheet" type="text/css" href="Vista/css/estilo.css">
    </head>
    <body>
        <div id="contenedor">
            <div id="encabezado">
            <img src="Vista/img/Banner.png" alt="">

            </div>
            <ul id="menu">
                <li><a href="index.php">Inicio</a></li>
                <li><a href="index.php?accion=asignar">Asignar cita</a></li>
                <li><a href="index.php?accion=consultar">Consultar cita</a></li>
                <li class="activa"><a href="index.php?accion=cancelar">Cancelar cita</a></li>
            </ul>
            <div id="contenido">
                <h2>Cancelar cita</h2>
                <form action="index.php?accion=cancelarCita" method="post" id="frmcancelar">
                    <table>
                        <tr>
                            <td>Documento del paciente</td>
                            <td><input type="text" name="cancelarDocumento" id="cancelarDocumento"></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="button" value="Consultar" onclick="cancelarCita()" id="cancelarConsultar">
                            </td>
                        </tr>
                        <tr><td colspan="2"><div id="paciente3"></div></td></tr>
                    </table>
                </form>
            </div>
        </div>
    </body>
</html>
