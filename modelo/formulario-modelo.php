<?php
    require_once "conexion.php";
    class ModeloFormulario{

        static public function mdlRegistro($tabla, $datos){
            //buscar similutud de correo
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE email = :email");
            $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
            $stmt->execute();
            if($stmt->rowCount() > 0){
                return "existe";
            }else{



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

        static public function mdlLogin($tabla,$columna, $datos){

            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $columna = :$columna");
            
            $stmt->bindParam(":".$columna, $datos, PDO::PARAM_STR);

            $stmt->execute();

            return $stmt->fetch();

            // $stmt->close();
            $stmt = null;

        }


        static public function mdlActualizarIntentos($tabla, $valor, $token){
                
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