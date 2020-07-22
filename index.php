<?php 
require 'templates/header.php';
 ?>

<!--body/container-->
<form action="php/creador.php" method="post">
    <div class="row">
       <div class="proyecto">
	       	<div class="large-12 columns border_right">
	       		<div class="large-4 medium-4 small-12 columns">
			       	<input type="text" name="nombre" placeholder="nombre del proyecto">
	       		</div>
	       		<div class="large-4 medium-4 small-12 columns">
			       	<select name="tipo_proyecto" id="tipo_proyecto" onchange="mostrarProyecto();">
			       		<option value="nada" selected="">Selecciona el tipo de proyecto</option>
			       		<option value="pagina web">pagina web</option>
			       		<option value="sistema">sistema</option>
			       	</select>
	       		</div>
	       		<div class="large-4 medium-4 small-12 columns">
				    <select name="forma_proyecto" id="">
				       	<option value="mvc">MVC</option>
				       	<option value="normal">Normal</option>
				    </select>
		       	</div>
	       	</div>
		    <div class="instrucciones_izquierda" style="height: 115px!important; padding: 15px;">
		    	<p>
		    		Agrega el nombre de tu proyecto, el tipo y en que formato de programacion vas a realizarlo.
		    	</p>
		    </div>
       </div>
    </div>


    <div class="row">
	   <div class="carpetas">
			<div class="large-12 columns border_left">
			    <div class="large-2 columns">
					<input type="checkbox" name="css" id="css">
					<label for="css">css</label>
					<div>
						<input type="radio" name="styles" id="styles">
						<label for="styles">styles.css</label>
					</div>
			    </div>
			    <div class="large-2 columns">
					 <input type="checkbox" name="img" id="img">
					<label for="img">img</label>
			    </div>
			    <div class="large-2 columns">
					 <input type="checkbox" name="js" id="js">
					<label for="js">js</label>
			    </div>
			    <div class="large-2 columns">
					 <input type="checkbox" name="templates" id="templates">
					<label for="templates">templates</label>
			    </div>
			    <div class="large-2 columns">
					 <input type="checkbox" name="php" id="php">
					<label for="php">php</label>
			    </div>
			    <div class="large-2 columns">
					 <input type="checkbox" name="documentos" id="documentos">
					<label for="documentos">documentos</label>
			    </div>
			</div>
			<div class="instrucciones_derecha" style="height: 115px!important;">
		    	<p>
		    		Selecciona las carpetas que tu proyecto necesita.
		    	</p>
		    </div>
	    </div>
	</div>
	
	<div class="row">
	   <div class="sitio_web" id="sitio_web">
	    	<h3 class="subtitulo">Pagina web <small>secciones principales</small></h3>
		    <div class="secciones_principales">
			    <div class="large-12 columns border_right">
			       	<div class="large-4 medium-4 small-12 columns">
					    <input type="checkbox" name="inicio" id="inicio">
					    <label for="">inicio</label>
			       	</div>
			       	<div class="large-4 medium-4 small-12 columns">
					    <input type="checkbox" name="nosotros" id="nosotros">
					    <label for="">nosotros</label>
			       	</div>
			       	<div class="large-4 medium-4 small-12 columns">
					    <input type="checkbox" name="contacto" id="contacto">
						<label for="">contacto</label>
			       	</div>
			    </div>
			    <div class="instrucciones_izquierda" style="height: 115px!important;">
			    	<p>
			    		Selecciona las paginas de tu proyecto.
			    	</p>
			    </div>
		    </div>

		    <div class="seo">
		    	<div class="large-12 columns border_left">
		    		<div class="large-6 columns">
			       		<input type="text" name="" placeholder="Alt de imagenes">
	       			</div>
	       			<div class="large-6 columns">
	       				<select name="" id="">
					       	<option value="Meta tags">Meta tags</option>
					       	<option value="Normal">Normal</option>
					    </select>
	       			</div>
		    	</div>
			    <div class="instrucciones_derecha" style="height: 115px!important;">
			    	<p>
			    		Optimización SEO, genera automaticamente los meta tags y alts para tu sitio.
			    	</p>
			    </div>
		    </div>
	    </div>

	    <div class="sitio_web" id="sistema">
	    	<h3 class="subtitulo">Sistema <small>modulos principales</small></h3>
		    <div class="secciones_principales">
			    <div class="large-12 columns border_right">
			       	<div>
			       		<div class="large-4 medium-4 small-12 columns">
						    <input type="checkbox">
						    <label for="">login</label>
				       	</div>
				       	<div class="large-4 medium-4 small-12 columns">
						    <input type="checkbox">
						    <label for="">olvide contraseña</label>
				       	</div>
				       	<div class="large-4 medium-4 small-12 columns">
						    <input type="checkbox">
							<label for="">administradores</label>
				       	</div>
			       	</div>
			       	<div>
			       		<div class="large-4 medium-4 small-12 columns">
						    <input type="checkbox">
						    <label for="">clientes</label>
				       	</div>
				       	<div class="large-4 medium-4 small-12 columns">
						    <input type="checkbox">
						    <label for="">proveedores</label>
				       	</div>
				       	<div class="large-4 medium-4 small-12 columns">
						    <input type="checkbox">
							<label for="">empleados</label>
				       	</div>
			       	</div>
			       	<div>
			       		<div class="large-4 medium-4 small-12 columns">
						    <input type="checkbox">
						    <label for="">ventas</label>
				       	</div>
				       	<div class="large-4 medium-4 small-12 columns">
						    <input type="checkbox">
						    <label for="">cuentas por cobrar</label>
				       	</div>
				       	<div class="large-4 medium-4 small-12 columns">
						    <input type="checkbox">
							<label for="">cuentas por pagar</label>
				       	</div>
			       	</div>
			    </div>
			    <div class="instrucciones_izquierda">
			    	<p>
			    		Elige los modulos principales de tu sistema
			    	</p>
			    </div>
		    </div>
		    
	    </div>

	</div>
	<br>
	<div class="row">
	   <input style="background-color: white; color: black;" type="submit" id="datos" name="crear" value="Crear proyecto" class="button small">
	</div>
</form>

<form action="php/comprimir.php" method="post">
	<div class="row">
		<input style="background-color: green; color: black;" type="submit" name="comprimir" value="Comprimir para descargar" class="button small">
	</div>
</form>
<!--body/container-->

<?php 
require 'templates/footer.php';
 ?>
