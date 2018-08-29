<?php
require "../../../sistema/conexion.php";

class Articulos{

    public static function validar($params=array()){

        global $conn;

        $sql = "SELECT * FROM t_usuarios WHERE correo='".$params['correo']."' AND password= '".$params['pass']."' ";
        $result = $conn->query($sql);

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()) {
                $id = $row['id_usuario'];
                $correo = $row['correo'];
                $pass = $row['password'];
            }

            return array('status'=>'1', 'msg'=>'Correcto!', 'id'=>$id, 'correo'=>$correo, 'pass'=>$pass);
            // return array('status'=>'1', 'id'=>$id, 'correo'=>$correo, 'pass'=>$pass, 'result'=>$result, 'sql'=>$sql);
        } else {

            return array('status'=>'2', 'msg'=>'Incorrecto!');

        }

        $conn->close();

    }

    public static function registrar($params=array()){

        $fecha_actual = date("Y-m-d h:i:s");
        global $conn;

        $sql = "insert INTO t_productos
                VALUES (
                	'',
                	'".$params['nombrep']."',
                	'',
                	'".$params['preciop']."',
                	'".$params['fotop']."',
                	'1',
                	'".$fecha_actual."'
                )";
        $result = $conn->query($sql);

        if ($result == true){
            return array('status'=>'1', 'msg'=>'Correcto','result'=>$result);
        } else {
            return array('status'=>'1', 'msg'=>'No se pudo','result'=>$result);
        }



        $conn->close();

    }

}

?>
