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
    static public function mdlIngresarTerminacion($tabla)
    {


        // $datos = json_decode($valor, true);
        // print_r($datos);
        // foreach ($valor as $fila) {
        // var_dump($valor);
        // print_r($valor);
        $valor = file_get_contents('../Json/terminacion.json');
        $valorTerminacion = json_decode($valor, true);

        // foreach ($array as $fila) {
        //     $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (`id`, `finca`, `aRecorrida`, `cjsEstimadas`, `c5sm`, `r5sm`, `defecto1`, `valdefecto1`, `blsNacional`, `fruta`) 
        // VALUES (NULL, :finca,:aRecorrida, :cjsEstimadas, :c5sm, :r5sm, :defecto1, :valdefecto1, :blsNacional, NULL);");
        //     $stmt->bindParam(":finca", $fila[0]["finca"], PDO::PARAM_STR);
        //     $stmt->bindParam(":aRecorrida", $fila[0]["aRecorrida"], PDO::PARAM_STR);
        //     $stmt->bindParam(":cjsEstimadas", $fila[0]["cjsEstimadas"], PDO::PARAM_STR);
        //     $stmt->bindParam(":c5sm", $fila[0]["c5sm"], PDO::PARAM_STR);
        //     $stmt->bindParam(":r5sm", $fila[0]["r5sm"], PDO::PARAM_STR);
        //     $stmt->bindParam(":defecto1", $fila[0]["defecto1"], PDO::PARAM_STR);
        //     $stmt->bindParam(":valdefecto1", $fila[0]["valdefecto1"], PDO::PARAM_STR);
        //     $stmt->bindParam(":blsNacional", $fila[0]["blsNacional"], PDO::PARAM_STR);




        //     // $stmt->execute();
        // }
        // $arrayimpro = '{"a":1,"b":2,"c":3,"d":4,"e":5}'; //pruebas

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla ( `id`, `fecha`, `finca`, `arecorrida`, `cjsestimadas`, `pempaca`, 
                                                                    `pcampo`, `cmano`,  `racimoscortados`, `racimosrepicados`, `defectos`,
                                                                    `cjsnal`, `blsnacional`, `klsnacional`, `klspersonal`, `klsfrpiso`, `fruta`)

         VALUES (NULL,  '" . $valorTerminacion[0][0]["fecha"] . "',
                        '" . $valorTerminacion[0][0]["finca"] . "',
                        '" . $valorTerminacion[0][0]["aRecorrida"] . "',
                        '" . $valorTerminacion[0][0]["cjsEstimadas"] . "',
                        '" . $valorTerminacion[0][0]["pEmpaca"] . "',
                        '" . $valorTerminacion[0][0]["pCampo"] . "',
                        '" . $valorTerminacion[0][0]["cMano"] . "',
                        '" . json_encode($valorTerminacion[0][0]["RacimosCortados"]) . "',
                        '" . json_encode($valorTerminacion[0][0]["Repiques"]) . "',
                        '" . json_encode($valorTerminacion[0][0]["Defectos"]) . "',
                        '" . $valorTerminacion[0][0]["cjsNal"] . "',                        
                        '" . $valorTerminacion[0][0]["bolNacional"] . "',                        
                        '" . $valorTerminacion[0][0]["klsNacional"] . "',                        
                        '" . $valorTerminacion[0][0]["klsPersonal"] . "',                        
                        '" . $valorTerminacion[0][0]["klsFrPiso"] . "',                        
                        '" . json_encode($valorTerminacion[0][0]["ArrayTabla"]) . "'
                    
                    
                    );");









        // // $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla ( `id`, `finca`, `aRecorrida`, `cjsEstimadas`, `c5sm`, `r5sm`, `defecto1`, `valdefecto1`, `blsNacional`, `fruta`)
        // //  VALUES (NULL,  '" . $valorTerminacion[0][0]["finca"] . "',
        // //                 '" . $valorTerminacion[0][0]["aRecorrida"] . "',
        // //                 '" . $valorTerminacion[0][0]["cjsEstimadas"] . "',
        // //                 '" . $valorTerminacion[0][0]["RacimosCortados"][0]["sem5"] . "',
        // //                 '" . $valorTerminacion[0][0]["Repiques"][0]["Rsm5"] . "',
        // //                 '" . $valorTerminacion[0][0]["Defectos"][0]["defecto1"] . "',
        // //                 '" . $valorTerminacion[0][0]["Defectos"][0]["valDefecto1"] . "',
        // //                 '" . $valorTerminacion[0][0]["bolNacional"] . "',
        // //                 '" . $valorTerminacion[0][0]["ArrayTabla"][0]["Cod"] . "'








        // //             );");

        // foreach ($array as $fila) {
        if ($stmt->execute()) {
            $fichero = '../Json/terminacion.json';
            $actualJson = file_get_contents($fichero);
            // $actual = json_decode($actualJson,true);
            // $valorDecode = json_decode($valor,true);
            // $actual[] = $valorDecode;
            $actualJson = json_encode(null);

            file_put_contents($fichero, $actualJson);
            return $valorTerminacion;
        } else {
            return "error";
        }
        // $stmt->close();
        $stmt = null;

        // $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla ( `id`, `finca`, `aRecorrida`, `cjsEstimadas`, `c5sm`,
        //                                                             `r5sm`, `defecto1`, `valdefecto1`, `blsNacional`, `fruta`) 
        //  VALUES (NULL,  '" . $valorTerminacion[0][0]["finca"] . "',
        //                 '" . $valorTerminacion[0][0]["aRecorrida"] . "',
        //                 '" . $valorTerminacion[0][0]["cjsEstimadas"] . "',
        //                 '" . $valorTerminacion[0][0]["RacimosCortados"][0]["sem5"] . "',
        //                 '" . $valorTerminacion[0][0]["Repiques"][0]["Rsm5"] . "',
        //                 '" . $valorTerminacion[0][0]["Defectos"][0]["defecto1"] . "',
        //                 '" . $valorTerminacion[0][0]["Defectos"][0]["valDefecto1"] . "',
        //                 '" . $valorTerminacion[0][0]["bolNacional"] . "',
        //                 '" . $valorTerminacion[0][0]["ArrayTabla"][0]["Cod"] . "');");


        // // foreach ($array as $fila) {
        // if ($stmt->execute()) {
        //     return $valorTerminacion;


        // } else {
        //     return "error";
        // }
        // // $stmt->close();
        // $stmt = null;






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
