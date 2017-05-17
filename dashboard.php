<?php

session_start();

  // Validamos que exista una session y ademas que el cargo que exista sea igual a 1 (Administrador)
if(!isset($_SESSION['cargo'])) {
    /*
      Para redireccionar en php se utiliza header,
      pero al ser datos enviados por cabereza debe ejecutarse
      antes de mostrar cualquier informacion en el DOM es por eso que inserto este
      codigo antes de la estructura del html, espero haber sido claro
    */
      header('location: index.php');
  }


  ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <title>Dashboard | Dashboard</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/icons/favicon.ico">
    <link rel="apple-touch-icon" href="images/icons/favicon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/icons/favicon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/icons/favicon-114x114.png">
    <!--Loading bootstrap css-->
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700">
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700,300">
    <link type="text/css" rel="stylesheet" href="styles/jquery-ui-1.10.4.custom.min.css">
    <link type="text/css" rel="stylesheet" href="styles/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="styles/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="styles/animate.css">
    <link type="text/css" rel="stylesheet" href="styles/all.css">
    <link type="text/css" rel="stylesheet" href="styles/main.css">
    <link type="text/css" rel="stylesheet" href="styles/style-responsive.css">
    <link type="text/css" rel="stylesheet" href="styles/zabuto_calendar.min.css">
    <link type="text/css" rel="stylesheet" href="styles/pace.css">
    <link type="text/css" rel="stylesheet" href="styles/jquery.news-ticker.css">
</head>
<body onload="mueveReloj()">
    <div>

        <!--BEGIN BACK TO TOP-->
        <a id="totop" href="#"><i class="fa fa-angle-up"></i></a>
        <!--END BACK TO TOP-->
        <!--BEGIN TOPBAR-->
        <div id="header-topbar-option-demo" class="page-header-topbar">
            <nav id="topbar" role="navigation" style="margin-bottom: 0;" data-step="3" class="navbar navbar-default navbar-static-top">
                <div class="navbar-header">
                    <button type="button" data-toggle="collapse" data-target=".sidebar-collapse" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                    <a id="logo" href="dashboard.php" class="navbar-brand"><span class="fa fa-rocket"></span><span class="logo-text">Titan</span><span style="display: none" class="logo-text-icon">µ</span></a></div>
                    <div class="topbar-main"><a id="menu-toggle" href="#" class="hidden-xs"><i class="fa fa-bars"></i></a>
                        
                        <form id="topbar-search" action="" method="" class="hidden-sm hidden-xs">
                            <div class="input-icon right text-white"><a href="#"><i class="fa fa-search"></i></a><input type="text" placeholder="Search here..." class="form-control text-white"/></div>
                        </form>
                        <ul class="nav navbar navbar-top-links navbar-right mbn">
                            <li class="dropdown"><a data-hover="dropdown" href="#" class="dropdown-toggle"><i class="fa fa-bell fa-fw"></i><span class="badge badge-green">3</span></a>
                                
                            </li>
                            <li class="dropdown"><a data-hover="dropdown" href="#" class="dropdown-toggle"><i class="fa fa-envelope fa-fw"></i><span class="badge badge-orange">7</span></a>
                                
                            </li>
                            <li class="dropdown"><a data-hover="dropdown" href="#" class="dropdown-toggle"><i class="fa fa-tasks fa-fw"></i><span class="badge badge-yellow">8</span></a>
                                
                            </li>
                            <li class="dropdown topbar-user"><a data-hover="dropdown" href="#" class="dropdown-toggle"><img src="images/avatar/48.jpg" alt="" class="img-responsive img-circle"/>&nbsp;<span class="hidden-xs"><?php echo ucfirst($_SESSION['nombre']); ?></span>&nbsp;<span class="caret"></span></a>
                                <ul class="dropdown-menu dropdown-user pull-right">
                                    <li><a href="#"><i class="fa fa-user"></i>Mi Perfil</a></li>
                                    <li><a href="controller/cerrarSesion.php"><i class="fa fa-key"></i>Cerrar Sesión</a></li>
                                </ul>
                            </li>
                            <li id="topbar-chat" class="hidden-xs"><a href="javascript:void(0)" data-step="4" data-intro="&lt;b&gt;Form chat&lt;/b&gt; keep you connecting with other coworker" data-position="left" class="btn-chat"><i class="fa fa-comments"></i><span class="badge badge-info">3</span></a></li>
                        </ul>
                    </div>
                </nav>
                
            </div>
            <!--END TOPBAR-->
            <div id="wrapper">
                <!--BEGIN SIDEBAR MENU-->
                <nav id="sidebar" role="navigation" data-step="2" data-intro="Template has &lt;b&gt;many navigation styles&lt;/b&gt;"
                data-position="right" class="navbar-default navbar-static-side">
                <div class="sidebar-collapse menu-scroll">
                    <ul id="side-menu" class="nav">
                        
                       <div class="clearfix"></div>
                       <li class="active"><a href="dashboard.php"><i class="fa fa-desktop fa-fw">
                        <div class="icon-bg bg-orange"></div>
                    </i><span class="menu-title">Escritorio</span></a>
                </li>
                <li><a href="clientes.php"><i class="fa fa-users">
                    <div class="icon-bg bg-pink"></div>
                </i><span class="menu-title">Clientes</span></a>
                
            </li>
            <li><a href="paquetes.php"><i class="fa fa-th-list fa-fw">
                <div class="icon-bg bg-green"></div>
            </i><span class="menu-title">Paquetes</span></a>
            
        </li>
        <li><a href="presupuesto.php"><i class="fa fa-edit fa-fw">
            <div class="icon-bg bg-violet"></div>
        </i><span class="menu-title">Presupuesto</span></a>
        
    </li>
    <li><a href="contratacion.php"><i class="fa fa-briefcase">
        <div class="icon-bg bg-blue"></div>
    </i><span class="menu-title">Contratación</span></a>
    
