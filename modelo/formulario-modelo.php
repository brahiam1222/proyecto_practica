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

    //mostrar terminacion
    static public function mdlMostrarTerminacion($tabla)
    {
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
        $stmt->execute();
        return $stmt->fetchAll();

        // $stmt->close();
        $stmt = null;
    }
    //ingresar datos en la base de datos
    static public function mdlIngresarTerminacion($tabla, $valor)
    {


        // $datos = json_decode($valor, true);
        // print_r($datos);
        // foreach ($valor as $fila) {
            var_dump($valor);
            print_r($valor);
            $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (`id`, `finca`, `aRecorrida`, `cjsEstimadas`, `c5sm`, `r5sm`, `defecto1`, `valdefecto1`, `blsNacional`, `fruta`) 
        VALUES (NULL, 'md', '400', '21', '33', '56', '108', '10', '216', NULL);");
            // $stmt->bindParam(":finca", $fila["finca"], PDO::PARAM_STR);
            // $stmt->bindParam(":aRecorrida", $fila["aRecorrida"], PDO::PARAM_INT);
            // $stmt->bindParam(":cjsEstimadas", $fila["cjsEstimadas"], PDO::PARAM_INT);
            // $stmt->bindParam(":c5sm", $fila["c5sm"], PDO::PARAM_INT);
            // $stmt->bindParam(":r5sm", $fila["r5sm"], PDO::PARAM_INT);
            // $stmt->bindParam(":defecto1", $fila["defecto1"], PDO::PARAM_STR);
            // $stmt->bindParam(":valdefecto1", $fila["valdefecto1"], PDO::PARAM_INT);
            // $stmt->bindParam(":blsNacional", $fila["blsNacional"], PDO::PARAM_INT);

            // $stmt->execute();
            if ($stmt->execute()) {
                
                return $valor->{"data"};
                
                
            } else {
                return "error";
            }
            // $stmt->close();
            $stmt = null;
        





        // $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
        // $stmt->execute();
        // return $stmt->fetchAll();
        // // $stmt->close();
        // $stmt = null;
    }


    static public function mdlSeleccionarUsuario($tabla, $item, $valor)
    {
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

        $stmt->bindParam(":" . $item, $valor, PDO::PARAM_STR);

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
