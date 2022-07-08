<?php

require_once "../controlador/formulario-controlador.php";
require_once "../modelo/formulario-modelo.php";

//mostrar los datos de la base de datos en formato json



    // $prueba = $_POST["listarTerminacion"];
    // var_dump($prueba);



// $tabla = "terminacion";
// $respuesta = ModeloFormulario::mdlMostrarTerminacion($tabla);


class AjaxFormularios
{



    public $validarEmail;
    public $validarTerminacion;
    public $saveTerminacion;
    

    public function ajaxValidarEmail()
    {

        $item = "email";
        $valor = $this->validarEmail;

        $respuesta = ControladorFormulario::ctrSeleccionarUsuario($item, $valor);
        echo json_encode($respuesta);
    }
    public function ajaxGuardarTerminacion()
    {

        $tabla = "terminacion";
        $valor = $this->saveTerminacion;

        $enviado = ControladorFormulario::ctrIngresarTerminacion($tabla, $valor);
        
        
        echo json_encode($enviado);
        
    }

    //recibir datos json
    public function ajaxTerminacion()
    {
        $tabla = "terminacion";
        // $valor = $this->validarTerminacion;
        $enviado = ControladorFormulario::ctrMostrarTerminacion($tabla);
        echo json_encode($enviado);
        
    }
}


if (isset($_POST["listarTerminacion"])) {

    $listar = new AjaxFormularios();
    $listar->validarTerminacion = $_POST["listarTerminacion"];
    $listar->ajaxTerminacion();
}
if (isset($_POST["guardarTerminacion"])) {

    $guardar = new AjaxFormularios();
    $guardar->saveTerminacion = $_POST["guardarTerminacion"];
    $guardar->ajaxGuardarTerminacion();
}



if (isset($_POST["validarEmail"])) {

    $valEmail = new AjaxFormularios();
    $valEmail->validarEmail = $_POST["validarEmail"];
    $valEmail->ajaxValidarEmail();
}
