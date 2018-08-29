<?php
require '../modelo/login.php';

switch ($_REQUEST['xaction']) {
    case 'validar':
        $response = Login::validar($_REQUEST['datas']);
        // print_r(json_encode($response));

        // $_SESSION['lojana']['usuario'] = $response;
        $_SESSION['lojana']['usuario']['sesion_iniciada'] = 1;
        $_SESSION['lojana']['usuario']['id_usuario'] = $response['id'];
        $_SESSION['lojana']['usuario']['correo'] = $response['correo'];

        // print_r(json_encode($_SESSION));
        return $_SESSION;

    break;

    case 'registrar':
        $response = Login::registrar($_REQUEST['datas']);
        print_r(json_encode($response));
    break;
}

?>
