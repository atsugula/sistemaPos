<?php

  session_start();

?>
<!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Sistema POS</title>

      <!-- Tell the browser to be responsive to screen width -->
      <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

      <link rel="icon" href="vistas/img/plantilla/icono-negro.png">

      <!--=====================================
                  PLUGINS DE CSS
      ======================================--> 

      <!-- Bootstrap 3.3.7 -->
      <link rel="stylesheet" href="vistas/bower_components/bootstrap/dist/css/bootstrap.min.css">

      <!-- Font Awesome -->
      <link rel="stylesheet" href="vistas/bower_components/font-awesome/css/font-awesome.min.css">

      <!-- Ionicons -->
      <link rel="stylesheet" href="vistas/bower_components/Ionicons/css/ionicons.min.css">

      <!-- Theme style -->
      <link rel="stylesheet" href="vistas/dist/css/AdminLTE.css">

      <!-- AdminLTE Skins. -->
      <link rel="stylesheet" href="vistas/dist/css/skins/_all-skins.min.css">

      <!-- Google Font -->
      <link rel="stylesheet" href="vistas/plugins/PluginsPersonalizados/GoogleFont/googleFont.all.js">

      <!-- DataTables -->
      <link rel="stylesheet" href="vistas/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
      <link rel="stylesheet" href="vistas/bower_components/datatables.net-bs/css/responsive.bootstrap.min.css">

      <!-- iCheck for checkboxes and radio inputs -->
      <link rel="stylesheet" href="vistas/plugins/iCheck/all.css">

      <!-- Daterange picker -->
      <link rel="stylesheet" href="vistas/bower_components/bootstrap-daterangepicker/daterangepicker.css">

      <!-- Morris chart -->
      <link rel="stylesheet" href="vistas/bower_components/morris.js/morris.css">
      
      <!--=====================================
                  PLUGINS DE JAVASCRIPT
      ======================================-->  

      <!-- jQuery 3 -->
        <script src="vistas/bower_components/jquery/dist/jquery.min.js"></script>

        <!-- Bootstrap 3.3.7 -->
        <script src="vistas/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        
        <!-- FastClick -->
        <script src="vistas/bower_components/fastclick/lib/fastclick.js"></script>
        
        <!-- AdminLTE App -->
        <script src="vistas/dist/js/adminlte.min.js"></script>

        <!-- DataTables -->
        <script src="vistas/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="vistas/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
        <script src="vistas/bower_components/datatables.net-bs/js/dataTables.responsive.min.js"></script>
        <script src="vistas/bower_components/datatables.net-bs/js/responsive.bootstrap.min.js"></script>

        <!-- SweetAlert 2 -->
        <script src="vistas/plugins/PluginsPersonalizados/sweetalert2/sweetalert2.all.js"></script>

        <!-- Este es para el error de SweetAlert 2 en el internet explorer -->     

        <script src="vistas/plugins/PluginsPersonalizados/sweetalert2/sweetalert2Error.all.js"></script>

        <!-- iCheck 1.0.1 -->
        <script src="vistas/plugins/iCheck/icheck.min.js"></script>

        <!-- InputMask -->
        <script src="vistas/plugins/input-mask/jquery.inputmask.js"></script>
        <script src="vistas/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
        <script src="vistas/plugins/input-mask/jquery.inputmask.extensions.js"></script>

        <!-- jQuery Number -->
        <script src="vistas/plugins/jQueryNumber/jquerynumber.min.js"></script>

        <!-- daterangepicker http://www.daterangepicker.com/-->
        <script src="vistas/bower_components/moment/min/moment.min.js"></script>
        <script src="vistas/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>

        <!-- Morris.js charts http://morrisjs.github.io/morris.js/-->
        <script src="vistas/bower_components/raphael/raphael.min.js"></script>
        <script src="vistas/bower_components/morris.js/morris.min.js"></script>

        <!-- ChartJS http://www.chartjs.org/-->
        <script src="vistas/bower_components/chart.js/Chart.js"></script>

      <!-- fin jQuery 3 -->
    </head>
    <!--=====================================
                CUERPO DOCUMENTO
    ======================================-->
    <body class="hold-transition sidebar-collapse skin-blue sidebar-mini login-page">

      <?php

      if (isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] == "ok") {

        echo '<div class="wrapper">';
        
        /*=============================================
        CABEZOTE
        =============================================*/

        include "modulos/cabezote.php";

        /*=============================================
        MENU
        =============================================*/

        include "modulos/menu.php";

        /*===========================================================================
        Este es la validacion de la variable ruta para cargar las vistas
        =============================================================================*/
        //isset si esto es null nos carga el login
        if(isset($_GET["ruta"])){
            if($_GET["ruta"]  ==  "inicio"             ||
                $_GET["ruta"] ==  "usuarios"           ||
                $_GET["ruta"] ==  "categorias"         ||
                $_GET["ruta"] ==  "productos"          ||
                $_GET["ruta"] ==  "clientes"           ||
                $_GET["ruta"] ==  "administrarVentas"  ||
                $_GET["ruta"] ==  "crearVentas"        ||
                $_GET["ruta"] ==  "editarVentas"	     ||
                $_GET["ruta"] ==  "reporteVentas"      ||                
            	  $_GET["ruta"] ==  "salir")
            {
                  
                  include "modulos/".$_GET["ruta"].".php";

            }else{

              include "modulos/404.php";
            }

          }else{

            include "modulos/inicio.php";
            
          }


        /*=============================================
                  FOOTER O PIE DE PAGINA
        =============================================*/

        include "modulos/footer.php";

        echo '</div>';
      }else{

        include "modulos/login.php";

      }



      ?>

<script src="vistas/js/plantilla.js"></script>
<script src="vistas/js/usuarios.js"></script>
<script src="vistas/js/categorias.js"></script>
<script src="vistas/js/productos.js"></script>
<script src="vistas/js/clientes.js"></script>
<script src="vistas/js/ventas.js"></script>
<script src="vistas/js/reportes.js"></script>

    </body>
  </html>