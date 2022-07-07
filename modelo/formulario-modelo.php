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
    static public function mdlIngresarTerminacion($tabla, $valor)
    {
        //decodificar json

        $terminacion_ = json_decode($valor, true);
        foreach ($terminacion_ as $terminacion) {

            $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (`finca`, `aRecorrida`, `cjsEstimadas`, `c5sm`, `r5sm`, `defecto1`, `valdefecto1`, `blsNacional`, `fruta`) 
        VALUES (':finca','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]') ");
            $stmt->bindParam(":finca", $terminacion["finca"], PDO::PARAM_STR);
            $stmt->bindParam(":aRecorrida", $terminacion["aRecorrida"], PDO::PARAM_STR);
            $stmt->bindParam(":cjsEstimadas", $terminacion["cjsEstimadas"], PDO::PARAM_STR);
            $stmt->bindParam(":c5sm", $terminacion["c5sm"], PDO::PARAM_STR);
            $stmt->bindParam(":r5sm", $terminacion["r5sm"], PDO::PARAM_STR);
            $stmt->bindParam(":defecto1", $terminacion["defecto1"], PDO::PARAM_STR);
            $stmt->bindParam(":valdefecto1", $terminacion["valdefecto1"], PDO::PARAM_STR);
            $stmt->bindParam(":blsNacional", $terminacion["blsNacional"], PDO::PARAM_STR);
            $stmt->bindParam(":fruta", $terminacion["fruta"], PDO::PARAM_STR);
            $stmt->execute();
        }
        
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
