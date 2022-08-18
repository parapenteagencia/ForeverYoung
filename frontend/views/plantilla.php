<?php

    /*=============================================
    =            Ruta del proyecto          =
    =============================================*/

    $url = Ruta::ctrRuta();

?>

<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" class="no-js"> <!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">	
    <!--[if lt IE 9]> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
    
	<title>Forever Young Playacar</title> 
	
	<meta name="description" content="">
	<meta name="author" content="">
    
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->    
	<!--[if lte IE 8]>
		<script type="text/javascript" src="http://explorercanvas.googlecode.com/svn/trunk/excanvas.js"></script>
	<![endif]-->
    
    <!-- **Favicon** -->
    <link rel="shortcut icon" href="<?php echo $url?>views/img/favicon.png" type="image/x-icon" />
    
    <!-- **CSS - stylesheets** -->
    <link id="default-css" href="<?php echo $url?>views/css/style.css" rel="stylesheet" media="all" />
    <link href="<?php echo $url?>views/css/shortcode.css" rel="stylesheet" type="text/css" />
 
    <!-- **Additional - stylesheets** -->
    <link rel="stylesheet" href="<?php echo $url?>views/css/responsive.css" type="text/css" media="all"/>
    <link href="<?php echo $url?>views/css/animations.css" rel="stylesheet" media="all" />
    <link id="skin-css" href="<?php echo $url?>views/skins/red/style.css" rel="stylesheet" media="all" />
    <link rel="stylesheet" href="<?php echo $url?>views/css/meanmenu.css" type="text/css" media="all"/>
    <link rel="stylesheet" type="text/css" href="<?php echo $url?>views/css/pace-theme-loading-bar.css" />
        
    <!-- **Font Awesome** -->
    <link rel="stylesheet" href="<?php echo $url?>views/css/font-awesome.min.css">
    
    <!-- **Google - Fonts** -->
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,300,700,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=PT+Serif:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    
    <!--[if IE 7]>
    <link rel="stylesheet" href="css/font-awesome-ie7.min.css" />
    <![endif]-->
    
    <!-- jQuery -->
    <script src="<?php echo $url?>views/js/modernizr.custom.js"></script>
    
</head>

<body>


<div class="wrapper"><!-- Wrapper -->

    <div class="inner-wrapper"><!-- Inner-Wrapper -->
        
        <?php

            /*=============================================
            =            NAV          =
            =============================================*/

            include "modulos/nav.php";

                /*==============================================
                =             Contenido dinamico                =
                ==============================================*/
                
                $rutas = array();
                $ruta = null;
                $infoPropiedad = null;

                if(isset($_GET["ruta"])){

                    $rutas = explode("/", $_GET["ruta"]);

                    $item = "ruta";
                    $valor = $rutas[0];

                        /*==============================================
                        =       URL´s Amigables de paginas        =
                        ==============================================*/

                        $rutaPaginas = ControladorPaginas::ctrMostrarPaginas($item, $valor);

                        if($rutas[0] == $rutaPaginas["ruta"]){

                            $ruta = $rutas[0];

                        }

                        /*==============================================
                        =  Lista blanca de  URL´s Amigables (Páginas que se muestran) =
                        ==============================================*/

                        // Forma 1 con switch

                        switch ($ruta) {

                            case 'index':
                                include "modulos/index.php";
                                break;

                            case 'servicios':
                                include "modulos/servicios.php";
                                break; 
                                
                            case 'blog':
                                include "modulos/blog.php";
                                break;

                            case 'contacto':
                                include "modulos/contacto.php";
                                break;

                            case 'bodas':
                                include "modulos/bodas.php";
                                break;
                            
                            default:
                                include "modulos/404.php";
                                break;

                        }

                        // Forma 2 con If

                        /*if($ruta == "index"){

                            include "modulos/index.php";
                          
                        }else if($ruta == "servicios"){

                            include "modulos/servicios.php";

                        }else if($ruta == "blog"){

                            include "modulos/blog.php";

                        }else if($ruta == "contacto"){

                            include "modulos/contacto.php";

                        }else{
              
                            include "modulos/404.php";
              
                        }*/


                }else{

                    // Página index por defecto

                    include "modulos/index.php";
          
                }

            
            /*=============================================
            =            Chat Messenger          =
            =============================================*/

            include "modulos/messenger.php";

            /*=============================================
            =            Footer          =
            =============================================*/

            include "modulos/footer.php";

        ?>

    </div><!-- End of Inner-Wrapper -->
</div><!-- End of Wrapper -->
  
<!-- **jQuery** -->    
<script src="<?php echo $url?>views/js/jquery-1.11.2.min.js"></script>
<script src="<?php echo $url?>views/js/jquery.parallax-1.1.3.js" type="text/javascript"></script>  
<script type="text/javascript" src="<?php echo $url?>views/js/jquery.sticky.min.js"></script>         
<script src="<?php echo $url?>views/js/jquery.inview.js" type="text/javascript"></script>
<script src="<?php echo $url?>views/js/jsplugins.js" type="text/javascript"></script>
<script src="<?php echo $url?>views/js/jquery.meanmenu.min.js" type="text/javascript"></script>
<script src="http://maps.google.com/maps/api/js?sensor=false&key=AIzaSyB_WhejKZf7-5dwx15qF4cWKaDlYz5VtvE"></script>
<script src="<?php echo $url?>views/js/jquery.gmap.min.js"></script>
<script src="<?php echo $url?>views/js/custom.js"></script>
<script src="<?php echo $url?>views/js/smooth-scroll.min.js"></script>
<script src="<?php echo $url?>views/js/botonesservicios.js"></script>
<script>
      smoothScroll.init({
      selector: '[data-scroll]', // Selector for links (must be a class, ID, data attribute, or element tag)
      selectorHeader: null, // Selector for fixed headers (must be a valid CSS selector) [optional]
      speed: 600, // Integer. How fast to complete the scroll in milliseconds
      easing: 'easeInOutCubic', // Easing pattern to use
      offset: 0, // Integer. How far to offset the scrolling anchor location in pixels
      callback: function ( anchor, toggle ) {} // Function to run after scrolling
      });
</script>

</body>
</html>