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
            	La Despensa only offers fresh and best quality products from our land, cooked with passion and love so each bite is a pleasure.<br/>
                If you like to have a dish which is not in our menu, let us know and, if possible, we will do our best to please you.
                
                <br/><br/>
                <br/>Puedes ver la carta en español <a href="carta.php" target="_new">haciendo click aquí.</a>.
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
            
            	<div class='titulo_menu'>Appettizers</div>
            
            	<dl>
                    <dt>
                          <strong>Assortment of Iberian cured meat and cheese (200 grs)</strong>
                          <span>15,40 &euro;</span>
                    </dt>
                    <dd>Paprika pork loin, ham and aged sheep cheese</dd>
                   
                    <dt>
                          <strong>Anchovies marinated in salt and olive oil in the traditonal artesan method served on a base of fresh tomatoes (6 units)</strong>
                          <span>13,20 &euro;</span>
                    </dt>
                    <dd></dd>
                    
                    <dt>
                          <strong>Duck Foie grass with apple compote and chocolate salt</strong>
                          <span>16,50 &euro;</span>
                    </dt>
                    <dd></dd>
                    
                    <dt>
                          <strong>Scorpion fish cold terrine served with mayonaisse and cocktail sauce</strong>
                          <span>7,95 &euro;</span>
                    </dt>
                    <dd></dd>
                    
                    <dt>
                          <strong>Garlic shrimps  150 grs </strong>
                          <span>13,85 &euro;</span>
                    </dt>
                    <dd></dd>
                    
                    <dt>
                          <strong>Huelva´s Shrimps 200 grs (boiled or grilled)</strong>
                          <span>19,80 &euro;</span>
                    </dt>
                    <dd></dd>
                    
                    <dt>
                          <strong>Sanlucar´s Prawns 200 grs (boiled or grilled)</strong>
                          <span>22,00 &euro;</span>
                    </dt>
                    <dd></dd>
                    
                    <dt>
                          <strong>Clams 200 grs (Choose between garlic oil, seafood and paprika sauce or dry sherry sauce)</strong>
                          <span>16,50 &euro;</span>
                    </dt>
                    <dd></dd>
                    
                    <dt>
                          <strong>Homemade fish  croquettes</strong>
                          <span>7,30 &euro;</span>
                    </dt>
                    <dd></dd>
                    
                    <dt>
                          <strong>Crispy fried maigre fish bites marinated in lemon and oregano</strong>
                          <span>11,00 &euro;</span>
                    </dt>
                    <dd></dd>
                    
                    <dt>
                          <strong>Crispy fried sea anemone (12 units)</strong>
                          <span>9,80 &euro;</span>
                    </dt>
                    <dd></dd>
                    
                    <dt>
                          <strong>Cádiz´s Salt-marshes mini shrimp tortilla fritters (6 units)</strong>
                          <span>7,60 &euro;</span>
                    </dt>
                    <dd></dd>
                    
                    <dt>
                          <strong>Gratinated Puff pastry filled with aubergines and prawns</strong>
                          <span>7,20 &euro;</span>
                    </dt>
                    <dd></dd>
                    
                    <dt>
                          <strong>Aubergine fritters with cane honey syrup</strong>
                          <span>8,00 &euro;</span>
                    </dt>
                    <dd></dd>
                    
                    <dt>
                          <strong>Grilled octopus on potato cream and paprikas oil</strong>
                          <span>13,85 &euro;</span>
                    </dt>
                    <dd></dd>
                    
                    <dt>
                          <strong>Gazpacho-salmorejo style (cold rich  tomato soup)</strong>
                          <span>4,40 &euro;</span>
                    </dt>
                    <dd></dd>
                    
                    <dt>
                          <strong>Foie gras, Iberian cured ham and apple toast</strong>
                          <span>5,40 &euro;</span>
                    </dt>
                    <dd></dd>
                    
                    <dt>
                          <strong>Crispy fried squid  strips (300 grs)</strong>
                          <span>12,65 &euro;</span>
                    </dt>
                    <dd></dd>
                    
                    <dt>
                          <strong>Brick crispy pastry filled with leeks and cream cheese and sweet sherry dip</strong>
                          <span>8,00 &euro;</span>
                    </dt>
                    <dd></dd>
                    
                    <dt>
                          <strong>Prawns, potatoes, carrots and mayonnaise salad</strong>
                          <span>7,00 &euro;</span>
                    </dt>
                    <dd></dd>
                    
                    <dt>
                          <strong>Net-caught razor clams with garlic and olive oil (300 grs)</strong>
                          <span>11,60 &euro;</span>
                    </dt>
                    <dd></dd>
                    
                    <dt>
                          <strong>Cadiz´s coquina clams with garlic and olive oil</strong>
                          <span>12,00 &euro;</span>
                    </dt>
                    <dd></dd>
                    
                    <dt>
                          <strong>Bread roll and sticks bread charge per person</strong>
                          <span>13,00 &euro;</span>
                    </dt>
                    <dd></dd>
					
                    <br/><br/><div class='titulo_menu'>Salads</div>
                    <br/>
                     	<p>All our salads come with a mixed base of chicory oak, iceberg and frissé salad</p>
                    <br/>
                    
					<dt>
                          <strong>Mixed</strong>
                          <span>7,20 &euro;</span>
                    </dt>
                    <dd>Tuna, hard-boiled egg, tomato, sweet corn and onion</dd>
					
					<dt>
                          <strong>Smoked fish</strong>
                          <span>8,60 &euro;</span>
                    </dt>
                    <dd>Smoked  cod, smoked salmon, anchovies, palm artichokes, sweet corn and spring onion dressing</dd>
					
					<dt>
                          <strong>Avocado</strong>
                          <span>8,60 &euro;</span>
                    </dt>
                    <dd>Avocado, smoked salmon, cottage cheese and tomato</dd>
					
					<dt>
                          <strong>Pineapple</strong>
                          <span>10,60 &euro;</span>
                    </dt>
                    <dd>Served in fresh half pineapple with a selection of smoked salmon, smoked cod, prawns, cherry tomatoes, and thousand island dressing</dd>
					
					<dt>
                          <strong>Caesar</strong>
                          <span>8,00 &euro;</span>
                    </dt>
                    <dd>Chicken, hard boiled eggs, walnuts, croutons and blue cheese dressing</dd>
					
					<dt>
                          <strong>Arabic</strong>
                          <span>8,00 &euro;</span>
                    </dt>
                    <dd>Selection of figs, plums, dates, dried apricots, pine nuts, warm foie gras, avocado, cherry tomatoes and honey vinaigrette</dd>
					
					<dt>
                          <strong>Swedish</strong>
                          <span>10,00 &euro;</span>
                    </dt>
                    <dd>Smoked salmon, cherry tomatoes, walnuts, honey and blue cheese dressing</dd>
					
					<dt>
                          <strong>French</strong>
                          <span>10,60 &euro;</span>
                    </dt>
                    <dd>Gratinated warm goat´s cheese, walnuts, quince compote, oranges and tomato and honey mustard vinaigrette</dd>
					
                    <br/><br/><div class='titulo_menu'>Egg dishes</div>
                    
					<dt>
                          <strong>Rustic fried eggs "estrellados" on fried potatoes and cured Iberian ham</strong>
                          <span>7,60 &euro;</span>
                    </dt>
                    <dd></dd>
					
					<dt>
                          <strong>Scrambled eggs with mushrooms and Jabugo cured ham served on French fries</strong>
                          <span>11,00 &euro;</span>
                    </dt>
                    <dd></dd>
					
					<dt>
                          <strong>Baby eel with two fried eggs and caramelized onions served on French fries</strong>
                          <span>10,00 &euro;</span>
                    </dt>
                    <dd></dd>
					
					<dt>
                          <strong>Scrambled eggs and Portugese style dourado cod with onion, potato straws and parsley</strong>
                          <span>10,00 &euro;</span>
                    </dt>
                    <dd></dd>
					
                    <br/><br/><div class='titulo_menu'>Carnes</div>
                    
					<dt>
                          <strong>Skewer pork loin  marinated in Moroccan spices served with cous-cous and French fries</strong>
                          <span>8,60 &euro;</span>
                    </dt>
                    <dd></dd>
					
					<dt>
                          <strong>Special Skewer pork loin with paprika, onion and French fries</strong>
                          <span>8,60 &euro;</span>
                    </dt>
                    <dd></dd>
					
					<dt>
                          <strong>Iberian pork fillets "Presa" thinly sliced served with fried green pepper and French fries</strong>
                          <span>11,60 &euro;</span>
                    </dt>
                    <dd></dd>
					
					<dt>
                          <strong>Beef cheek confit served with glassed baby onions and sweet sherry wine sauce</strong>
                          <span>13,20 &euro;</span>
                    </dt>
                    <dd></dd>
					
					<dt>
                          <strong>Iberian pork "Secreto" thinly sliced served with fried green peppers and French fries</strong>
                          <span>9,00 &euro;</span>
                    </dt>
                    <dd></dd>
					
					<dt>
                          <strong>Pork loin thinly sliced layers, cured Iberian ham, served with sweet sherry wine sauce and fried green pepper and French fries</strong>
                          <span>11,00 &euro;</span>
                    </dt>
                    <dd></dd>
					
					<dt>
                          <strong>Pork loin thinly sliced with  Jabugo  chorizo creamy sauce and French fries</strong>
                          <span>8,60 &euro;</span>
                    </dt>
                    <dd></dd>
					
					<dt>
                          <strong>Lambs Skewer marinated in Moroccan spices with cous-cous and French fries</strong>
                          <span>8,60 &euro;</span>
                    </dt>
                    <dd></dd>
					
					<dt>
                          <strong>Roast Lamb Shank with thyme and French fries</strong>
                          <span>19,80 &euro;</span>
                    </dt>
                    <dd></dd>
					
					<dt>
                          <strong>Duck  maigret thinly sliced, caramelized apples, reduction of grape juice served French fries</strong>
                          <span>14,00 &euro;</span>
                    </dt>
                    <dd></dd>
					
					<dt>
                          <strong>Grilled beef entrecôte with steamed vegetables and French fries</strong>
                          <span>15,40 &euro;</span>
                    </dt>
                    <dd></dd>
					
					<dt>
                          <strong>Grilled veal sirloin steak with steamed vegetables and French Fries</strong>
                          <span>18,20 &euro;</span>
                    </dt>
                    <dd></dd>
					
					<dt>
                          <strong>Grilled veal  sirloin steak covered with foie gras shavings, thinly sliced cured Iberian ham and reduction of Pedro Ximenez Sherry  sweet wine sauce</strong>
                          <span>19,80 &euro;</span>
                    </dt>
                    <dd></dd>
					
					<dt>
                          <strong>Gratinated lasagne with beef, aubergines and béchamel</strong>
                          <span>8,00 &euro;</span>
                    </dt>
                    <dd></dd>
                    
					
					<dt>
                          <strong>Gratinated canneloni filled with oxtail, mushrooms and tomato sauce</strong>
                          <span>8,00 &euro;</span>
                    </dt>
                    <dd></dd>
					
                    <br/><br/><div class='titulo_menu'>Fish</div>
                    
					<dt>
                          <strong>Grilled whole squid served with green salad and French fries</strong>
                          <span>9,90 &euro;</span>
                    </dt>
                    <dd></dd>
					
					<dt>
                          <strong>Dorada Sea bream rolls filled with salmon in a creamy  cava sauce</strong>
                          <span>13,85 &euro;</span>
                    </dt>
                    <dd></dd>
					
					<dt>
                          <strong>Dorada sea bream grilled or open "espalda" served with steamed vegetables</strong>
                          <span>13,85 &euro;</span>
                    </dt>
                    <dd></dd>
					
					<dt>
                          <strong>Sea Pearch fillet rolls filled with prawns and served with asparagus paté</strong>
                          <span>13,85 &euro;</span>
                    </dt>
                    <dd></dd>
					
					<dt>
                          <strong>Corvina grilled rockfish loins served with olive oil and steamed vegetables</strong>
                          <span>16,50 &euro;</span>
                    </dt>
                    <dd></dd>
					
					<dt>
                          <strong>Pargo rock fish grilled loin served in a dry Sherry white wine sauce</strong>
                          <span>16,50 &euro;</span>
                    </dt>
                    <dd></dd>
					
					<dt>
                          <strong>Low- temperature cooked Cod loins served with "pil-pil" sauce</strong>
                          <span>19,80 &euro;</span>
                    </dt>
                    <dd>"Pil-pil" sauce (Cod´s jelly, garlic and olive oil)</dd>
					
					<dt>
                          <strong>Cod confit fillets in seafood sauce</strong>
                          <span>19,80 &euro;</span>
                    </dt>
                    <dd></dd>
					
					<dt>
                          <strong>Fried dory fillets perfumed with garlic oil and served with French fries</strong>
                          <span>13,85 &euro;</span>
                    </dt>
                    <dd></dd>
					
					<dt>
                          <strong>Grilled salmon fillets served with fresh pasta, gorgonzola sauce and walnuts</strong>
                          <span>11,50 &euro;</span>
                    </dt>
                    <dd></dd>
					
					<dt>
                          <strong>Grilled swordfish with French fries and salad</strong>
                          <span>11,00 &euro;</span>
                    </dt>
                    <dd></dd>
					
					<dt>
                          <strong>Grilled red tuna steak in sesame, avocado salad, soy sauce and wasabi</strong>
                          <span>10,90 &euro;</span>
                    </dt>
                    <dd></dd>
					
					<dt>
                          <strong>Fresh pasta with white garlic prawns</strong>
                          <span>13,85 &euro;</span>
                    </dt>
                    <dd></dd>

					
                    <br/><br/><div class='titulo_menu'>Desserts</div>
                    
					<dt>
                          <strong>Warm chocolate sponge cake with vanilla ice cream</strong>
                          <span>5,00 &euro;</span>
                    </dt>
                    <dd></dd>
					
					<dt>
                          <strong>Creme bruleé</strong>
                          <span>4,00 &euro;</span>
                    </dt>
                    <dd></dd>
					
					<dt>
                          <strong>Home made ice cream trío  chocolate, vanilla and toffee</strong>
                          <span>5,60 &euro;</span>
                    </dt>
                    <dd></dd>
					
					<dt>
                          <strong>Chocolate and cookies cake </strong>
                          <span>4,40 &euro;</span>
                    </dt>
                    <dd></dd>
					
					<dt>
                          <strong>Cheese cake with forest berries</strong>
                          <span>4,00 &euro;</span>
                    </dt>
                    <dd></dd>
					
					<dt>
                          <strong>Lemon and cava sherbet</strong>
                          <span>4,40 &euro;</span>
                    </dt>
                    <dd></dd>
					
					<dt>
                          <strong>Crema helada catalana</strong>
                          <span>4,00 &euro;</span>
                    </dt>
                    <dd></dd>
					
					<dt>
                          <strong>Mandarin and licour Whisky sherbet</strong>
                          <span>4,40 &euro;</span>
                    </dt>
                    <dd></dd>
					
					<dt>
                          <strong>Frozen Crema catalana</strong>
                          <span>4,40 &euro;</span>
                    </dt>
                    <dd></dd>
					
					<dt>
                          <strong>Frozen whisky cake</strong>
                          <span>4,60 &euro;</span>
                    </dt>
                    <dd></dd>
					
					<dt>
                          <strong>Tarta de hojaldre y crema pastelera con azúcar glass</strong>
                          <span>4,40 &euro;</span>
                    </dt>
                    <dd></dd>
					
					<dt>
                          <strong>Egg Flan Creme caramel</strong>
                          <span>3,30 &euro;</span>
                    </dt>
                    <dd></dd>
					
					<dt>
                          <strong>Dark chocolate mousse </strong>
                          <span>4,00 &euro;</span>
                    </dt>
                    <dd></dd>
					
					<dt>
                          <strong>Panna cotta with forest berries compote</strong>
                          <span>4,00 &euro;</span>
                    </dt>
                    <dd></dd>
					
					<dt>
                          <strong>Lemon mousse</strong>
                          <span>4,00 &euro;</span>
                    </dt>
                    <dd></dd>
					
					<dt>
                          <strong>Cheese panna cotta with cane honey syroup</strong>
                          <span>4,40 &euro;</span>
                    </dt>
                    <dd></dd>
					
					<dt>
                          <strong>Sweet Rice pudding with sugar crust</strong>
                          <span>3,30 &euro;</span>
                    </dt>
                    
                    <dt>
                          <strong>Tiramisu cake</strong>
                          <span>4,00 &euro;</span>
                    </dt>
                    
                    <dt>
                          <strong>Dark chocolate cake</strong>
                          <span>4,00 &euro;</span>
                    </dt>
                    
                    <dt>
                          <strong>White chocolate cake</strong>
                          <span>4,00 &euro;</span>
                    </dt>
                    
                    <dt>
                          <strong>Cadiz´s egg pudding on Greek youghurt</strong>
                          <span>4,00 &euro;</span>
                    </dt>
                    
                    <dt>
                          <strong>Cured manchego cheese</strong>
                          <span>6,00 &euro;</span>
                    </dt>
                    
                    <dt>
                          <strong>Pancracio´s Vodka chocolate martini</strong>
                          <span>3,80 &euro;</span>
                    </dt>
                    
                    <dt>
                          <strong>Pancracio´s Tea forest berries, Chai, Earl grey, Sri Lanka</strong>
                          <span>1,60 &euro;</span>
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