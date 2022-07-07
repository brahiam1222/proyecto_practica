<?php
require_once "conexion.php";
class ModeloFormulario
{

    static public function mdlRegistro($tabla, $datos)
    {
        //buscar similutud de correo
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE email = :email");
        $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            return "existe";
        } else {



            $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(token, nombre, email, password) VALUES (:token, :nombre, :email, :password)");

            $stmt->bindParam(":token", $datos["token"], PDO::PARAM_STR);
            $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
            $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
            $stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);

            if ($stmt->execute()) {

                return "ok";
            } else {

                return "error";
            }

            // $stmt->close();
            $stmt = null;
        }
    }
    //ingresar datos en la base de datos
    static public function mdlIngresarTerminacion($tabla, $item, $valor)
    {
        //decodificar json

        $terminacion_ = json_decode($valor, true);
        // foreach ($terminacion_ as $terminacion) {
        //     $terminacion = $v;
        // }
        

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla VALUES ");
        $stmt->bindParam(":terminacion", $valor, PDO::PARAM_STR);
        if ($stmt->execute()) {
            return "ok";
        } else {
            return "error";
        }
        // $stmt->close();
        $stmt = null;
    }


    static public function mdlSeleccionarUsuario($tabla, $item, $valor)
    {
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

        $stmt->bindParam(":" .$item, $valor, PDO::PARAM_STR);

        $stmt->execute();

        return $stmt->fetch();
        
    }




    static public function mdlLogin($tabla, $columna, $datos)
    {

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $columna = :$columna");

        $stmt->bindParam(":" . $columna, $datos, PDO::PARAM_STR);

        $stmt->execute();

        return $stmt->fetch();

        // $stmt->close();
        $stmt = null;
    }


    static public function mdlActualizarIntentos($tabla, $valor, $token)
    {

        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET intentos = :intentos WHERE token = :token");

        $stmt->bindParam(":intentos", $valor, PDO::PARAM_INT);
        $stmt->bindParam(":token", $token, PDO::PARAM_STR);

        if ($stmt->execute()) {

            return "ok";
        } else {

            return "error";
        }

        // $stmt->close();
        $stmt = null;
    }
}
