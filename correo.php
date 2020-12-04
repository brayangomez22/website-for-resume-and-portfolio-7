<?php

$destinario = 'gomezmancobrayanalexander@gmail.com';
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

$asunto = "Enviado desde la pagina de BamWeb";
$mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre;

mail($destinario, $asunto, $telefono, $mensajeCompleto);
echo "<script>alert('Correo enviado exitosamente')</script>";
echo "<script> setTimeout(\"location.href='inicio.html'\",1000)</script>";

?>