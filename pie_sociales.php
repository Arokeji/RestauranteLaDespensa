<div style='position: absolute; top: 0px; right: 0px; z-index: 99;'>
	<a href='#'  onmouseover="document.images['Trabaja'].src = 'imagenes/trabaja2.png'" onmouseout="document.images['Trabaja'].src = 'imagenes/trabaja.png'"><img src='imagenes/trabaja.png' name='Trabaja'/></a>
</div>

<div id='barra_pie'>
    <div id='contenedor_twitter'>
    	<!-- TWITTER WIDGET -->
        <div id='twitter_tenedor'>
            <img src="imagenes/twitter.png" alt="" />
        </div>
        <div id='twitter_box'>
            <div style='position: relative; float: left; width: 5px; height: 28px; background:url(imagenes/box_01.png) no-repeat;'></div>
            <div class='tweet'></div>
            <div style='position: relative; float: left; width: 5px; height: 28px; background:url(imagenes/box_03.png) no-repeat;'></div>
        </div>			
        <!-- /TWITTER WIDGET -->
    </div>
    <div id='redes_sociales'>
         <div id='brillo_sociales'>
            <div id='central_sociales'>
            	
                <div id='logo_facebook'>
                    <img src="imagenes/facebook.png" alt="Facebook" />
                </div>
                <p>
                    Si te gust&oacute; La Despensa &uacute;nete a nuestro <a href="http://www.facebook.com/#!/pages/Restaurante-La-Despensa/121639747898423">Facebook</a> para estar al tanto de las &uacute;ltimas novedades: 
            <iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.facebook.com%2F%23%21%2Fpages%2FRestaurante-La-Despensa%2F121639747898423&amp;layout=standard&amp;show_faces=true&amp;width=450&amp;action=like&amp;font=arial&amp;colorscheme=dark&amp;height=80" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:680px; height:80px;" allowTransparency="true"></iframe>
                </p>
				<div id='opiniones_detalles_izq'>
                	Opiniones:
                </div>
                <div id='opiniones_detalles_der'>
                	<a href='opinar.php' rel="nofollow">Escribe tu opini&oacute;n</a>
                </div>
                <br/>
				<center>
                    <ul id="testimonials">
                    	<?
							$cantidad = 0;
							$valoracion = 0;
							$opiniones_sql = mysql_query("SELECT * FROM opiniones ORDER BY id DESC",$link);
                        	while($opinion = mysql_fetch_array($opiniones_sql)){
								$cantidad += 1;
								$valoracion = $valoracion + $opinion['valoracion'];
								echo "<li class='slide' style='display: none'>
                            <blockquote>'".utf8_encode($opinion['opinion'])."' por <strong>".utf8_encode($opinion['nombre']). "</strong></blockquote></li>";
							}
                        ?>
                    
                        <li class="slide">
                            <blockquote>Nuestros clientes nos han puntuado y hemos obtenido <? echo round($valoracion/$cantidad,1); ?> puntos sobre 5.</blockquote>
                        </li>
                    </ul>
                </center>
            </div>
         </div>
    </div>
</div><!--cierra la capa de la barra pie-->