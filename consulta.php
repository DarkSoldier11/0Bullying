<?php
session_start();
function compararEmail(): int{
    $email = $_POST['email'];
    $cons_usuario="id11247305_root";
    $cons_contra="Bullying0";
    $cons_base_datos="id11247305_0bullying";
    $cons_equipo="localhost";
    $obj_conexion = mysqli_connect($cons_equipo,$cons_usuario,$cons_contra,$cons_base_datos);
	if($obj_conexion){
//		echo "<h3>Conexion exitosa PHP - MySQL para comparar email </h3><hr><br>";
        $consulta="SELECT * FROM usuarios WHERE email = '$email'";
        $resultado=mysqli_query($obj_conexion,$consulta);
        $filas=mysqli_num_rows($resultado);
        return $filas;
        mysqli_close($obj_conexion);
	}
	else{
//		echo"<h3>No se ha podido conectar PHP - MySQL para comparar email.</h3><hr><br>";
	}
}
function compararSeud(): int{
    $seudonimo = $_POST['seudonimo'];
    
    $cons_usuario="id11247305_root";
    $cons_contra="Bullying0";
    $cons_base_datos="id11247305_0bullying";
    $cons_equipo="localhost";
    $obj_conexion = mysqli_connect($cons_equipo,$cons_usuario,$cons_contra,$cons_base_datos);
	if($obj_conexion){
//		echo "<h3>Conexion exitosa PHP - MySQL para comparar email </h3><hr><br>";
        $consulta="SELECT * FROM usuarios WHERE seudonimo = '$seudonimo'";
        $resultado=mysqli_query($obj_conexion,$consulta);
        $filas=mysqli_num_rows($resultado);
        return $filass;
        mysqli_close($obj_conexion);
	}
	else{
//		echo"<h3>No se ha podido conectar PHP - MySQL para comparar email.</h3><hr><br>";
	}
}

function compararUsrPass() {
   
    
}
?>