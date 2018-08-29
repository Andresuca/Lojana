<?php
session_start();
require "../../../sistema/conexion.php";
require "../../../sistema/add.php";

$xaction = "registrar";

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Lojana</title>
    </head>
    <body>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
        Registro
      </button>

      <!-- The Modal -->
      <div class="modal fade" id="myModal">
        <div class="modal-dialog">
          <div class="modal-content">
            <!-- Modal body -->
            <div class="modal-body" style="background-color: #a4173f">
              <div class="container">
              <div class="row">
                <div class="col-sm-6">
                  <h1 class="modal-title" style="color: #fff">¡Hola!</h1>
                </div>
                <div class="col-sm-6">
                  <button type="button" class="close" style="color: #fff" data-dismiss="modal">cerrar</button>
                </div>
              </div>

                <div class="row">
                  <div class="col-sm-12"><input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre"></div>
                </div>
                <div class="row">
                  <div class="col-sm-12"><input type="text" class="form-control" name="apellidos" id="apellidos" placeholder="Apellido"></div>
                </div>
                <div class="row">
                  <div class="col-sm-12"><input type="mail" class="form-control" name="correo" id="correo" placeholder="email"></div>
                </div>
                <div class="row">
                  <div class="col-sm-12"><input type="password" class="form-control" name="pass" id="pass" placeholder="Contraseña"></div>
                </div>
                <div class="row">
                  <div class="col-sm-12"><input type="password" class="form-control" name="txtpassconf" placeholder="Confirma tu contraseña"></div>
                </div><br>
                <div class="row">
                  <div class="col-sm-12" align="center">
                    <button type="button" onclick="login.registrar({xaction:'<?php echo $xaction; ?>',nombre:$('#nombre').val(),apellidos:$('#apellidos').val(),correo:$('#correo').val(),pass:$('#pass').val()});" class="btn btn-light" data-dismiss="modal"><h4 style="color: #a4173f">¡Regístrate!</h4></button>
                  </div>
                </div>
            </div>


            <!-- Modal footer
            <div class="modal-footer" align="center">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div> -->

          </div>
        </div>
      </div>
    </body>
</html>

<script>
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
});


</script>
<style type="text/css">
input[type="text"], textarea {

  background-color : #a4173f;
  border: none;
  border-bottom: 2px solid #fff;

}
input[type="mail"], textarea {

  background-color : #a4173f;
  border: none;
  border-bottom: 2px solid #fff;

}
.colorrosa {
  background-color: #a4173f;
  color: #fff;
}

</style>
