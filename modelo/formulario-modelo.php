<?php
    require_once "conexion.php";
    class ModeloFormulario{

        static public function mdlRegistro($tabla, $datos){


            $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(email, password) VALUES (:email, :password)");

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