<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>SAEM</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta name="apple-mobile-Web-app-title" content="RockJS Framework®">
        <meta name="author" content="RockJS Framework®|Focus On Services">
        <meta name="keywords" content="Soporte tecnico,it,ti,soluciones,datacenter,consultoria,centro de datos,empresarial,administracion,proyectos,soporte multimarca, Focus On Services es un proveedor global de servicios con presencia en más de 16 países de Latinoamérica con un amplio portafolio de servicios en Tecnologías de Información y con los mejores tiempos de respuesta de la industria, Software, Desarrollo, app, apps, android, IOS, 
              Transformación digital, Software on demand, Software a la medida, Servicios de desarrollo de software, fabrica de software, Progress, 4GL, ABL, app server, PAS, Servicios Web Síncronos,protocolos REST JSON XML">
        <meta name="description" content="La forma más rápida de adoptar la Transformación Digital">

        <!-- Favicon -->
        <link href="asset/images/favicon.ico" rel="icon">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="asset/css/bootstrap.min.css">

        <!-- JQuery Export datatable csv,excel pdf -->
        <link rel="stylesheet" href="asset/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="asset/css/buttons.dataTables.min.css">
        <style>
            body {
                display: table;
                position: relative;
                background-image: url(asset/images/back.png);
                background-size: cover;
                background-attachment: fixed;
                padding: 0px 0;
                color: #fff;
                width: 100%;
                height: 100vh;
            }
            .panel {
                margin-bottom: 20px;
                background-color: #ffffff5c;
                border: 1px solid transparent;
                border-radius: 4px;
                -webkit-box-shadow: 0 1px 1px rgba(0,0,0,.05);
                box-shadow: 0 1px 1px rgba(0,0,0,.05);
            }
            .panel-default>.panel-heading {
                color: #3873ae;
                background-color: #f5f5f5c2;
                border-color: #ddd;
                text-align: center;
            }

            .tops{
                margin-top: 5em;
                margin-left: auto !important;
                margin-right: auto;

            }
            .loader {
                position: fixed;
                left: 0px;
                top: 0px;
                width: 100%;
                height: 100%;
                z-index: 9999;
                background: url(asset/images/rocket.svg) 50% 50% no-repeat rgb(249,249,249);
                opacity: .8;
            }
        </style>
        <!-- Mopinion Pastea.se  start --><script type="text/javascript">(function () {
                var id = "dgv5vwsnjikgrv85p9cfghbwkjr1fe9vug4";
                var js = document.createElement("script");
                js.setAttribute("type", "text/javascript");
                js.setAttribute("src", "//deploy.mopinion.com/js/pastease.js");
                document.getElementsByTagName("head")[0].appendChild(js);
                var t = setInterval(function () {
                    try {
                        new Pastease.load(id);
                        clearInterval(t)
                    } catch (e) {
                    }
                }, 50)
            })();</script><!-- Mopinion Pastea.se end -->
    </head>
    <body>
        <div class="loader"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-5 center-block" style="margin-left:  auto; margin-right: auto;">
                    <div class="login-panel panel panel-default tops center-block">

                        <div class="panel-heading"><div><img src="asset/images/ucp.png" width="40%"></div>
                            <h3 class="panel-title"></h3><br>
                        </div>
                        <div class="panel-body">
                            <div class="container">
                                <center><h4 style="color: #a90707">Sistema de Administración Escolar Moodle</h4></center>
                                <br>
                                <form role="form" id="contactForm" data-toggle="validator" class="shake" autocomplete="off">
                                    <fieldset>
                                        <div class="form-group">
                                            <label for="usuario" class="text-primary">Usuario</label>
                                            <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Ingrese su usuario" required>
                                            <div class="help-block with-errors text-danger"></div>
                                        </div>
                                        <div class="form-group">
                                            <label for="Password" class="text-primary">Contraseña</label>
                                            <input type="password" class="form-control" id="Password" name="Password" placeholder="Ingrese su Password" required>
                                            <div class="help-block with-errors text-danger"></div>
                                        </div>
                                        <!-- Change this to a button or input when using this as a form -->
                                        <button type="submit" id="form-submit" class="btn btn-primary pull-right float-right">Ingresar</button><br>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <div class="row">
                                <div class="col">
                                    <div id="msgSubmit" class="h4 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>                                    
                            </div>
                            <!--div class="row">
                                <div class="col-sm-6">
                                    <p style="font-size: 10px">¿Olvidó su contraseña? <br>
                                        ¿Está bloqueado su acceso?
                                    </p>
                                </div>
                                <div class="col-sm-6"><a href="#" class="btn-default float-right align-bottom">Haga click aquí</a></div>
                            </div-->
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-12">
                            <img src="asset/images/logo.png" width="15%"></img><br><a href="https://www.focusonservices.com/" target="_blank" class="text-primary">Power by Focus On Services</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>

<div class="clearfix">
    <span class="float-right text-muted">SAEM 1.0.0 <i class="pe-7s-science"></i></span>
</div>
<!-- Side menu JS -->
<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "150px";
        document.getElementById("main").style.marginLeft = "150px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main").style.marginLeft = "0";
    }
</script>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="asset/js/jquery-3.2.1.slim.min.js"></script>
<script src="asset/js/popper.min.js"></script>
<script src="asset/js/bootstrap.min.js"></script>

<!-- JQuery Export datatable csv,excel pdf -->
<script src="asset/js/jquery-1.12.4.js"></script>
<script src="asset/js/jquery.dataTables.min.js"></script>
<script src="asset/js/dataTables.buttons.min.js"></script>
<script src="asset/js/jszip.min.js"></script>
<script src="asset/js/pdfmake.min.js"></script>
<script src="asset/js/vfs_fonts.js"></script>
<script src="asset/js/buttons.html5.min.js"></script>
<script>
    $(document).ready(function () {
        $('#example').DataTable();
    });
</script>
<!-- Loader GIF JS -->
<script type="text/javascript" src="asset/js/loader.js"></script>

<!-- Web Service Login -->
<script src="asset/js/validator.min.js"></script>
<script src="asset/js/form-scripts.js"></script>


</body>
</html>
