<?php
session_start();


class ControladorFormulario
{

    static public function ctrRegistro()
    {

        if (isset($_POST["registroEmail"])) {

            if (preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["registroEmail"])&&
                preg_match('/^[a-zA-Z0-9]+$/', $_POST["registroContraseña"])&&
                preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/',$_POST["registroNombre"])){
           
                $token = md5($_POST["registroEmail"].$_POST["registroContraseña"]);
                $tabla = "usuario";
                $datos = array(
                    "token" => $token,
                    "nombre" => $_POST["registroNombre"],
                    "email" => $_POST["registroEmail"],
                    "password" => $_POST["registroContraseña"]
                );

                $respuesta = ModeloFormulario::mdlRegistro($tabla, $datos);
                return $respuesta;
            } else {
                
                $respuesta = "specialCharacters";
                return $respuesta;
            }
        }
    }

    public function ctrLogin()
    {

        if (isset($_POST["loginEmail"])) {

            $tabla = "usuario";
            $columna = "email";
            $datos = $_POST["loginEmail"];

            $respuesta = ModeloFormulario::mdlLogin($tabla, $columna, $datos);
            // print_r($respuesta); 

            if ($respuesta["email"] == $_POST["loginEmail"] && $respuesta["password"] == $_POST["loginContraseña"]) {


                $_SESSION["validar"] = "ok";



                echo '<script>
                if (window.history.replaceState) {
                    window.history.replaceState(null, null, window.location.href);
                }

                window.location = "../index.php?pagina=inicio";



          </script>';
            } else {
                echo '<script>
                if (window.history.replaceState) {
                    window.history.replaceState(null, null, window.location.href);
                }
          </script>';

                echo  "<div class='alert alert-danger'>
                  <strong>¡Error al ingresar!</strong> Usuario o email no coincide.
                </div>";
            }
        }
    }
}
