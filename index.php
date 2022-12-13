<?
	//Archivo que incluye el proceso de conexión
	include("conexion.php");
	$link=conectarse();
?>

<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>

<META NAME="DC.Language" SCHEME="RFC1766" CONTENT="Spanish">
<META NAME="AUTHOR" CONTENT="Humberto Lebrero Casanova">
<META NAME="DESCRIPTION" CONTENT="Situado a escasos metros del Océano Atlántico, frente a la playa de Santa María del Mar, La Despensa desarrolla, desde que abrieramos las puertas en 1995 una distinguida proposición gastronómica de cocina de mercado y tradicional que se sustenta en una portentosa elaboración técnica que armoniza las técnicas más vanguardistas con la rigurosa y exigente selección de las mejores materias primas, productos del mercado y de la tradición culinaria local y gaditana.">
<META NAME="KEYWORDS" CONTENT="La despensa, cádiz, cadiz, restaurante, playa, comida, pescado, frito, solomillo, arte, artístico, diseño, rustico, mejor, vistas, pie, mar, oceano, costa, despensa">
<META NAME="Resource-type" CONTENT="Index">
<META NAME="DateCreated" CONTENT="Mon, 1 November 2010 00:00:00 GMT+1">
<META NAME="Revisit-after" CONTENT="1 days">
<META NAME="robots" content="ALL">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Restaurante La Despensa</title>

	<link href="favicon.ico" type="image/x-icon" rel="shortcut icon" />
	<link rel="stylesheet" href="supersized.css" type="text/css" media="screen" />
    
	
	<script language="javascript" type="text/javascript" src="js/jquery.js"></script>
    <script language="javascript" type="text/javascript" src="js/example.js"></script>
    <script language="javascript" type="text/javascript" src="js/jquery.color-RGBa-patch.js"></script>
    <script language="javascript" type="text/javascript" src="js/flexi-background-jquery.js"></script>
    <script language="javascript" type="text/javascript" src="js/jquery.tweet.js"></script>
	
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
                    <li class="current_page_item"><a href="index.php">Principal</a></li>
                    <li><a href="carta.php">Carta</a></li>
                    <li><a href="vinos.php">Vinos</a></li>
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
            	Situado a escasos metros del Océano Atlántico, frente a la playa de Santa María del Mar, La Despensa desarrolla, desde que abrieramos las puertas en 1995 una distinguida proposición gastronómica de cocina de mercado y tradicional que se sustenta en una portentosa elaboración técnica que armoniza las técnicas más vanguardistas con la rigurosa y exigente selección de las mejores materias primas, productos del mercado y de la tradición culinaria local y gaditana.<br/><br/>
                
                <!-- <a href="imagenes/menu_navidad.png" target="_new">
                	<center><img src="imagenes/campanas_menu.png"/></center>
                </a> -->
                <br/>
                <br/>
                <h2>Los compañeros de Onda Cádiz han vinieron a entrevistarnos, <a href="http://www.youtube.com/watch?feature=player_embedded&v=xbxw8yazjHE" target="_new">aquí tenéis el vídeo del reportaje</a>.</h2><br/>
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