</li>
<?php if ($_SESSION['cargo'] == 1) { ?>
<li><a href="gestionusuarios.php"><i class="fa fa-user">
    <div class="icon-bg bg-red"></div>
</i><span class="menu-title">Gestión de Usuarios</span></a>

</li>
<?php } ?>     
</ul>
</div>
</nav>
<!--END SIDEBAR MENU-->
<!--BEGIN CHAT FORM-->
<div id="chat-form" class="fixed">
    <div class="chat-inner">
        <h2 class="chat-header">
            <a href="javascript:;" class="chat-form-close pull-right"><i class="glyphicon glyphicon-remove">
            </i></a><i class="fa fa-user"></i>&nbsp; Chat &nbsp;<span class="badge badge-info">3</span></h2>
            <div id="group-1" class="chat-group">
                <strong>Favorites</strong><a href="#"><span class="user-status is-online"></span> <small>
                Verna Morton</small> <span class="badge badge-info">2</span></a><a href="#"><span
                class="user-status is-online"></span> <small>Delores Blake</small> <span class="badge badge-info is-hidden">
                0</span></a><a href="#"><span class="user-status is-busy"></span> <small>Nathaniel Morris</small>
                <span class="badge badge-info is-hidden">0</span></a><a href="#"><span class="user-status is-idle"></span>
                <small>Boyd Bridges</small> <span class="badge badge-info is-hidden">0</span></a><a
                href="#"><span class="user-status is-offline"></span> <small>Meredith Houston</small>
                <span class="badge badge-info is-hidden">0</span></a></div>
                <div id="group-2" class="chat-group">
                    <strong>Office</strong><a href="#"><span class="user-status is-busy"></span> <small>
                    Ann Scott</small> <span class="badge badge-info is-hidden">0</span></a><a href="#"><span
                    class="user-status is-offline"></span> <small>Sherman Stokes</small> <span class="badge badge-info is-hidden">
                    0</span></a><a href="#"><span class="user-status is-offline"></span> <small>Florence
                    Pierce</small> <span class="badge badge-info">1</span></a></div>
                    <div id="group-3" class="chat-group">
                        <strong>Friends</strong><a href="#"><span class="user-status is-online"></span> <small>
                        Willard Mckenzie</small> <span class="badge badge-info is-hidden">0</span></a><a
                        href="#"><span class="user-status is-busy"></span> <small>Jenny Frazier</small>
                        <span class="badge badge-info is-hidden">0</span></a><a href="#"><span class="user-status is-offline"></span>
                        <small>Chris Stewart</small> <span class="badge badge-info is-hidden">0</span></a><a
                        href="#"><span class="user-status is-offline"></span> <small>Olivia Green</small>
                        <span class="badge badge-info is-hidden">0</span></a></div>
                    </div>
                    <div id="chat-box" style="top: 400px">
                        <div class="chat-box-header">
                            <a href="#" class="chat-box-close pull-right"><i class="glyphicon glyphicon-remove">
                            </i></a><span class="user-status is-online"></span><span class="display-name">Willard
                            Mckenzie</span> <small>Online</small>
                        </div>
                        <div class="chat-content">
                            <ul class="chat-box-body">
                                <li>
                                    <p>
                                        <img src="images/avatar/128.jpg" class="avt" /><span class="user">John Doe</span><span
                                        class="time">09:33</span></p>
                                        <p>
                                            Hi Swlabs, we have some comments for you.</p>
                                        </li>
                                        <li class="odd">
                                            <p>
                                                <img src="images/avatar/48.jpg" class="avt" /><span class="user">Swlabs</span><span
                                                class="time">09:33</span></p>
                                                <p>
                                                    Hi, we're listening you...</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="chat-textarea">
                                            <input placeholder="Type your message" class="form-control" /></div>
                                        </div>
                                    </div>
                                    <!--END CHAT FORM-->
                                    <!--BEGIN PAGE WRAPPER-->
                                    <div id="page-wrapper">
                                        <!--BEGIN TITLE & BREADCRUMB PAGE-->
                                        <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                                            <div class="page-header pull-right">
                                                <div class="page-title">
                                                    
                                                   <form name="form_reloj"> 
                                                    <input class="reloj" readonly=true type="text" name="reloj" size="10"> 
                                                </form> 
                                            </div>
                                        </div>
                                        <ol class="breadcrumb page-breadcrumb pull-left">
                                            <li><i class="fa fa-home"></i>&nbsp;<a href="dashboard.php">Escritorio</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                                            <li class="hidden"><a href="#">Escritorio</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                                            <li class="active">Escritorio</li>
                                        </ol>
                                        <div class="clearfix">
                                        </div>
                                    </div>
                                    <!--END TITLE & BREADCRUMB PAGE-->
                                    <!-- RELLENO -->
                                    <!-- <img src="images/logo.png" alt="" class="img-responsive center-block"> -->
                                    <!-- <img src="http://www.pngmart.com/files/3/Vector-Transparent-PNG.png" alt="" style="width: 100%; opacity: .25;" class="img-responsive center-block"> -->
                                    <!-- <img src="images/1.jpg" alt="" style="width: 100%; opacity: .25;" class="img-responsive center-block"> -->
                                    <!-- <img src="images/2.jpg" alt="" style="width: 100%; opacity: .25;" class="img-responsive center-block"> -->
                                    <img src="images/3.png" alt="" style="width: 100%; opacity: .25;" class="img-responsive center-block">
                                    
                                    <!-- FIN DE RELLENO -->
                                    <!--BEGIN FOOTER -->
                                    <div id="footer">
                                        <div class="copyright">
                                            <a href="http://secretariaunefalara.com.ve" target="_blank">2017 © Titan - Sistema de gestion de clientes</a></div>
                                        </div>
                                        <!--END FOOTER-->
                                    </div>
                                    <!--END PAGE WRAPPER-->
                                </div>
                            </div>
                            <script src="script/jquery-1.10.2.min.js"></script>
                            <script src="script/jquery-migrate-1.2.1.min.js"></script>
                            <script src="script/jquery-ui.js"></script>
                            <script src="script/bootstrap.min.js"></script>
                            <script src="script/bootstrap-hover-dropdown.js"></script>
                            <script src="script/html5shiv.js"></script>
                            <script src="script/respond.min.js"></script>
                            <script src="script/jquery.metisMenu.js"></script>
                            <script src="script/jquery.slimscroll.js"></script>
                            <script src="script/jquery.cookie.js"></script>
                            <script src="script/icheck.min.js"></script>
                            <script src="script/custom.min.js"></script>
                            <script src="script/jquery.news-ticker.js"></script>
                            <script src="script/jquery.menu.js"></script>
                            <script src="script/pace.min.js"></script>
                            <script src="script/holder.js"></script>
                            <script src="script/responsive-tabs.js"></script>
                            <script src="script/jquery.flot.js"></script>
                            <script src="script/jquery.flot.categories.js"></script>
                            <script src="script/jquery.flot.pie.js"></script>
                            <script src="script/jquery.flot.tooltip.js"></script>
                            <script src="script/jquery.flot.resize.js"></script>
                            <script src="script/jquery.flot.fillbetween.js"></script>
                            <script src="script/jquery.flot.stack.js"></script>
                            <script src="script/jquery.flot.spline.js"></script>
                            <script src="script/zabuto_calendar.min.js"></script>
                            <script src="script/index.js"></script>
                            <!--LOADING SCRIPTS FOR CHARTS-->
                            <script src="script/highcharts.js"></script>
                            <script src="script/data.js"></script>
                            <script src="script/drilldown.js"></script>
                            <script src="script/exporting.js"></script>
                            <script src="script/highcharts-more.js"></script>
                            <script src="script/charts-highchart-pie.js"></script>
                            <script src="script/charts-highchart-more.js"></script>
                            <!--CORE JAVASCRIPT-->
                            <script src="script/main.js"></script>
                            <script>        (function (i, s, o, g, r, a, m) {
                                i['GoogleAnalyticsObject'] = r;
                                i[r] = i[r] || function () {
                                    (i[r].q = i[r].q || []).push(arguments)
                                }, i[r].l = 1 * new Date();
                                a = s.createElement(o),
                                m = s.getElementsByTagName(o)[0];
                                a.async = 1;
                                a.src = g;
                                m.parentNode.insertBefore(a, m)
                            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
                            ga('create', 'UA-145464-12', 'auto');
                            ga('send', 'pageview');


                        </script>
                        <script language="JavaScript"> 

                            function mueveReloj(){ 
                                momentoActual = new Date() 
                                hora = momentoActual.getHours() 
                                minuto = momentoActual.getMinutes() 


                                ap = (hora < 12) ? " AM" : " PM";
                                hora = (hora == 0) ? 12 : hora;
                                hora = (hora > 12) ? hora - 12 : hora;

                                str_minuto = new String (minuto) 
                                if (str_minuto.length == 1) 
                                    minuto = "0" + minuto 

                                str_hora = new String (hora) 
                                if (str_hora.length == 1) 
                                    hora = "0" + hora 

                                horaImprimible = hora + " : " + minuto + ap

                                document.form_reloj.reloj.value = horaImprimible 

                                setTimeout("mueveReloj()",15000) 
                            } 
                        </script> 

                    </body>
                    </html>
