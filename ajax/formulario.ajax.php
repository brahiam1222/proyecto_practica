<?php

require_once "../controlador/formulario-controlador.php";
require_once "../modelo/formulario-modelo.php";


class AjaxFormularios
{



    public $validarEmail;
    public $validarTerminacion;

    public function ajaxValidarEmail()
    {

        $item = "email";
        $valor = $this->validarEmail;

        $respuesta = ControladorFormulario::ctrSeleccionarUsuario($item, $valor);
        echo json_encode($respuesta);
    }

    //recibir datos json
    public function ajaxTerminacion()
    {
        
        $valor = $this->validarTerminacion;
        $enviado = ControladorFormulario::ctrIngresarTerminacion($valor);
        echo json_encode($enviado);
    }



}


if (isset($_POST["jsonTerminacion"])) {

    $jsTerminacion = new AjaxFormularios();
    $jsTerminacion->validarTerminacion = $_POST["jsonTerminacion"];
    $jsTerminacion->ajaxTerminacion();
}



if (isset($_POST["validarEmail"])) {

    $valEmail = new AjaxFormularios();
    $valEmail->validarEmail = $_POST["validarEmail"];
    $valEmail->ajaxValidarEmail();
}
