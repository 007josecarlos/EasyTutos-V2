<?php
require_once ("dataSource.php");
require_once(__DIR__."/../entidad/usuario.php");
class UsuarioDAO{
    function registrarUsuario($Usuario){
        $usuario = $Usuario->getNombreUsuario();
        $contraseña = $Usuario->getContraseña();
        $nombre = $Usuario->getNombre();
        $apellido = $Usuario->getApellido(); 
        $telefono = $Usuario->getTelefono();
        $tipo = $Usuario->getIdTipoUsuario();
        $usuarioRegistrado = new Usuario(NULL, $usuario, $contraseña, $nombre, $apellido, $telefono, $tipo) ;
        $consulta = "INSERT INTO usuarios (username, contraseña, nombre, apellido, telefono, tipo) 
                     VALUES('$usuario', '$contraseña', '$nombre', '$apellido', '$telefono', '$tipo')";

        $conexionAux=conexionSqli();
        $verificarUsuario=mysqli_query($conexionAux, "SELECT * FROM usuarios WHERE username='$usuario'");
        mysqli_close($conexionAux);
        
        if(mysqli_num_rows($verificarUsuario) > 0){
            return null;
        }
        $conexionInsertar=conexionSqli();
        mysqli_query($conexionInsertar, $consulta);
        if(mysqli_affected_rows($conexionInsertar)>0){
            mysqli_close($conexionInsertar);
            return $usuarioRegistrado;  
        }
        mysqli_close($conexionInsertar);
        
    }
    function autenticarUsuario($email, $contraseña){
        $consulta = "SELECT * FROM usuarios WHERE username ='$email'";
        $conexion = conexionSqli();
        $consultaLogin = mysqli_query($conexion, $consulta);
        mysqli_close($conexion);
        $usuario = null;
        $usuarioConsul = null;
        if(mysqli_num_rows($consultaLogin) == 1){
            $usuarioConsul = mysqli_fetch_row($consultaLogin);
            $validarContraseña = password_verify($contraseña, $usuarioConsul[2]);
            if($validarContraseña){
                $usuario = new Usuario(
                $usuarioConsul[0],
                $usuarioConsul[1],
                $usuarioConsul[2],
                $usuarioConsul[3],
                $usuarioConsul[4],
                $usuarioConsul[5],
                $usuarioConsul[6],
            );
            }
        }
        return $usuario;
    }
}
?>