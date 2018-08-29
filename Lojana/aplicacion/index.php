<?php
session_start();
require "../sistema/conexion.php";
require "../sistema/add.php";
// print_r($_SESSION); 

?>

<html lang="en" dir="ltr">

<head>

    <meta charset="utf-8">
    <title>Lojana</title>

</head>

<body background="../recursos/img/leafff.png" style="background-repeat: no-repeat; background-size: 70% 20%; background-position:0 5%">

    <div class="container">
    	<div align="right" class="row" style="height: 50px;">
    		<div class="col-sm-6"></div>
    		<div class="col-sm-6" style="line-height: 50px; color: rgba(172,21,63)">LLÁMANOS &bull; 01800LOJANAINFUSION &nbsp;
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalR">
                  Registro
                </button>
                 |
                 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalL">
                   Login
                 </button>
                  <i class="fas fa-shopping-cart"></i></div>
    	</div>

        <!-- The Modal  -->
        <!-- <div class="modal fade" id="myModalR">
          <div class="modal-dialog">
            <div class="modal-content"> -->
              <!-- Modal body -->
              <!-- <div class="modal-body" style="background-color: #a4173f">
                <div class="container">
                <div class="row">
                  <div class="col-sm-6">
                    <h1 class="modal-title" style="color: #fff">¡Hola!</h1>
                  </div>
                  <div class="col-sm-6">
                    <button type="button" class="close" style="color: #fff" data-dismiss="modal">Cerrar</button>
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
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-sm-12" align="center">
                      <button type="button" onclick="login.registrar({xaction:'<?php echo $xaction; ?>',nombre:$('#nombre').val(),apellidos:$('#apellidos').val(),correo:$('#correo').val(),pass:$('#pass').val()});" class="btn btn-light" data-dismiss="modal"><h4 style="color: #a4173f">¡Regístrate!</h4></button>
                    </div>
                  </div>
              </div>

            </div>
          </div>
        </div>
    </div> -->

        <!-- The Modal -->
        <!-- <form id="form_login">
            <div class="modal fade" id="myModalL">
              <div class="modal-dialog">
                <div class="modal-content"> -->
                  <!-- Modal body -->
                  <!-- <div class="modal-body" style="background-color: #a4173f">
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
                        <div class="col-sm-12"><input type="text" class="form-control" id="txtapellido" name="txtapellido" placeholder="Contraseña"></div>
                      </div>
                      <br>
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
      </form> -->

    	<div class="contaier">
            <div>

    		<div class="row rosita" style="height: 100px;"></div>
    		<div class="row rosita" align="center">
    			<div class="col-sm-12" style="height: 100px; " align="center">
    				<!--<h2 class="letras" style="line-height: 100px">Lojana</h2>-->
    				<img src="../recursos/img/logo2.png" style="line-height: 100px" class="img-responsive">
    			</div>
    		</div>
    		<div class="row rosita" >
    			<div class="col-sm-1 rosita border-right"  style="border-color: #eec3d1"></div>
    			<div class="col-sm-1 rosita border-top"  style="border-color: #eec3d1"></div>
    			<div class="col-sm-8 rosita letras"  align="center">
    				<p align="justify">Lojana, es una infusión de fáil preparación elaborada por la Aosciación Agroartesanal de Productores de Plantas Secas y Medicinales del Ecuador (APPSME) producida en la zona ecuatoriana, concretamente de la provincia de Loja -de ahí su nombre- de consumo diario ya sea fría o caliente que con su exlusiva mezcla de más de: 20 hierbas medicinales. </p>
    				<p>Cedrón, Hierbaluisa, albaca, toronjil, menta, manzanilla, llantén, cola de caballo, entre otras.</p>
    			</div>
    			<div class="col-sm-1 rosita border-top border-bottom"  style="border-color: #eec3d1; border-bottom: 3px"></div>
    			<div class="col-sm-1 rosita border-left"  style="border-color: #eec3d1"></div>
    		</div>
    		<div class="row rosita" style="height: 50px" >
    			<div class="col-sm-1 rosita"  style="border-color: white"></div>
    			<div class="col-sm-1 rosita border-top"  style="border-color: white"></div>
    			<div class="col-sm-8 rosita"  align="center"></div>
    			<div class="col-sm-1 rosita"  style="border-color: white"></div>
    			<div class="col-sm-1 rosita"  style="border-color: white"></div>
    		</div>
    		<div class="row" align="center">
    			<div class="col-sm-1 rosita">

    			</div>
    			<div class="col-sm-10 border img-fluid" style="height: 300px; background-image:url('../recursos/img/hik.jpg'); background-repeat: no-repeat; background-size: cover; opacity: 0.5" align="left">
    				<h3 class="letras" style="line-height: 50px">PRODUCTO</h3><br>
    				<h5 style="color: rgba(172,21,63)">Beneficios <i class="fas fa-leaf"></i></h5><br>
    				<ul class="list-group" style="color: rgba(100,21,63);">
    				  <li class="list-group" >Fácil preparación</li>
    				  <li class="list-group">Hidratación en el uso cotidiano</li>
    				  <li class="list-group">Antiinflamatorio estomacal</li>
    				  <li class="list-group">Diurético, Digestiva, Energetizante</li>
    				  <li class="list-group">Tónico cerebral - Antiestrés</li>
    				  <li class="list-group">Ayuda a bajar los índices de grasa</li>
    				</ul>
    			</div>
    			<div class="col-sm-1 rosita">

    			</div>
    		</div>
            <!-- <img src="../recursos/img/inicio.jpg" style="z-index: -1;"> -->
        </div>
    		<div class="row rosita" style="height: 100px;">
    			<div class="col-sm-12">
    				<div class="row">
    					<div class="col-xs-1 col-sm-12" align="center">
    						<img src="../recursos/img/hojas.png">
    					</div>
    				</div>
    			</div>
    		</div>
    		<div class="row" style="height: 50px"></div>
    		<div class="row" align="right" style="background-image:url('../recursos/img/drink.jpeg'); background-repeat: no-repeat; background-size:auto;">
    			<div class="col-sm-12" style="height: 380px;" align="left">
    				<h5 style="line-height: 150px">PREPARACIÓN</h5>
    				<h5 style="color: #eec3d1">PORCIÓN &nbsp;1LT <i class="fas fa-leaf"></i></h5>
    				<ul class="list-group letras">
    				  <li class="list-group">Hierva el litro de agua y vacíe el contenido del sobre</li>
    				  <li class="list-group">Deje reposar por 5 minutos</li>
    				  <li class="list-group">Añada jugo de limón, miel o azúcar (al gusto)</li>
    				  <li class="list-group">Sirva caliente o fría*</li>
    				  <li class="list-group">&nbsp;</li>
    				  <li class="list-group">*En caso de tomarse frío endulce antes de tomarlo</li>
    				</ul>
    			</div>
    		</div>
    		<div class="row" style="height: 80px"></div>
    	</div>
    </div>

    <div style="margin:70px;">

        <div class="row">
            <div class="col-8">
                <div class="row mh1 lojana-title lojana-color">
                    <div class="col-12 lojana-title">INFUSIÓN</div>
                </div>
                <div class="row mh1 lojana-title lojana-color">
                    <div class="col-12 lojana-title">........</div>
                </div>
                <div class="row mh1">
                    <div class="col-12 lojana-subtitle">¿Qué es la infusión?</div>
                </div>
            </div>
            <div class="col-4">
                <div class="row">
                    <div class="col-sm-12"><img class="img-responsive" src="../recursos/img/seeds.jpg" alt="Seeds" height="80%" width="100%"></div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-9 lojana-text">
                Una infusión es una bebida obtenida de las hojas, las flores, las raíces, las cortezas, los frutos o las semillas de ciertas hierbas y plantas, que pueden ser aromáticas o no.</br>
                </br>
                Aunque los pétalos de la flor son rojos, cuando se secan toman un tinte característico de tonalidades violetas.</br>
                Esto otirga al té unas tonalidades que van desde el rojo al color rubí o uva. El té o agua de Jamaica es amargom se toma habitualmente endulzado. El sabor es muy semejante al de los arándanos.
            </div>
            <div class="col-3">
                <img src="../recursos/img/bracket.png" alt="Bracket" height="100%">
            </div>
        </div>

        <br>
        <br>
        <br>

        <div class="row">
            <div class="col-4">
                <img src="../recursos/img/bolsa.jpg" alt="Bolsa" height="100%" width="100%">
            </div>
            <div class="col-8" style="border-top:2px solid; border-bottom:2px solid; border-color:#AC153F;">
                <div class="row mh2">
                    <div class="col-12 lojana-title lojana-color">
                        LOJANA
                    </div>
                    <div class="col-12 lojana-color" style="font-size:20px; font-weight: bold;">
                        DESCRIPCIÓN
                    </div>
                    <div class="col-12 lojana-text">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="col-4 lojana-color" style="font-size:18px; font-weight: bold;">
                        COMPRAR
                    </div>
                    <div class="col-4 lojana-color" style="font-size:18px; font-weight: bold;">
                        CANTIDAD
                    </div>
                    <div class="col-4">
                        <div class="col-12">
                            <button class="btn btn-lg lojana-button" type="button" name="pagar" id="pagar" onclick="compras.guardar({emp1k:$('#emp1k').val(),xaction:'guardar'})">PAGAR</button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 lojana-text">
                        Empaque de 1k
                    </div>
                    <div class="col-4 lojana-color">
                        <select class="form-control" style="width:25%" id="emp1k" name="emp1k">
                            <option>0</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 lojana-text">
                        Empaque de 500 gms.
                    </div>
                    <div class="col-4 lojana-color">
                        <select class="form-control" style="width:25%">
                            <option>0</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 lojana-text">
                        Empaque de 325 gms.
                    </div>
                    <div class="col-4 lojana-color">
                        <select class="form-control" style="width:25%">
                            <option>0</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <br>
        <br>
        <br>

        <div class="row">
            <div class="col-4">
                <img src="../recursos/img/beverage2.jpg" alt="Bebida" height="100%" width="100%">
            </div>
            <div class="col-8">

                <div class="row lojana-color lojana-title">
                    ESCRIBENOS
                </div>
                <div class="row lojana-color lojana-title">
                    .......
                </div>
                <div class="row lojana-subtitle">
                    Queremos conocer tus inquietudes
                </div>

                <br>
                <br>

                <!--Formulario-->
                <div class="row">
                    <div class="col-6">
                        <input type="text" name="_nombre" placeholder="Nombre">
                    </div>
                    <div class="col-6">
                        <input type="text" name="_ciudad" placeholder="Ciudad">
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="col-6">
                        <input type="text" name="_correo" placeholder="Correo electrónico">
                    </div>
                    <div class="col-6">
                        <input type="text" name="_puesto" placeholder="Puesto">
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="col-6">
                        <input type="text" name="_celular" placeholder="Teléfono celular">
                    </div>
                    <div class="col-6">
                        <input type="text" name="_area" placeholder="Área de interés">
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="col-6">
                        <input type="text" name="_telefono" placeholder="Teléfono oficina">
                    </div>
                    <div class="col-6">
                        <input type="text" name="_sector" placeholder="Sector al que pertenece">
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="col-6">
                        <input type="text" name="_empresa" placeholder="Empresa">
                    </div>
                    <div class="col-6">
                        <input type="text" name="_medio" placeholder="Medio por el que se enteró de nosotros">
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="col-12 lojana-color">
                        Comentarios
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="col-6">
                        <textarea name="comentarios" rows="8" cols="50"></textarea>
                    </div>
                    <div class="col-6">
                        <button class="btn bnt-lg lojana-button" type="button" name="enviar">Enviar</button>
                    </div>
                </div>
                <!-------------------------------------------------------------->

            </div>
        </div>

        <br>

        <div class="row">
            <div class="col-12">
                <img src="../recursos/img/footer.jpg" alt="Footer" width="100%">
            </div>
        </div>

    </div>

    <div id='overlay'></div>
    <div id='modal'>
        <div id='content'>No JavaScript Yet!</div>
        <a href='#' id='close'>close</a>
    </div>

</body>

</html>

<script>
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModalL").modal();
    });

    $("#myBtn").click(function(){
        $("#myModalR").modal();
    });
});
</script>
