<?	
	//Archivo que incluye el proceso de conexión
	include("conexion.php");
	$link=conectarse();

	header('Content-Type: text/html; charset=utf-8');
	
	//Pasada del captcha
	require_once('recaptchalib.php');
	$privatekey = "6LfGzr8SAAAAADPWQgLZuUmMwdKWZuYGw72YjdH5";
	$resp = recaptcha_check_answer ($privatekey,
									$_SERVER["REMOTE_ADDR"],
									$_POST["recaptcha_challenge_field"],
									$_POST["recaptcha_response_field"]);
	//Fin de la pasado por el captcha
	
	//Si el captcha es correcto se envía el comentario
	if ($resp->is_valid) {
		if(utf8_decode($_POST['opinion']) != "" && utf8_decode($_POST['nombre']) != ""){
			mysql_query("INSERT INTO opiniones VALUES ('', '".utf8_decode($_POST['nombre'])."', '".utf8_decode($_POST['opinion'])."', '".utf8_decode($_POST['valoracion'])."', now(), '192.168.0.130')",$link);
			echo "<script> window.location.href='gracias.php';</script>";
			}
		else{
			echo "<script>alert('Comprueba que has escrito tu nombre y una opinión. Puedes firmar como anónimo si no deseas que aparezca tu nombre.');</script>";
			echo "<script> window.history.back();</script>";
		}
	} else {
		echo "<script>alert('Captcha incorrecto, vuelve a escribir las palabras que aparecen.');</script>";
		echo "<script> window.history.back();</script>";	
	}

?>