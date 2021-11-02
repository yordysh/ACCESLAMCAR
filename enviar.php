<?php
    $destino= "yordysh28@gmail.com";
    $message= $_POST['message'];
    $correo= $_POST['correo'];
    $contenido=  "Correo: ".$correo. "\nMensaje: " .$message;
    mail($destino,"Contacto",$contenido);
    header("location:index.html");
?>