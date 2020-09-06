<?php
    if($result->num_rows > 0){
?>
<table>
    <tr><th>Identificacion</th><th>Nombre</th><th>Sexo</th></tr>
    <?php
        $fila = $result->fetch_object();
    ?>
        <tr>
            <td><?php echo $fila->pacidentificacion; ?></td>
            <td><?php echo $fila->pacnombres. " ". $fila->pacapellidos; ?></td>
            <td><?php echo $fila->pacsexo; ?></td>
        </tr>
</table>
<?php
    }
    else{
?><br>
        <div class='Error'> 
             El paciente no existe en la base de datos.
        </div>  
        <br>
    <input type="button" name="ingPaciente" value="Ingresar paciente" id="ingPaciente" onclick="mostrarFormulario()">
<?php    
    }
?>    
