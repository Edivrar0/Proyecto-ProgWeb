<?php
include("conexion.php");

$id = null;
    $nombre = $_POST["nombre"];
    $usuario = $_POST["usuario"];
    $contra = $_POST["contra"];
    $tel = $_POST["tel"];
    $email = $_POST["email"];
    $direccion = $_POST["direccion"];

$sql = "insert into usuarios (nombre, usuario, contra, tel, email, direccion) values ('$nombre', '$usuario', '$contra','$tel','$email', '$direccion')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: home.php");
}else{

}

?>