<?php

require_once "../controlador/formulario-controlador.php";
require_once "../modelo/formulario-modelo.php";


class AjaxFormularios{



    public $validarEmail;

    public function ajaxValidarEmail(){

        $item = "email";
        $valor = $this->validarEmail;

        $respuesta = ControladorFormulario::ctrSeleccionarUsuario($item, $valor);
        echo json_encode($respuesta);




    }





}






if (isset($_POST["validarEmail"])) {

    $valEmail = new AjaxFormularios();
    $valEmail -> validarEmail = $_POST["validarEmail"];
    $valEmail -> ajaxValidarEmail();




    
}
