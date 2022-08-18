<footer id="footer">

<div class="hr-invisible"></div>

    <div class="footer-widgets-wrapper">

        <div class="container">

            <div class="column dt-sc-one-fourth first">
            
                <aside class="widget widget_text">

                    <h4 class="widgettitle"> Nuestra Ubicación </h4>

                    <div class="dt-sc-contact-info address">

                        <p>
                            Paseo Tulum, Local 7, <br>
                            Plaza Paseo Playacar,<br>
                            Playacar Fase II<br>
                            Playa del Carmen, Q.Roo.
                            
                        </p> 

                    </div>

                    <div class="hr-invisible-very-very-small"></div>

                    <h4 class="widgettitle"> Teléfono </h4>

                    <div class="dt-sc-contact-info">

                        <a href="tel:9842591220"><p class="dt-sc-clr num"> (984) 259 1220</p></a>

                    </div>

                </aside>

            </div>

            <div class="column dt-sc-one-sixth">

                <aside class="widget widget_text">

                    <h4 class="widgettitle"> Mapa </h4>

                    <div class="textwidget">

                    <ul>

                        <?php

                        $item = null;
                        $valor = null;

                        $paginas = ControladorPaginas::ctrMostrarPaginas($item, $valor);

                        foreach ($paginas as $key => $value){

                            echo '
                            
                            <li class=""><a href="'.$value["ruta"].'">'.$value["nombre"].'</a></li>
                            
                            ';

                        }

                        ?>

                    </ul>                        

                    </div>     

                </aside>

            </div>

            <div class="column dt-sc-one-fourth">
                    
                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fforeveryoungplayacar%2F&tabs=timeline&width=340&height=250&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=968900439942122" width="340" height="250" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>

            </div>

            <div class="column dt-sc-one-third">
                
                <!-- InstaWidget -->

                <a href="https://instawidget.net/v/user/foreveryoungplayacar" id="link-c5eb9be6f68fb4bc3357583655018864b124b6937f9da54003bc09abc197a5a3">@foreveryoungplayacar</a>
                
                <script src="https://instawidget.net/js/instawidget.js?u=c5eb9be6f68fb4bc3357583655018864b124b6937f9da54003bc09abc197a5a3&width=250px"></script>

            </div>   

        </div>

        <div class="hr-invisible-medium"></div>

    </div>

    <div class="copyright">

        <div class="container">
            <p>Copyright © 2019 Forever Young Playacar todos los derechos reservados | Desarrollado por <a href="http://parapenteagencia.com/" target="blank"><span>Parapente Agencia Digital</span></a></p>
        </div>

    </div>

</footer>