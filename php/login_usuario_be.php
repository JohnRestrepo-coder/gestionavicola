<?php
    include 'conexion_be.php';
    $correo =$_POST['correo'];  //Captura el correo
    $contrasena=$_POST['contrasena'];   //captura la contrase


    $validar_login= mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' and contrasena ='$contrasena'");
    if (mysqli_num_rows($validar_login)>0){
        header("Location: ../menu.html");
        exit;
    }else{
        echo '
        <script>
        alert("Usuario o Contraseña incorrecta");
        window.location="../index.html";
        </script>';
        exit; 
    }
    

 ?> 