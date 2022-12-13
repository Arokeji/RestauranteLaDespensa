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
			background-image: url(imagenes/background7.jpg); 
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
                    <li class="current_page_item"><a href="carta.php">Carta</a></li>
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
            	En La Despensa ofrecemos productos frescos de primera calidad, de nuestra tierra y hechos con mucha pasión y cariño para que cada bocado sea un placer.
                
                <br/><br/>
                <a href="menu_english.php" target="_new">
                	<img src="imagenes/english.gif" width="76" height="35" />
                </a>
                <br/>
                You can see our menu in english by <a href="menu_english.php" target="_new">clicking here</a>.
            </p>
            <br/><br/><br/><br/>
            
            <div id="galeria"> 
                <img src="imagenes/01.jpg" title="Ensalada Árabe" alt="Base variada de lechugas, guacates, tomates sherry con foie templado y un surtido de higos, ciruelas, dátiles, orejones, piñones y regados con una vinagreta de miel de caña."/> 
                <img src="imagenes/011.jpg" title="Ensalada Árabe" alt="Base variada de lechugas, guacates, tomates sherry con foie templado y un surtido de higos, ciruelas, dátiles, orejones, piñones y regados con una vinagreta de miel de caña."/> 
                <img src="imagenes/02.jpg" title="Crujientes de pasta brick" alt="Rellenos de queso y puerros regados con salsa de Pedro Ximénez."/> 
                <img src="imagenes/022.jpg" title="Crujientes de pasta brick" alt="Rellenos de queso y puerros regados con salsa de Pedro Ximénez."> 
                <img src="imagenes/03.jpg" title="Pulpo a la brasa" alt="Con cremoso de patata y aceite de pimentón de la Vera."/>
                <img src="imagenes/04.jpg" title="Bacalao al pil-pil" alt="Lomo especial de acalao confitado con aceite de oliva, ajos, guindillas y posterior embulsión en su jugo."/>
                <img src="imagenes/05.jpg" title="Solomillo de ternera" alt="Cubierto de foie y láminas de jamón de Jabugo con reducción de salsa de Pedro Ximénez."/>
                <img src="imagenes/055.jpg" title="Solomillo de ternera" alt="Cubierto de foie y láminas de jamón de Jabugo con reducción de salsa de Pedro Ximénez."/>
                <img src="imagenes/06.jpg" title="Bizcocho templado de chocolate" alt="Con helado de Vainilla."/>
                <img src="imagenes/07.jpg" title="Sorbete de limón" alt="Al cava."/>
                <img src="imagenes/08.png" title="Torrijas" alt="Torrijas de brioche infusionadas en leche, limón y canela con helado de vainilla y crujiente de chocolate."/>
            </div>
            
                <script>
					Galleria.loadTheme('themes/classic/galleria.classic.js');
					$('#galeria').galleria({
						height:400
					});
				</script>
            
            	<div class='titulo_menu'>Platos principales</div>
            
            	<dl>
                    <dt>
                          <strong>Surtido con queso, jamón y caña de Lomo Lazo</strong>
                          <span>14,00 &euro;</span>
                    </dt>
                    <dd><!--Aqui la descripcion--></dd>
                   
                    <dt>
                          <strong>Anchoas artesanas del Capricho con lecho de tomatitos(6 unidades)</strong>
                          <span>12,00 &euro;</span>
                    </dt>
                    <dd></dd>
                    
                    <dt>
                          <strong>Foie de pato con compota de manzana y sal de chocolate</strong>
                          <span>15,00 &euro;</span>
                    </dt>
                    <dd></dd>
                    
                    <dt>
                          <strong>Paté de cabracho</strong>
                          <span>7,20 &euro;</span>
                    </dt>
                    <dd></dd>
                    
                    <dt>
                          <strong>Gambas blancas al ajillo</strong>
                          <span>12,00 &euro;</span>
                    </dt>
                    <dd></dd>
                    
                    <dt>
                          <strong>Gambas de Huelva cocidas o a la plancha</strong>
                          <span>18,00 &euro;</span>
                    </dt>
                    <dd></dd>
                    
                    <dt>
                          <strong>Langostinos de Sanlúcar cocidos o a la plancha</strong>
                          <span>20,00 &euro;</span>
                    </dt>
                    <dd></dd>
                    
                    <dt>
                          <strong>Almejas al ajillo, marinera o Tío Pepe</strong>
                          <span>15,00 &euro;</span>
                    </dt>
                    <dd></dd>
                    
                    <dt>
                          <strong>Croquetas Caseras</strong>
                          <span>6,00 &euro;</span>
                    </dt>
                    <dd></dd>
                    
                    <dt>
                          <strong>Frituritas de Corvina al limón</strong>
                          <span>9,00 &euro;</span>
                    </dt>
                    <dd></dd>
                    
                    <dt>
                          <strong>Ortiguillas fritas 12 unidades</strong>
                          <span>8,50 &euro;</span>
                    </dt>
                    <dd></dd>
                    
                    <dt>
                          <strong>Tortillitas de camarones de salinas 6 unidades</strong>
                          <span>6,50 &euro;</span>
                    </dt>
                    <dd></dd>
                    
                    <dt>
                          <strong>Hojaldre relleno de berenjenas y langostinos gratinado</strong>
                          <span>6,50 &euro;</span>
                    </dt>
                    <dd></dd>
                    
                    <dt>
                          <strong>Berenjenas fritas y bañadas en miel de caña</strong>
                          <span>7,80 &euro;</span>
                    </dt>
                    <dd></dd>
                    
                    <dt>
                          <strong>Pulpo a la brasa con cremoso de patata y aceite de pimentón de la Vera</strong>
                          <span>12,60 &euro;</span>
                    </dt>
                    <dd></dd>
                    
                    <dt>
                          <strong>Gazpacho/Salmorejo</strong>
                          <span>3,60 &euro;</span>
                    </dt>
                    <dd></dd>
                    
                    <dt>
                          <strong>Tosta con foie de pato, compota de manzana y paleta Lazo</strong>
                          <span>4,90 &euro;</span>
                    </dt>
                    <dd></dd>
                    
                    <dt>
                          <strong>Anillas de calamar frito con asadillos de pimientos</strong>
                          <span>10,70 &euro;</span>
                    </dt>
                    <dd></dd>
                    
                    <dt>
                          <strong>Crujientes de pasta brick rellenos de queso y puerros regados con salsa de Pedro Ximénez</strong>
                          <span>7,80 &euro;</span>
                    </dt>
                    <dd></dd>
                    
                    <dt>
                          <strong>Ensaladilla rusa con patatas cocidas, zanahorias, guisantes, langostinos y mayonesa</strong>
                          <span>6,00 &euro;</span>
                    </dt>
                    <dd></dd>
                    
                    <dt>
                          <strong>Navajas de Huelva al ajillo</strong>
                          <span>10,00 &euro;</span>
                    </dt>
                    <dd></dd>
					
                    <br/><br/><div class='titulo_menu'>Ensaladas</div>
                    
					<dt>
                          <strong>Mixta</strong>
                          <span>6,50 &euro;</span>
                    </dt>
                    <dd>Atún, cebolla, huevo duro, lechuga, tomate, maíz y zanahoria.</dd>
					
					<dt>
                          <strong>Ahumados</strong>
                          <span>7,80 &euro;</span>
                    </dt>
                    <dd>Surtido de ahumados Domínguez con bacalao, salmón, sardinillas, palmitos, sherry, maíz, vinagreta de mostaza verde y miel.</dd>
					
					<dt>
                          <strong>Aguacates</strong>
                          <span>7,80 &euro;</span>
                    </dt>
                    <dd>Aguacates, queso fresco, surtido de ahumados troceados, tomates y vinagreta de mango.</dd>
					
					<dt>
                          <strong>Piña</strong>
                          <span>9,60 &euro;</span>
                    </dt>
                    <dd>Piña natural troceada, kiwis, naranja, un surtido de ahumados, tomates sherry, langostinos cocidos y salsa rosa.</dd>
					
					<dt>
                          <strong>César</strong>
                          <span>7,20 &euro;</span>
                    </dt>
                    <dd>Base variada de lechugas bañadas con crema de cabrales y cubiertas con trocios de pollo cocido, nueces, huevo duro y picatostes de pan frito.</dd>
					
					<dt>
                          <strong>Árabe</strong>
                          <span>7,20 &euro;</span>
                    </dt>
                    <dd>Base variada de lechugas, aguacates, tomates sherry con foie templado y un surtido de higos, ciruelas, dátiles, orejones y piñones regados con una vinagreta de miel de caña.</dd>
					
					<dt>
                          <strong>Sueca</strong>
                          <span>9,60 &euro;</span>
                    </dt>
                    <dd>Base variada de lechugas, salmón de ahumados Domínguez, tomatitos sherry y nueces bañados con una salsa de cabrales, miel y una vinagreta sobre el salmón de soja.</dd>
					
					<dt>
                          <strong>Francesa</strong>
                          <span>9,60 &euro;</span>
                    </dt>
                    <dd>Variado de lechugas, queso de cabra templado, nueces, cubito de membrillo, naranjas en trozos, tomates sherry, endivias rojas con su vinagreta de mostaza antigua.</dd>
					
                    <br/><br/><div class='titulo_menu'>Revueltos</div>
                    
					<dt>
                          <strong>De huevos estrellados con jamón ibérico y patatas fritas</strong>
                          <span>6,50 &euro;</span>
                    </dt>
                    <dd></dd>
					
					<dt>
                          <strong>Surtido de ahumados con gambas</strong>
                          <span>6,50 &euro;</span>
                    </dt>
                    <dd></dd>
					
					<dt>
                          <strong>Cama de Gulas: una base de patatas panaderas fritas y sobre estas unas cebollitas caramelizadas, dos huevos fritos y una montaña de gulas salteadas al ajillo</strong>
                          <span>10,00 &euro;</span>
                    </dt>
                    <dd></dd>
					
					<dt>
                          <strong>De huevos con setas: con una base de patatas panaderas fritas, y sobre ellas un salteado de setas con dos huevos fritos cubiertos de jamón de jabugo</strong>
                          <span>10,00 &euro;</span>
                    </dt>
                    <dd></dd>
					
					<dt>
                          <strong>Bacalao Dorado: un revuelto de bacalao desmigado con cebollitas y patatas paja</strong>
                          <span>10,00 &euro;</span>
                    </dt>
                    <dd></dd>
					
                    <br/><br/><div class='titulo_menu'>Carnes</div>
                    
					<dt>
                          <strong>Brocheta a las especias morunas: tacos de solomillo de cerdo con dátiles y pimiento con especias morunas y <br/>cous-cous</strong>
                          <span>7,80 &euro;</span>
                    </dt>
                    <dd></dd>
					
					<dt>
                          <strong>Brocheta especial de solomillo: tacos de solomillo de cerdo con trozos de jabuguitos, pimientos y patatas fritas</strong>
                          <span>7,80 &euro;</span>
                    </dt>
                    <dd></dd>
					
					<dt>
                          <strong>Secreto Ibérico a la plancha con patatas fritas y verduras</strong>
                          <span>9,00 &euro;</span>
                    </dt>
                    <dd></dd>
					
					<dt>
                          <strong>Pierna de cordero lechal: confitada en aceite de oliva con tomillo fresco y guarnición de patatas fritas con verduras de temporada al dente</strong>
                          <span>18,00 &euro;</span>
                    </dt>
                    <dd></dd>
					
					<dt>
                          <strong>Entrecot de ternera: lomo bajo de ternera nacional a la plancha al punto deseado con patatas fritas y chimichurri <br/>argentino</strong>
                          <span>14,00 &euro;</span>
                    </dt>
                    <dd></dd>
					
					<dt>
                          <strong>Medallones de solomillo de cerdo: a la plancha y salsa a la pimienta con bacon y cebollitas (México)</strong>
                          <span>7,80 &euro;</span>
                    </dt>
                    <dd></dd>
					
					<dt>
                          <strong>Presa de paletilla ibérica: filetes de presa ibérica con patatas fritas y verduritas</strong>
                          <span>10,60 &euro;</span>
                    </dt>
                    <dd></dd>
					
					<dt>
                          <strong>Carrillada ibérica con cebollitas glaseadas</strong>
                          <span>12,00 &euro;</span>
                    </dt>
                    <dd></dd>
					
					<dt>
                          <strong>Pluma ibérica con rulo de cabra y mermelada de cebollas</strong>
                          <span>12,00 &euro;</span>
                    </dt>
                    <dd></dd>
					
					<dt>
                          <strong>Solomillo de ternera con patatas fritas y verduras</strong>
                          <span>16,50 &euro;</span>
                    </dt>
                    <dd></dd>
					
					<dt>
                          <strong>Milhojas de solomillo de cerdo, láminas de jamón de Jabugo con reducción de Pedro Ximénez</strong>
                          <span>10,00 &euro;</span>
                    </dt>
                    <dd></dd>
					
					<dt>
                          <strong>Medallones de solomillo de cerdo a la crema de Jabugo</strong>
                          <span>7,80 &euro;</span>
                    </dt>
                    <dd></dd>
					
					<dt>
                          <strong>Pinchitos morunos de cordero con patatas y cous-cous</strong>
                          <span>7,20 &euro;</span>
                    </dt>
                    <dd></dd>
					
					<dt>
                          <strong>Magret de pato al mosto con uvas y manzanas caramelizadas</strong>
                          <span>12,70 &euro;</span>
                    </dt>
                    <dd></dd>
                    
					
					<dt>
                          <strong>Solomillo de ternera cubierto de Foie y láminas de jamón de Jabugo con reducción de salsa de Pedro Ximénez</strong>
                          <span>18,00 &euro;</span>
                    </dt>
                    <dd></dd>
					
                    <br/><br/><div class='titulo_menu'>Pescados</div>
                    
					<dt>
                          <strong>Chocos a la plancha con ensalada verde y patatas fritas</strong>
                          <span>9,00 &euro;</span>
                    </dt>
                    <dd></dd>
					
					<dt>
                          <strong>Lomitos de dorada enrollados y cocidos al vapor, rellenos de salmón con salsa de cava</strong>
                          <span>12,60 &euro;</span>
                    </dt>
                    <dd></dd>
					
					<dt>
                          <strong>Dorada de estero, plancha o espalda (600g.)con verduras salteadas</strong>
                          <span>12,60 &euro;</span>
                    </dt>
                    <dd></dd>
					
					<dt>
                          <strong>Turbante hecho de lomos de róbalos rellenos de paté de espárragos y gambas, gratinados al horno</strong>
                          <span>12,60 &euro;</span>
                    </dt>
                    <dd></dd>
					
					<dt>
                          <strong>Bacalao al pil-pil: lomo especial de bacalao confitado con aceite de oliva, ajos, guindillas y posterior emulsión de <br/>su jugo</strong>
                          <span>18,00 &euro;</span>
                    </dt>
                    <dd></dd>
					
					<dt>
                          <strong>Lomo de corvina blanca al aceite de oliva con timbal de verduras al vapor</strong>
                          <span>15,00 &euro;</span>
                    </dt>
                    <dd></dd>
					
					<dt>
                          <strong>Suprema de Pargo a la manzanilla de Sanlúcar o plancha con verduras al vapor</strong>
                          <span>15,00 &euro;</span>
                    </dt>
                    <dd></dd>
					
					<dt>
                          <strong>Cocochas de bacalao en salsa verde o pil-pil</strong>
                          <span>15,00 &euro;</span>
                    </dt>
                    <dd></dd>
					
					<dt>
                          <strong>Lomo de bacalao confitado a la salsa de mariscos</strong>
                          <span>18,00 &euro;</span>
                    </dt>
                    <dd></dd>
					
					<dt>
                          <strong>Lomitos de gallo fritos al perfume de ajos</strong>
                          <span>12,00 &euro;</span>
                    </dt>
                    <dd></dd>
					
					<dt>
                          <strong>Lomo de salmón a la placha con verduritas</strong>
                          <span>7,50 &euro;</span>
                    </dt>
                    <dd></dd>
					
					<dt>
                          <strong>Salmón grill, pasta fresca y crema de queso gorgonzola con nueces</strong>
                          <span>10,50 &euro;</span>
                    </dt>
                    <dd></dd>
					
					<dt>
                          <strong>Filete de pez espada a la plancha con patatas fritas y ensalada variada</strong>
                          <span>10,00 &euro;</span>
                    </dt>
                    <dd></dd>
					
					<dt>
                          <strong>Lomo de atún rojo con sésamo, ensalada de aguacates con soja y wasabi</strong>
                          <span>9,90 &euro;</span>
                    </dt>
                    <dd></dd>
					
					<dt>
                          <strong>Pasta fresca con gambas blancas al ajillo</strong>
                          <span>12,50 &euro;</span>
                    </dt>
                    <dd></dd>
					
                    <br/><br/><div class='titulo_menu'>Postres</div>
                    
					<dt>
                          <strong>Flan italiano panna cotta, frutos rojos o chocolate templado.</strong>
                          <span>3,60 &euro;</span>
                    </dt>
                    <dd></dd>
					
					<dt>
                          <strong>Bizcocho templado de chocolate con helado de vainilla</strong>
                          <span>4,50 &euro;</span>
                    </dt>
                    <dd></dd>
					
					<dt>
                          <strong>Helados caseros de chocolate, vainilla y dulce de leche</strong>
                          <span>3,60 &euro;</span>
                    </dt>
                    <dd></dd>
					
					<dt>
                          <strong>Tarta de chocolate con galletas</strong>
                          <span>4,00 &euro;</span>
                    </dt>
                    <dd></dd>
					
					<dt>
                          <strong>Tarta de queso con frutos rojos</strong>
                          <span>3,60 &euro;</span>
                    </dt>
                    <dd></dd>
					
					<dt>
                          <strong>Sorbete de limón al cava</strong>
                          <span>4,00 &euro;</span>
                    </dt>
                    <dd></dd>
					
					<dt>
                          <strong>Crema helada catalana</strong>
                          <span>4,00 &euro;</span>
                    </dt>
                    <dd></dd>
					
					<dt>
                          <strong>Tarta al whisky helada</strong>
                          <span>4,20 &euro;</span>
                    </dt>
                    <dd></dd>
					
					<dt>
                          <strong>Flan de huevo hecho en casa</strong>
                          <span>3,00 &euro;</span>
                    </dt>
                    <dd></dd>
					
					<dt>
                          <strong>Mousse espumoso de chocolate negro</strong>
                          <span>3,60 &euro;</span>
                    </dt>
                    <dd></dd>
					
					<dt>
                          <strong>Mousse de limón</strong>
                          <span>3,60 &euro;</span>
                    </dt>
                    <dd></dd>
					
					<dt>
                          <strong>Flan de queso con miel de caña</strong>
                          <span>4,00 &euro;</span>
                    </dt>
                    <dd></dd>
					
					<dt>
                          <strong>Cremoso de arroz con leche y azúcar tostado</strong>
                          <span>3,00 &euro;</span>
                    </dt>
                    <dd></dd>
					
					<dt>
                          <strong>Tarta tiramisú</strong>
                          <span>3,60 &euro;</span>
                    </dt>
                    <dd></dd>
					
					<dt>
                          <strong>Tarta Marquesa de chocolate negro</strong>
                          <span>4,00 &euro;</span>
                    </dt>
                    <dd></dd>
					
					<dt>
                          <strong>Tarta Marquesa de chocolate blanco</strong>
                          <span>4,00 &euro;</span>
                    </dt>
                    <dd></dd>
					
					<dt>
                          <strong>Crema de yogurt con tocino de cielo</strong>
                          <span>4,00 &euro;</span>
                    </dt>
                    <dd></dd>
				
                    
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