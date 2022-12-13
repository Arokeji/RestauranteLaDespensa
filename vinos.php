<?
	//Archivo que incluye el proceso de conexión
	include("conexion.php");
	$link=conectarse();
?>

<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Restaurante La Despensa</title>

	<link href="favicon.ico" type="image/x-icon" rel="shortcut icon" />
	<link rel="stylesheet" href="supersized.css" type="text/css" media="screen" />
    
	
	<script language="javascript" type="text/javascript" src="js/jquery.js"></script>
    <script language="javascript" type="text/javascript" src="js/example.js"></script>
    <script language="javascript" type="text/javascript" src="js/jquery.color-RGBa-patch.js"></script>
    <script language="javascript" type="text/javascript" src="js/flexi-background-jquery.js"></script>
    <script language="javascript" type="text/javascript" src="js/jquery.tweet.js"></script>
    <script language="javascript" type="text/javascript" src="js/galleria.js"></script>
	
	<script language="javascript">
	
    $(document).ready(function(){
        $('#testimonials .slide');
        setInterval(function(){
            $('#testimonials .slide').filter(':visible').fadeOut(4000,function(){
                if($(this).next('li.slide').size()){
                    $(this).next().fadeIn(1000);
                }
                else{
                    $('#testimonials .slide').eq(0).fadeIn(1000);
                }
            });
        },10000);	
    });	
    </script> 
    
	<script type="text/javascript">	
		
		$(document).ready(function(){
			$(".tweet").tweet({
				username: "ladespensacadiz",
				join_text: "auto",
				avatar_size: 18,
				count: 1,
				auto_join_text_default: ": ",
				auto_join_text_ed: "",
				auto_join_text_ing: "",
				auto_join_text_reply: "responde: ",
				auto_join_text_url: "",
				loading_text: "Tweet!"
			});
		});
		
		
		
	</script>    

	<link rel="stylesheet" href="css/flexi-background.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/estilos.css" type="text/css" media="screen" />

	<style type="text/css">
	
		body { 
			background-image: url(imagenes/background5.jpg); 
		}
		
		*{
			margin:0; /*Magic Line lo necesita aqui*/
			padding:0;
		}
		
		/*
			MAGIC LINE CSS
		*/
		
		
		.group:after { visibility: hidden; display: block; font-size: 0; content: " "; clear: both; height: 0; }
		*:first-child+html .group { zoom: 1; } /* IE7 */
		
		#example-one { margin: 0 auto; list-style: none; position: relative; }
		#example-one li { display: inline;}
		#example-one li a { color: white; display: block; float: left; padding: 6px 10px 4px 10px; text-decoration: none;}
		#example-one li a:hover { color: #FC6; }
		#magic-line { position: absolute; bottom: -7px; left: 0; width: 100px; height: 2px; background: white; }
		
		.current_page_item a{ color: white; }
		
	</style>
</head>

<body>

