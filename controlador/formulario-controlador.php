<?php 
    class ControladorFormulario{
            
            static public function ctrRegistro(){
                
                if (isset($_POST["registroEmail"])) {
                    
                    $tabla = "usuario";
                    $datos = array("email"=>$_POST["registroEmail"],
                                   "password"=>$_POST["registroContraseña"]);
                    
                    $respuesta = ModeloFormulario::mdlRegistro($tabla, $datos);
                    return $respuesta;
                }



            }
    }