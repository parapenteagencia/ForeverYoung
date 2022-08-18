<header id="header" class="dt-sticky-menu type2"><!-- Header -->

    <div id="logo"><!-- Logo -->

        <a title="Forever Young" href="<?php echo $url?>"><img title="TrendSalon" alt="Logo Forever Young" src="<?php echo $url?>views/img/logo2.png" width="12%"></a>

    </div><!-- End of Logo -->

    <div id="menu-container">

        <div class="container">

            <nav id="main-menu"><!-- Nav - Starts -->

                <div id="dt-menu-toggle" class="dt-menu-toggle">
                    Menu
                    <span class="dt-menu-toggle-icon"></span>
                </div>
                
                <a title="Forever Young" href="<?php echo $url?>" class="sticky-logo"><img title="TrendSalon" alt="Logo Forever Young" id="LogoNav2" src="<?php echo $url?>views/img/prueba/views/img/logo2.png" align="left"></a>

                <ul class="menu">

                    <?php

                        $item = null;
                        $valor = null;

                        $paginas = ControladorPaginas::ctrMostrarPaginas($item, $valor);

                        foreach ($paginas as $key => $value){

                            echo '
                            
                            <li class=""><a data-scroll href="'.$value["ruta"].'">'.$value["nombre"].'</a></li>
                            
                            ';

                        }

                    ?>    
                            
                </ul>

            </nav><!-- End of Nav -->

        </div>

    </div>

</header>
