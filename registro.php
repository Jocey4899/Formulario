<?php
include("conexion.php");

$nombre = trim($_POST['nombre']);
$institucion = trim($_POST['institucion']);
$grado = trim($_POST['grado']);
$genero = $_POST('genero');
$email = trim($_POST['email']);
$password = trim($_POST['password']);
$fechaRegitro = date("dd/mm/yy");

formulario($nombre, $institucion, $grado, $genero, $email, $password, $fechaRegistro); 
function formulario($nombre, $institucion, $gradoAcademico, $genero, $email, $password, $fechaRegistro){
    global $conexion;
    if(!mysqli_query($conexion, "INSERT INTO datos(nombre, institucion, gradoAcademico, genero, email, password, fechaRegistro); 
    VALUES ('".$nombre."','".$institucion."','".$gradoAcademico."','".$genero."','".$email."','".$password."','".$fechaRegistro."');")){
        echo "Error";
    }
    else 
    {
        echo "Registro completo";
    }
}  
?>
