
<!-- OBJETO EQUIPO -->

<?php

class Equipo{


    function __contruct(){

    }




/* FUNCION INSERTAR EQUIPO */

    function insertarEquipo($_POST){

    $consulta="insert into equipos (Nombre, Ciudad, Conferenia, Division) values ($this->nombre,'$this->ciudad',$this->conferencia,$this->division)";
    $resultado=$this->conexion->query($consulta);

    return resultado;
    }

/* ------- */


/* FUNCION CONECTAR BASE DA DATOS */
public function conectar(){

    $this->conexion = new mysqli("localhost", "root", "", "nba");
    if ($this->conexion->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $this->conexion->connect_errno . ") " . $this->conexion->connect_error;
    }
  }
/* -------- */
    



}

?>