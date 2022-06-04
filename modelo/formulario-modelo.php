<?php
    require_once "conexion.php";
    class ModeloFormulario{

        static public function mdlRegistro($tabla, $datos){


            $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre, email, password) VALUES (:nombre, :email, :password)");

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

        static public function mdlLogin($tabla,$columna, $datos){

            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $columna = :$columna");
            
            $stmt->bindParam(":".$columna, $datos, PDO::PARAM_STR);

            $stmt->execute();

            return $stmt->fetch();

            // $stmt->close();
            $stmt = null;

        }




    }