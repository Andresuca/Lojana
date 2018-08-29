<?php
session_start();
require "../../../sistema/conexion.php";
require "../../../sistema/add.php";

$xaction = "validar";

print_r($_SESSION);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Lojana</title>

        <style type="text/css">
        input[type="text"], textarea {

          background-color : #a4173f;
          border: none;
          border-bottom: 2px solid #fff;
          text-align:center;
          font-size: 30px;
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

    </head>
    <body>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
        Login
      </button>

      <!-- The Modal -->
      <form id="form_login">
          <div class="modal fade" id="myModal">
            <div class="modal-dialog">
              <div class="modal-content">
                <!-- Modal body -->
                <div class="modal-body" style="background-color: #a4173f">
                  <div class="container">
                  <div class="row">
                    <div class="col-sm-12" align="center">
                      <h1 class="modal-title" style="color: #fff; font-size: 100px"><i class="fas fa-user-circle"></i></h1>
                    </div>
                  </div>
                    <div class="row">
                      <div class="col-sm-12"><input type="text" class="form-control input-lg" id="txtnombre" name="txtnombre" placeholder="Correo"></div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12"><input type="password" class="form-control" id="txtapellido" name="txtapellido" placeholder="Contraseña"></div>
                    </div><br>
                    <div class="row">
                      <div class="col-sm-12" align="center">
                        <button type="submit" onclick="login.validar({correo:$('#txtnombre').val(),pass:$('#txtapellido').val(),xaction:'<?php echo $xaction; ?>'})" class="btn btn-light" data-dismiss="modal"><h4 style="color: #a4173f">Ingresar</h4></button>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6" style="color: #fff">
                        <input type="checkbox" name="txtrecordar"> Recuérdame
                      </div>
                      <div class="col-sm-6" align="right">
                        <a href="#"><u>Olvidé mi contraseña</u></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </form>

    </body>
</html>

<script>
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
});
</script>
