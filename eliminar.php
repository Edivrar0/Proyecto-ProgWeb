<?php

include("conexion.php");

$id=$_GET["id"];

$sql = "delete from usuarios where id=$id";
$con->query($sql);
$con->close();

header("location: home.php");

?>