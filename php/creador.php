<?php 
if(isset($_POST["crear"])){

	$carpeta = $_POST["nombre"];

	if(!file_exists($carpeta)){
		mkdir($carpeta);

		setcookie('nombre_carpeta', $carpeta, time()+3600);
	}

	if(isset($_POST["css"])){
		mkdir($carpeta."/css");

		if (isset($_POST["style"])) {

			$style = fopen($carpeta."/style.css","w");
			fwrite($style, "
				body{
					background-color: grey;
				}
				");
			fclose($style);
		}
	}
	if(isset($_POST["img"])){
		mkdir($carpeta."/img");
	}
	if(isset($_POST["js"])){
		mkdir($carpeta."/js");

		if (isset($_POST["crud_js"])) {

			$js = fopen($carpeta."/crud.js","w");
			fwrite($js, "
				alert(\"hola\");
				");
			fclose($js);
		}
	}
	if(isset($_POST["templates"])){
		mkdir($carpeta."/templates");
		$templates = $_POST["templates"];
	}
	if(isset($_POST["php"])){
		mkdir($carpeta."/php");

		if (isset($_POST["crud_php"])) {

			$php = fopen($carpeta."/crud.php","w");
			fwrite($php, "
				echo(\"hola\");
				");
			fclose($php);
		}
	}
	if(isset($_POST["documentos"])){
		mkdir($carpeta."/documentos");
	}
	
	$tipo_proyecto = $_POST["tipo_proyecto"];

	if ($tipo_proyecto == "pagina web") {

		$forma_proyecto = $_POST["forma_proyecto"];

		if ($forma_proyecto == "mvc") {

			$header = fopen($carpeta. "/templates/header.php","w");
			fwrite($header, "<!DOCTYPE html>
				<html lang=\"es\" dir=\"ltr\">
				  <head>
				    <meta charset=\"utf-8\">
				    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
				    <meta name=\"description\" content=\"\">
				    <meta name=\"keywords\" content=\"\">
				    <meta name=\"author\" content=\"\">
				    <meta name=\"robots\" content=\"noindex\"/>
				    <meta property=\"og:title\" content=\"Título aquí\" />
				    <meta property=\"og:title\" content=\"Título aquí\" />
				    <meta property=\"og:type\" content=\"article\" />
				    <meta property=\"og:url\" content=\"http://www.ejemplo.com/\" />
				    <meta property=\"og:image\" content=\"http://www.ejemplo.com/imagen.jpg\" />
				    <meta property=\"og:description\" content=\"Descripción aquí\" />
				    <meta name=\"viewport\" content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
				    <title>Nombre De Proyecto</title>
				    <link rel=\"icon\" href=\"\">
				    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.5.0/css/all.css\" integrity=\"sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU\" crossorigin=\"anonymous\">
				    <link rel=\"stylesheet\" href=\"css/style.css\">

				  </head>
				  <body>");
			fclose($header);

			$footer = fopen($carpeta. "/templates/footer.php","w");
			fwrite($footer, "
					<!--footer-->
					    <footer>
					        
					    </footer>
					<!--footer-->
					   
					    <!-- JavaScript -->
					    <script src=\"js/app.js\"></script>
					  </body>
					</html>");
			fclose($footer);

			if(isset($_POST["inicio"])){
				
				$inicio = fopen($carpeta."/inicio.php","w");
				fwrite($inicio, "
					<?php 
						require 'templates/header.php';
					?>

						<p>Hola mundo</p>
						
					<?php 
						require 'templates/footer.php';
					?>");
				fclose($inicio);

			}

			if(isset($_POST["nosotros"])){
				
				$nosotros = fopen($carpeta."/nosotros.php","w");
				fwrite($nosotros, "
					<?php 
						require 'templates/header.php';
					?>

						<p>Hola mundo</p>
						
					<?php 
						require 'templates/footer.php';
					?>");
				fclose($nosotros);
			
			}

			if(isset($_POST["contacto"])){
				
				$contacto = fopen($carpeta."/contacto.php","w");
				fwrite($contacto, "
					<?php 
						require 'templates/header.php';
					?>

						<p>Hola mundo</p>
						
					<?php 
						require 'templates/footer.php';
					?>");
				fclose($contacto);
			
			}
		}

		if ($forma_proyecto == "normal") {

			if(isset($_POST["inicio"])){
				
				$inicio = fopen($carpeta."/index.php","w");
				fwrite($inicio, "<!DOCTYPE html>
					<html lang=\"es\">
					<head>
						<title></title>
						<link rel=\"stylesheet\" type=\"text/css\" href=\"css/estilos.css\">
						<script type=\"text/javascript\" src=\"js/index.js\"></script>
					</head>
					<body>
					</body>
					</html>");
				fclose($inicio);

			}

			if(isset($_POST["nosotros"])){
				
				$nosotros = fopen($carpeta."/nosotros.php","w");
				fwrite($nosotros, "<!DOCTYPE html>
					<html lang=\"es\">
					<head>
						<title></title>
						<link rel=\"stylesheet\" type=\"text/css\" href=\"css/estilos.css\">
						<script type=\"text/javascript\" src=\"js/index.js\"></script>
					</head>
					<body>
					</body>
					</html>");
				fclose($nosotros);
			
			}

			if(isset($_POST["contacto"])){
				
				$contacto = fopen($carpeta."/contacto.php","w");
				fwrite($contacto, "<!DOCTYPE html>
					<html lang=\"es\">
					<head>
						<title></title>
						<link rel=\"stylesheet\" type=\"text/css\" href=\"css/estilos.css\">
						<script type=\"text/javascript\" src=\"js/index.js\"></script>
					</head>
					<body>
					</body>
					</html>");
				fclose($contacto);
			
			}

		}
	}

 	?>
 	<script>
 		location.href ="../index.php";
 		alert("proyecto creado");
 	</script>
	<?php 
}
/*
	
	if(isset($_POST["chk_mysql"])){
		mkdir($carpeta."/mysql");
		$archivo = fopen($carpeta."/mysql/conexion.php", "w");
		//codigo de conexion
		fwrite($archivo, "
				<?php
					echo 'hola mundo';
				?>
			");
		fclose($archivo);
	}
	if(isset($_POST["chk_css"])){
		mkdir($carpeta."/css");
		$archivo = fopen($carpeta."/css/estilos.css","w");
		fwrite($archivo, "body{ background-color: red; }");
		fclose($archivo);
	}
	if(isset($_POST["chk_js"])){
		mkdir($carpeta."/js");
		$archivo = fopen($carpeta."/js/index.js","w");
		fwrite($archivo, "alert('Hola');");
		fclose($archivo);
	}
	
*/

?>
