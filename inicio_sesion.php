<?php 

session_start(); 

include 'conexion.php';

if (isset($_POST['usuario']) && isset($_POST['contra'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $usuario = validate($_POST['usuario']);

    $contra = validate($_POST['contra']);

    $sql = "SELECT * FROM usuarios WHERE (usuario='$usuario' AND contra='$contra')";

    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) === 1) {

        $row = mysqli_fetch_assoc($result);

        if ($row['usuario'] === $usuario && $row['contra'] === $contra) {

            echo "Logged in!";

            $_SESSION['usuario'] = $row['usuario'];

            $_SESSION['nombre'] = $row['nombre'];

            $_SESSION['id'] = $row['id'];

            header("Location: home.php");

            exit();

        }else{

            header("Location: sesion.php?error=Credenciales incorrectas");

            exit();

        }

    }else{

        header("Location: sesion.php?error=Credenciales incorrectas");

        exit();

    }

    }

else{

    header("Location: home.php");

    exit();

}