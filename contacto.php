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
    <script language="javascript" type="text/javascript" src="js/jquery.jqEasyCharCounter.js"></script>

	<script>
		var RecaptchaOptions = {
		theme : 'white', /* tema color */
		lang : 'es' /* idioma español */
		};
	</script>

	<script type="text/javascript"> <!--charcounter-->
        $(document).ready(function(){
            
            $('#countable').jqEasyCounter({
                'maxChars': 200,
				'maxCharsWarning': 180,
				'msgFontSize': '15px',
				'msgFontColor': '#FFF',
				'msgFontFamily': 'Arial',
				'msgTextAlign': 'center',
				'msgWarningColor': '#F00',
				'msgAppendMethod': 'insertAfter'				
            });
			
			$('#countable_nombre').jqEasyCounter({
                'maxChars': 15,
				'maxCharsWarning': 12,
				'msgFontSize': '15px',
				'msgFontColor': '#FFF',
				'msgFontFamily': 'Arial',
				'msgTextAlign': 'center',
				'msgWarningColor': '#F00',
				'msgAppendMethod': 'insertAfter'				
            });
    });
    </script>
    
	
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
			background-image: url(imagenes/background6.jpg); 
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
                    <li><a href="vinos.php">Vinos</a></li>
                    <li class="current_page_item"><a href="contacto.php">Localizaci&oacute;n y contacto</a></li>
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
            Puede encontrarnos en la calle Escritor Ramos Solís nº 9 de Cádiz, junto a la playa. También puede realizar reservas por teléfono o email proporcionándonos tus datos personales, un teléfono de contacto y cúantos comensales participarán. Para email las reservas se harán con, como mínimo, dos días de antelación y deberá esperar a que le confirmemos la reserva por teléfono. <br/><br/>
            
             <br/>
             <br/> 
             <br/>
        
            	<center> <p>Teléfono de contacto:</p> <h1>956 265 320</h1> </center> <br/>
                
                <!--Aqui el form de contacto-->
            <center><p>También puede contactar por email rellenando el siguiente formulario</p></center>
            <center>
				<?php
					///////Configuración/////
					$mail_destinatario = 'restauranteladespensa@hotmail.com';
					///////Fin configuración// 
					
					//Pasada del captcha
						require_once('recaptchalib.php');
						$privatekey = "6LfGzr8SAAAAADPWQgLZuUmMwdKWZuYGw72YjdH5";
						$resp = recaptcha_check_answer ($privatekey,
														$_SERVER["REMOTE_ADDR"],
														$_POST["recaptcha_challenge_field"],
														$_POST["recaptcha_response_field"]);
					//Fin de la pasado por el captcha
					
					
					if (isset ($_POST['enviar']) && $resp->is_valid) {
					$headers .= "Reply-To: Web La Despensa <".$_POST['email'].">\r\n"; 
    				$headers .= "Return-Path: Web La Despensa <".$_POST['email'].">\r\n"; 
   					$headers .= "From: Web La Despensa <".$_POST['email'].">\r\n"; 
   					$headers .= "Organizacion: La Despensa\r\n"; 
    				$headers .= "Content-Type: text/plain\r\n";
					if ( mail ($mail_destinatario, "Contacto desde Web La Despensa", "Nombre y apellidos : ".$_POST['nombre']." - Telefono: ".stripcslashes ($_POST['asunto'])." - Mensaje: ".stripcslashes ($_POST['mensaje']), $headers )) echo '
					
					<p>Su mensaje a sido enviado correctamente. Gracias por contactar con nosostros</p>
					
					'; 
					
					else echo '
					
					<p>Error al enviar el formulario. Por favor, inténtelo de nuevo mas tarde.</p>					
					'; }
					
					echo '
									<form action="?" method="post"> <label for="nombre"><p>Nombre y apellidos</p> </label>  
										<input type="text" name="nombre" size="50" maxlength="80"><br> <label for="email"><p>Email</p> </label>
										<input type="text" name="email" size="50" maxlength="60"><br> <label for="asunto"><p>Teléfono</p>  </label>
										<input type="text" name="asunto" size="50" maxlength="60"><br> <label for="mensaje"><p>Mensaje</p> </label>  <textarea name="mensaje" cols="31" rows="5"></textarea> <br>
										
										<p>Escriba el texto que aparece la imagen y envíe la consulta. Cuando la consulta haya sido enviada aparecerá un mensaje, si no aparece, por favor, vuelva a intentarlo rellenando todos los campos y escribiendo correctamente el texto de la imagen.</p>
										
					';
										
										require_once('recaptchalib.php');
										$publickey = '6LfGzr8SAAAAAOsukCnjmos1z4UiCcLDNzQ4KZLH';
										echo recaptcha_get_html($publickey);
										
										
					echo '
										<label for="enviar"><br/>
										<input type="submit" name="enviar" value="Enviar consulta"></label>
									</form>
					
					&nbsp;
					
					';
				?>
            </p>
            
            
            <center><p>Localización de La Despensa:</p></center>
            <!--Mapa de Googlemaps-->
            	<iframe width="700" height="700" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.es/maps?f=q&amp;source=s_q&amp;hl=es&amp;geocode=&amp;q=restaurante+la+despensa+cadiz&amp;sll=40.396764,-3.713379&amp;sspn=12.342864,28.54248&amp;ie=UTF8&amp;hq=restaurante+la+despensa&amp;hnear=C%C3%A1diz,+Andaluc%C3%ADa&amp;t=h&amp;cid=13428638969103263322&amp;ll=36.517224,-6.285467&amp;spn=0.013796,0.036564&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br /><a href="http://maps.google.es/maps?f=q&amp;source=embed&amp;hl=es&amp;geocode=&amp;q=restaurante+la+despensa+cadiz&amp;sll=40.396764,-3.713379&amp;sspn=12.342864,28.54248&amp;ie=UTF8&amp;hq=restaurante+la+despensa&amp;hnear=C%C3%A1diz,+Andaluc%C3%ADa&amp;t=h&amp;cid=13428638969103263322&amp;ll=36.517224,-6.285467&amp;spn=0.013796,0.036564&amp;z=14&amp;iwloc=A">Ver mapa m&aacute;s grande</a>
            </center>
            </p>
           
        </div>
	</div>
    <div id='vacio_margen'></div>
    
	<?
	include("pie_sociales.php");
	?>
</div><!--FIN DE page-->
</body>
</html>