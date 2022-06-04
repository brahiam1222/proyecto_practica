<?php 
    class ControladorFormulario{
            
            static public function ctrRegistro(){
                
                if (isset($_POST["registroEmail"])) {
                    
                    $tabla = "usuario";
                    $datos = array("nombre"=>$_POST["registroNombre"],
                                   "email"=>$_POST["registroEmail"],
                                   "password"=>$_POST["registroContraseña"]);
                    
                    $respuesta = ModeloFormulario::mdlRegistro($tabla, $datos);
                    return $respuesta;
                }



            }
    }