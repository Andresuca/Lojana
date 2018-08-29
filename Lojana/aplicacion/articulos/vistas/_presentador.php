<?php
require '../modelo/articulos.php';

switch ($_REQUEST['xaction']) {
    case 'validar':
        $response = Login::validar($_REQUEST['datas']);
        return print_r(json_encode($response));

        $_SESSION['lojana']['usuario'] = $response;
        // $_SESSION['lojana']['usuario']['id_usuario'] = $response['id'];

    break;

    case 'registrar':
        $response = Articulos::registrar($_REQUEST['datas']);
        print_r(json_encode($response));
    break;
}

?>