<div id='page'>
	<div id='menu_barra'>
    	<div id='contenido_menu'>
        	<div id='logo_menu'>
            	<img src="imagenes/logo.png" alt=''/> 
            </div>
            <!-- Aqui el menu magic line -->
 			<div id='listado-magic-menu'>
            	<ul class="group" id="example-one">
                    <li><a href="index.php">Principal</a></li>
                    <li><a href="carta.php">Carta</a></li>
                    <li class="current_page_item"><a href="vinos.php">Vinos</a></li>
                    <li><a href="contacto.php">Localizaci&oacute;n y contacto</a></li>
                </ul>
            </div>
            <!-- Fin del menu magic line-->
        </div>
    </div>
	<div id="linea_central">
        <div id='contenido_central'>    
            <div id='vacio_central'>
            </div>
            <p>
            	En La Despensa ofrecemos los mejores vinos de las mejores cosechas.
            </p>
            <br/><br/><br/><br/><br/><br/><br/><br/><br/>
            
            <div id="galeria"> 
                <img src="imagenes/v01.jpg" title="Beronia" /> 
                <img src="imagenes/v02.jpg" title="Moët & Chandon" /> 
                <img src="imagenes/v03.jpg" title="Waltread" /> 
                <img src="imagenes/v04.jpg" title="200 monges" /> 
                <img src="imagenes/v05.jpg" title="Matarromera" />
                <img src="imagenes/v06.jpg" title="Taberner" />
                <img src="imagenes/v07.jpg" title="Cortijo Los Aguilares" />
                <img src="imagenes/v08.jpg" title="Marqués de Arienzo" />
            </div>
            
                <script>
					Galleria.loadTheme('themes/classic/galleria.classic.js');
					$('#galeria').galleria({
						height:400
					});
				</script>
            
            	<div class='titulo_menu'>CAVAS</div>
            
            	<dl>
                    <dt>
                          <strong>1/2 Botella Juve Camps Cinta Púrpura Brut 12% vol.</strong>
                          <span>9,00 &euro;</span>
                    </dt>
                    <dd><!--Aqui la descripcion--></dd>
                    
                    <dt>
                          <strong>Juve Camps Brut Rose (Pinot Noir) 12% vol.</strong>
                          <span>19,00 &euro;</span>
                    </dt>
                    <dd><!--Aqui la descripcion--></dd>
                    
                    <dt>
                          <strong>Juve Camps Reserva Familiar (Xarel, Macabeo, Perellada) 11,5% vol.</strong>
                          <span>20,00 &euro;</span>
                    </dt>
                    <dd><!--Aqui la descripcion--></dd>
                    
        		</dl>
                
                <div class='titulo_menu'>CHAMPAGNE</div>
                
                <dl>
                    <dt>
                          <strong>Moêt % Chandon</strong>
                          <span>36,00 &euro;</span>
                    </dt>
                    <dd><!--Aqui la descripcion--></dd>
                    
                    <dt>
                          <strong>1/2 Botella Moët & Chandon Brut Impérial</strong>
                          <span>28,00 &euro;</span>
                    </dt>
                    <dd><!--Aqui la descripcion--></dd>
                    
                </dl>
                
                <div class='titulo_menu'>VINOS BLANCOS</div>
                
                <div class='titulo_menu' style='text-align: left; font-size:12px;'>D.O. Rias Baixas</div>
                
                <dl>
                    <dt>
                          <strong>Granbazan Ambar 100% Albariño 12,5% vol.</strong>
                          <span>22,00 &euro;</span>
                    </dt>
                    <dd><!--Aqui la descripcion--></dd>
                    
                    <dt>
                          <strong>Albariño Pazo de Señorans 100% Albariño 13% vol.</strong>
                          <span>18,00 &euro;</span>
                    </dt>
                    <dd><!--Aqui la descripcion--></dd>
                    
                </dl>
                
                <div class='titulo_menu' style='text-align: left; font-size:12px;'>D.O. Navarra</div>
                
                <dl>
                    <dt>
                          <strong>Gran Feudo Blanco Joven 2008 (100% Chardonay) Bod. Julian Chivite 12% vol.</strong>
                          <span>9,60 &euro;</span>
                    </dt>
                    <dd><!--Aqui la descripcion--></dd>
                    
                    <dt>
                          <strong>Marqués de Riscal cos. 2009 Bod. Hderos Marqués de Riscal (100% Sauvignon) 12% vol.</strong>
                          <span>13,00 &euro;</span>
                    </dt>
                    <dd><!--Aqui la descripcion--></dd>
                    
                    <dt>
                          <strong>Mantel Blanco cos. 2008 Bod. Alvarez y Diez (100% verdejo) 12,5% vol.</strong>
                          <span>13,00 &euro;</span>
                    </dt>
                    <dd><!--Aqui la descripcion--></dd>
                    
                </dl>
                
                <div class='titulo_menu' style='text-align: left; font-size:12px;'>D.O. Penedés</div>
                
                <dl>
                    <dt>
                          <strong>Natureo SIN ALCOHOL Bod.Torres.C.09 (100% Muscat) 0,5%</strong>
                          <span>11,00 &euro;</span>
                    </dt>
                    <dd><!--Aqui la descripcion--></dd>
                    
                    <dt>
                          <strong>San Valentin cos 2009 Bod. Torres (100% Parellada) 10,5% vol.</strong>
                          <span>9,40 &euro;</span>
                    </dt>
                    <dd><!--Aqui la descripcion--></dd>
                    
                    <dt>
                          <strong>Viña Sol cos. 2009 Bod. Torres (100% Parellada) 11% vol.</strong>
                          <span>9,40 &euro;</span>
                    </dt>
                    <dd><!--Aqui la descripcion--></dd>
                    
                    <dt>
                          <strong>Waltraud cos. 2009 Bod. Torres (100% Riesling) 13% vol.</strong>
                          <span>20,00 &euro;</span>
                    </dt>
                    <dd><!--Aqui la descripcion--></dd>
                    
                    <dt>
                          <strong>Viña Esmeralda cos. 2009 Bod. Torres (85% Moscatel, 15% Gewürztraminer) 11% vol.</strong>
                          <span>12,50 &euro;</span>
                    </dt>
                    <dd><!--Aqui la descripcion--></dd>
                    
                    <dt>
                          <strong>Fransola cos. 2007 Bod. Torres (90% Sauvignon blanc, 10% Parellada) 13,5% vol.</strong>
                          <span>33,50 &euro;</span>
                    </dt>
                    <dd><!--Aqui la descripcion--></dd>
                    
                </dl>
                
                <div class='titulo_menu' style='text-align: left; font-size:12px;'>D.O. Conca del Barbera</div>
                
                <dl>
                    <dt>
                          <strong>Milmanda cos. 2004 Bod. Torres (100% Chardonay) 14% vol.</strong>
                          <span>33,00 &euro;</span>
                    </dt>
                    <dd><!--Aqui la descripcion--></dd>
                    
                </dl>
                
                <div class='titulo_menu' style='text-align: left; font-size:12px;'>D.O. Somontano</div>
                
                <dl>
                    <dt>
                          <strong>Viñas del Vero cos. 2008 Bod. Viñas del Vero (100% Chardonnay) 12,5% vol.</strong>
                          <span>16,00 &euro;</span>
                    </dt>
                    <dd><!--Aqui la descripcion--></dd>
                    
                    <dt>
                          <strong>Enate Chardonnay fermendado en barrica, cos. 2008 (100% Chardonnay) 13,5% vol.</strong>
                          <span>22,00 &euro;</span>
                    </dt>
                    <dd><!--Aqui la descripcion--></dd>
                    
                    <dt>
                          <strong>Enate Chardonnay 234 cos. 2009 (Viñedos y crianzas del alto aragón, S.A.) 13% vol.</strong>
                          <span>11,50 &euro;</span>
                    </dt>
                    <dd><!--Aqui la descripcion--></dd>
                    
                </dl>
                
                <div class='titulo_menu' style='text-align: left; font-size:12px;'>D.O. Rioja</div>
                
                <dl>
                    <dt>
                          <strong>Diamante Bod. Franco-Españolas Semidulce 12% vol.</strong>
                          <span>8,50 &euro;</span>
                    </dt>
                    <dd><!--Aqui la descripcion--></dd>
                    
                </dl>
                
                <div class='titulo_menu' style='text-align: left; font-size:12px;'>Vinos de la tierra de Cádiz</div>
                
                <dl>
                    <dt>
                          <strong>Tierra Blanca cos. 2009 Bod. Paez Morilla S.A. (100% Palomino) 11,5% vol.</strong>
                          <span>8,50 &euro;</span>
                    </dt>
                    <dd><!--Aqui la descripcion--></dd>
                    
                </dl>
                
                <div class='titulo_menu'>VINOS ROSADOS</div>
                
                <div class='titulo_menu' style='text-align: left; font-size:12px;'>D.O. Rioja</div>
                
                <dl>
                    <dt>
                          <strong>Marqués de Cáceres cos. 2009, unión viti-vinicola S.A.</strong>
                          <span>9,00 &euro;</span>
                    </dt>
                    <dd><!--Aqui la descripcion--></dd>
                    
                </dl>
                
                <div class='titulo_menu' style='text-align: left; font-size:12px;'>D.O. Navarra</div>
                
                <dl>
                    <dt>
                          <strong>Gran Feudo cos. 2009 Bod. Julian Chivite (100% Garnacha tinta) 12,5% vol.</strong>
                          <span>9,00 &euro;</span>
                    </dt>
                    <dd><!--Aqui la descripcion--></dd>
                    
                </dl>
                
                <div class='titulo_menu' style='text-align: left; font-size:12px;'>Zona Chile - Valle del curicó</div>
                
                <dl>
                    <dt>
                          <strong>Santa Digna cos. 2009 Bod. Torres (100% Cavernet Sauvignon) 14% vol.</strong>
                          <span>9,00 &euro;</span>
                    </dt>
                    <dd><!--Aqui la descripcion--></dd>
                    
                </dl>
                
                <div class='titulo_menu' style='text-align: left; font-size:12px;'>Zona de Valladolid</div>
                
                <dl>
                    <dt>
                          <strong>Peñascal Bod. Hijos Barceló 12% vol.</strong>
                          <span>8,50 &euro;</span>
                    </dt>
                    <dd><!--Aqui la descripcion--></dd>
                    
                </dl>
                
                <div class='titulo_menu' style='text-align: left; font-size:12px;'>Zona Italia</div>
                
                <dl>
                    <dt>
                          <strong>Lambrusco dell' Emilia</strong>
                          <span>9,00 &euro;</span>
                    </dt>
                    <dd><!--Aqui la descripcion--></dd>
                    
                </dl>
                
                <div class='titulo_menu' style='text-align: left; font-size:12px;'>Zona de Portugal</div>
                
                <dl>
                    <dt>
                          <strong>Mateus Rosé Bod. Sogrape Vinhos (Baga, rufeete, tinta barrosa y touigon franca) 11% vol.</strong>
                          <span>8,50 &euro;</span>
                    </dt>
                    <dd><!--Aqui la descripcion--></dd>
                    
                </dl>
                
                <div class='titulo_menu' style='text-align: left; font-size:12px;'>Sierras de Málaga</div>
                
                <dl>
                    <dt>
                          <strong>Cortijo de los Aguilares BOd. Exp. Agric. Los Aquilares (Tempranillo, Merlot y Syrah)</strong>
                          <span>11,50 &euro;</span>
                    </dt>
                    <dd><!--Aqui la descripcion--></dd>
                    
                </dl>
                
                
                <!--VINOS TINTOS, Segunda página-->
                
                <div class='titulo_menu'>VINOS TINTOS</div>
                
                <div class='titulo_menu' style='text-align: left; font-size:12px;'>Zona de Castilla y León</div>
                
                <dl>
                    <dt>
                          <strong>Yllera Cr. 04 Bod. Los Curros (100% Tinta del País) 13,5% vol.</strong>
                          <span>12,00 &euro;</span>
                    </dt>
                    <dd><!--Aqui la descripcion--></dd>
                    
                </dl>
                
                <div class='titulo_menu' style='text-align: left; font-size:12px;'>D.O. Ribera del Duero</div>
                
                <dl>
                    <dt>
                          <strong>Matarromera Cr. 07 Bod. Matarromera (100% Tempranillo)</strong>
                          <span>24,00 &euro;</span>
                    </dt>
                    <dd><!--Aqui la descripcion--></dd>
                    
                </dl>
                
                <dl>
                    <dt>
                          <strong>Páramo de Guzmán Barrica 06 (100% Tempranillo) 14% vol.</strong>
                          <span>13,80 &euro;</span>
                    </dt>
                    <dd><!--Aqui la descripcion--></dd>
                    
                </dl>
                
                <dl>
                    <dt>
                          <strong>Teófilo Reyes Cr. 08 Bod. Reyes (Tinta del país, Albillo) 13,5% vol.</strong>
                          <span>18,00 &euro;</span>
                    </dt>
                    <dd><!--Aqui la descripcion--></dd>
                    
                </dl>
                
                <dl>
                    <dt>
                          <strong>Protos Cr. 07 Bod. Protos (100% Tinta Fina del país) 13% vol.</strong>
                          <span>23,50 &euro;</span>
                    </dt>
                    <dd><!--Aqui la descripcion--></dd>
                    
                </dl>
                
                <dl>
                    <dt>
                          <strong>Valderiz Cr. 06 Bod. Valderiz (100% Tinta fina del país) 13% vol.</strong>
                          <span>19,50 &euro;</span>
                    </dt>
                    <dd><!--Aqui la descripcion--></dd>
                    
                </dl>
                
                <dl>
                    <dt>
                          <strong>Protos Rva. 04 Bod. Protos (100% Tinta fina del país) 13% vol.</strong>
                          <span>26,40 &euro;</span>
                    </dt>
                    <dd><!--Aqui la descripcion--></dd>
                    
                </dl>
                
                <dl>
                    <dt>
                          <strong>Pesquera tinto Cr. 07 Bod. Alejandro Fernández (tempranillo 100%)</strong>
                          <span>32,00 &euro;</span>
                    </dt>
                    <dd><!--Aqui la descripcion--></dd>
                    
                </dl>
                
                <dl>
                    <dt>
                          <strong>Pesquera tinto Rva. 05 Bod. Alejandro Fernández (Tempranillo 100%)</strong>
                          <span>50,00 &euro;</span>
                    </dt>
                    <dd><!--Aqui la descripcion--></dd>
                    
                </dl>
                
                <div class='titulo_menu' style='text-align: left; font-size:12px;'>D.O. Rioja</div>
                
                <dl>
                    <dt>
                          <strong>Marqués de Arienzo Cr. 06 Bod. Domecq (95% Tempranillo, 2% Graciano, 3% Mazuelo)</strong>
                          <span>11,80 &euro;</span>
                    </dt>
                    <dd><!--Aqui la descripcion--></dd>
                    
                    <dt>
                          <strong>Marqués de Cáceres Cr. 06 Unión Viti-Vinícola(85% Tempranillo, 15% Garnacha) 13% vol.</strong>
                          <span>14,00 &euro;</span>
                    </dt>
                    <dd><!--Aqui la descripcion--></dd>
                    
                    <dt>
                          <strong>Luis Cañas Cr. 08 Bod. Luis Cañas S.A. (95% Tempranillo, 5% Garnacha) 13% vol.</strong>
                          <span>13,50 &euro;</span>
                    </dt>
                    <dd><!--Aqui la descripcion--></dd>
                    
                    <dt>
                          <strong>Viña Alcorta Cr. 07 Bod. Juan Alcorta (100% Tempranillo)</strong>
                          <span>11,80 &euro;</span>
                    </dt>
                    <dd><!--Aqui la descripcion--></dd>
                    
                    <dt>
                          <strong>M. Arienzo Gran Rva'98 Bod. Domecq (95% Tempranillo, 5% Mazuelo) 13% vol.</strong>
                          <span>19,80 &euro;</span>
                    </dt>
                    <dd><!--Aqui la descripcion--></dd>
                    
                    <dt>
                          <strong>Cueva del Monge Cos. 2006 Vinícola Real S.L. (100% Tempranillo) Ferment en tina</strong>
                          <span>19,80 &euro;</span>
                    </dt>
                    <dd><!--Aqui la descripcion--></dd>
                    
                    <dt>
                          <strong>200 Monjes Rva 04 Bod. Vinícolas Real (85% Tempranillo, 10% Graciano)</strong>
                          <span>32,00 &euro;</span>
                    </dt>
                    <dd><!--Aqui la descripcion--></dd>
                    
                    <dt>
                          <strong>Beronía Cr. 07 Bod. Beronia S.A (Tempranillo, Garnacha, Mazuelo)</strong>
                          <span>11,80 &euro;</span>
                    </dt>
                    <dd><!--Aqui la descripcion--></dd>
                    
                </dl>
                
                <div class='titulo_menu' style='text-align: left; font-size:12px;'>D.O. Priorato</div>
                
                <dl>
                    <dt>
                          <strong>Perinet Finca Mas Perinet 05 (42% Garnacha, 25% Syrah, 15% Cariñena)</strong>
                          <span>25,00 &euro;</span>
                    </dt>
                    <dd><!--Aqui la descripcion--></dd>
                    
                    <dt>
                          <strong>Martinet Bru 06 Bod. Mas Martinet Viticultors S.L. 14,5% vol.</strong>
                          <span>25,00 &euro;</span>
                    </dt>
                    <dd><!--Aqui la descripcion--></dd>
                    
                </dl>
                
                <div class='titulo_menu' style='text-align: left; font-size:12px;'>D.O. Dominio de Valdepusa</div>
                
                <dl>
                    <dt>
                          <strong>Caliza Cos. 2006 Bod. Pagos de Fam. M. de Griñón S.A. (Petit verdot y syrah)</strong>
                          <span>16,00 &euro;</span>
                    </dt>
                    <dd><!--Aqui la descripcion--></dd>
                    
                </dl>
                
                <div class='titulo_menu' style='text-align: left; font-size:12px;'>D.O. Toro</div>
                
                <dl>
                    <dt>
                          <strong>Valmoro tinto 06 (100% tinta de toro) Bod. Alvarez Diez</strong>
                          <span>15,50 &euro;</span>
                    </dt>
                    <dd><!--Aqui la descripcion--></dd>
                    
                </dl>
                
                <div class='titulo_menu' style='text-align: left; font-size:12px;'>Zona de California</div>
                
                <dl>
                    <dt>
                          <strong>Marimar Cos. 2000 Bod. Torres (Pinot Noir) 14% vol.</strong>
                          <span>41,00 &euro;</span>
                    </dt>
                    <dd><!--Aqui la descripcion--></dd>
                    
                </dl>
                
                <div class='titulo_menu' style='text-align: left; font-size:12px;'>D.O. Somontano</div>
                
                <dl>
                    <dt>
                          <strong>Enate Crianza Cos. 2005 (Viñedos y crianzas del alto Aragón S.A.) 13,5% vol.</strong>
                          <span>14,00 &euro;</span>
                    </dt>
                    <dd><!--Aqui la descripcion--></dd>
                    
                </dl>
                
                <div class='titulo_menu' style='text-align: left; font-size:12px;'>Vinos de la tierra de Cádiz</div>
                
                <dl>
                    <dt>
                          <strong>Taberner Huerta de Albalá Cos. 2006 (80% syrah, merlot y Cabernert Sauvignon)</strong>
                          <span>23,00 &euro;</span>
                    </dt>
                    <dd><!--Aqui la descripcion--></dd>
                    
                    <dt>
                          <strong>Regantío Bod. C.G. de vinos de Cádiz Cos. 2009 (Cabernet Sauvignon y syrah)</strong>
                          <span>9,80 &euro;</span>
                    </dt>
                    <dd><!--Aqui la descripcion--></dd>
                    
                </dl>
                
                <div class='titulo_menu' style='text-align: left; font-size:12px;'>Serranía de Ronda</div>
                
                <dl>
                    <dt>
                          <strong>Tadeo de los Aguilares Cos. 2007 B. Explotaciones A. los Aguilares (Petir Verdot y syrah) 14% vol.</strong>
                          <span>30,50 &euro;</span>
                    </dt>
                    <dd><!--Aqui la descripcion--></dd>
                    
                    <dt>
                          <strong>Pago el Espino.C.07.Bod.Exp.A.los Aguilares(Tempranillo,Cabernet,Merlot y Petit) 14% vol.</strong>
                          <span>22,00 &euro;</span>
                    </dt>
                    <dd><!--Aqui la descripcion--></dd>
                    
                    <dt>
                          <strong>Cortijo los aguilares.C.09.Bod.Exp.A.los Aguilares(Tempranillo,Merlot y Syrah)14% vol.</strong>
                          <span>14,50 &euro;</span>
                    </dt>
                    <dd><!--Aqui la descripcion--></dd>
                    
                </dl>
                
                <div class='titulo_menu' style='text-align: left; font-size:12px;'>Pla de Bages</div>
                
                <dl>
                    <dt>
                          <strong>Abadal.Cos.2005-Bod.Masies D'avinyo(Cabernet Sauvignon y merlot) 14% vol.</strong>
                          <span>11,80 &euro;</span>
                    </dt>
                    <dd><!--Aqui la descripcion--></dd>
                    
                </dl>
                
                <div class='titulo_menu' style='text-align: left; font-size:12px;'>D.O. Penedes</div>
                
                <dl>
                                        
                    <dt>
                          <strong>Mas la Plana Cos 1997 Bod. Torres (100% Cabernet Sauvignon) 13,5% vol.</strong>
                          <span>42,00 &euro;</span>
                    </dt>
                    <dd><!--Aqui la descripcion--></dd>
                    
                </dl>
                
                <div class='titulo_menu' style='text-align: left; font-size:12px;'>D.O. Penedes</div>
                
                <dl>
                    <dt>
                          <strong>Atrium Cos. 2008 Bod. Torres (100% Merlot) 13,5% vol.</strong>
                          <span>19,40 &euro;</span>
                    </dt>
                    <dd><!--Aqui la descripcion--></dd>
                    
                    <dt>
                          <strong>Mas la Plana Cos 1997 Bod. Torres (100% Cabernet Sauvignon) 13,5% vol.</strong>
                          <span>42,00 &euro;</span>
                    </dt>
                    <dd><!--Aqui la descripcion--></dd>
                    
                </dl>
                
                <div class='titulo_menu' style='text-align: left; font-size:12px;'>D.O. Penedes</div>
                
                <dl>
                    <dt>
                          <strong>Gran Muralles Cos 1997 Bod. Torres (Monastrell, garnacha, cariñena, garró) 14% vol.</strong>
                          <span>80,00 &euro;</span>
                    </dt>
                    <dd><!--Aqui la descripcion--></dd>
                    
                </dl>
                
                
        </div>
	</div>
    <div id='vacio_margen'></div>
    
	<?
	include("pie_sociales.php");
	?>

</div><!--FIN DE page-->
</body>
</html>