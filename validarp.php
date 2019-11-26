<?php
function validar(): int{ 
    $seud = $_POST['seudonimo'];
	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
	$escuela_t = $_POST['escuela_t'];
	$pass = $_POST['pass'];
        if(empty($nombre)){
            echo "<p class='error'> * Agrega tu nombre completo</p>";
        }else{
            $n=1;
        }
        if(empty($seud)){
            echo "<p class='error'> * Agrega un seudonimo</p>";
        }else{
            $n=$n+1;
        }
        if(empty($email)){
            echo "<p class='error'> * Agrega tu correo electronico</p>";
        }else{
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                echo "<p class='error'> * El correo es incorrecto</p>";
            }else{
                include("consulta.php");
                $filas = &compararEmail();
                if($filas==0){
                    $n=$n+1;
                }else {
                    echo "<p class= 'error'> *El correo proporcionado ya se encuentra registrado </p>";
                }
            }
        }
        if(empty($escuela_t)){
            echo "<p class='error'> * Agrega el nombre de la escuela donde trabajas</p>";
        }else{
            $n=$n+1;
        }
        if(empty($pass)){
            echo "<p class='error'> * Agrega una contraseña</p>";
        }else{
            $n=$n+1;
            if (strlen($pass)<5){
                echo "<p class='error'> * La contraseña tiene que tener mas de 4 caracteres</p>";
            }else{
                $n=$n+1;
            }
        }
    return $n;
}
 ?>