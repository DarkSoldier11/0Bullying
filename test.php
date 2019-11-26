<?php
	$cons_usuario="id11247305_root";
	$cons_contra="Bullying0";
	$cons_base_datos="id11247305_0bullying";
	$cons_equipo="localhost";
								
	$obj_conexion = mysqli_connect($cons_equipo,$cons_usuario,$cons_contra,$cons_base_datos);
	if($obj_conexion){
        echo "<h3>Conexion exitosa PHP - MySQL</h3><hr><br>";
        $var_consulta = "select * from usuarios";
        $var_resultado = $obj_conexion->query($var_consulta);
        
        $var_consulta_post = "select * from post";
        $var_resultado_post = $obj_conexion->query($var_consulta_post);
								
		if($var_resultado){
		    echo "<table border='2' align='left'>
		    <tr bgcolor='#E6E6E6'>
		    <th>ID</th>
		    <th>Seudonimo</th>
		    <th>Nombre</th>
		    <th>Email</th>
		    <th>Email de Confianza</th>
			<th>Escuela trabaja</th>
			<th>Contrasena</th>
			</tr>";
			
			while ($var_fila=$var_resultado->fetch_array()) {
			    echo "<tr>
			    <td>".$var_fila["id"]."</td>";
			    echo "<td>".$var_fila["seudonimo"]."</td>";
			    echo "<td>".$var_fila["nombre"]."</td>";
			    echo "<td>".$var_fila["email"]."</td>";
			    echo "<td>".$var_fila["email_c"]."</td>";
				echo "<td>".$var_fila["escuela_t"]."</td>";
				echo "<td>".$var_fila["pass"]."</td></tr>";
            }
            echo "<br><br>";
        }else {
		    echo("No hay registros");
        }
        
        if($var_resultado_post){
		    echo "<table border='2' align='left'>
		    <tr bgcolor='#E6E6E6'>
		    <th>ID</th>
		    <th>Seudonimo</th>
		    <th>Titulo</th>
		    <th>Contenido</th>
		    </tr>";
			while ($var_fila_post=$var_resultado_post->fetch_array()) {
			    echo "<tr>
			    <td>".$var_fila_post["id"]."</td>";
			    echo "<td>".$var_fila_post["seud_p"]."</td>";
			    echo "<td>".$var_fila_post["titulo_p"]."</td>";
			    echo "<td>".$var_fila_post["cont_p"]."</td>";
			    "</tr>";
			}
        }else {
		    echo("No hay registros");
		}

	}else{
        echo"<h3>No se ha podido conectar PHP - MySQL, verifique sus datos.</h3><hr><br>";
	}
    mysqli_close($obj_conexion);
?>