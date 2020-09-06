<?php


class Controlador {
    public function verPagina($ruta){
        require_once $ruta;
    }
    
    public function agregarCita($doc, $med, $fec, $hor, $con){
        $cita = new Cita(null, $fec, $hor, $doc, $med, $con, "Solicitada", "Ninguna");
        $gestorCita = new GestorCita();
        $id = $gestorCita->agregarCita($cita);
        $result = $gestorCita->consultarCitaPorId($id);
        require_once 'Vista/html/confirmarCita.php';
    }
    
    public function consultarCitas($doc){
        $gestorCita = new GestorCita();
        $result = $gestorCita->consultarCitasPorDocumento($doc);
        require_once 'Vista/html/consultarCitas.php';
    }
    
    public function cancelarCitas($doc){
        $gestorCita = new GestorCita();
        $result = $gestorCita->consultarCitasPorDocumento($doc);
        require_once 'Vista/html/cancelarCitas.php';
    }
    
    public function consultarPaciente($doc){
        $gestorCita = new GestorCita();
        $result = $gestorCita->consultarPaciente($doc);
        require_once 'Vista/html/consultarPaciente.php';
    }
    
    public function agregarPaciente($doc, $nom, $ape, $fec, $sex){
        $paciente = new Paciente($doc, $nom, $ape, $fec, $sex);
        $gestorCita = new GestorCita();
        $registros = $gestorCita->agregarPaciente($paciente);
        if($registros > 0){
            echo "
                <div class='Exito'>
                    Paciente registrado con exito.
                </div>    
            ";
        }
        else{
            
            echo "
            <div class='Error'> 
          Error al registrar el paciente, intente de nuevo.
          </div>  ";
        }
    }
    
    public function cargarAsignar(){
        $gestorCita = new GestorCita();
        $result = $gestorCita->consultarMedicos();
        $result2 = $gestorCita->consultarConsultorios();
        require_once 'Vista/html/asignar.php';
    }
    
    public function consultarHorasDisponibles($medico, $fecha){
        $gestorCita = new GestorCita();
        $result = $gestorCita->consultarHorasDisponibles($medico, $fecha);
        require_once 'Vista/html/consultarHoras.php';
    }
    
    public function verCita($cita){
        $gestorCita = new GestorCita();
        $result = $gestorCita->consultarCitaPorId($cita);
        require_once 'Vista/html/confirmarCita.php';
    }
    
    public function confirmarCancelarCita($cita){
        $gestorCita = new GestorCita();
        $registros = $gestorCita->cancelarCita($cita);
        if($registros>0){
            ?>
            <script>
                alert("Cancelacion Exitosa");
                window.location = 'index.php?accion=cancelar';
            </script>
            <?php
        }
        else{
            echo "Error al cancelar cita, intente de nuevo";
        }
    }
    
    public function generarReporte($cita){
        $gestorCita = new GestorCita();
        $result = $gestorCita->consultarCitaPorId($cita);
        require_once "Vista/html/reporteCita.php";
        ob_start();
        //require 'Vista/pdf/fpdf182/fpdf.php';
        $pdf = new FPDF();
        $pdf->AddPage();
        $pdf->SetFont('Arial', 'B', '16');
        $pdf->Cell(40, 10, 'Hola');
        $pdf->Output();
    }
}
