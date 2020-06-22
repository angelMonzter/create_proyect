<?php 
require 'templates/header.php';
 ?>

<!--body/container-->
    <div class="row">
       <div class="proyecto">
	       	<div class="large-12 columns border_right">
	       		<div class="large-4 columns">
			       	<input type="text" name="" placeholder="nombre del proyecto">
	       		</div>
	       		<div class="large-4 columns">
			       	<select name="" id="tipo_proyecto" onchange="mostrarProyecto();">
			       		<option value="nada" selected="">Selecciona el tipo de proyecto</option>
			       		<option value="pagina web">pagina web</option>
			       		<option value="sistema">sistema</option>
			       	</select>
	       		</div>
	       		<div class="large-4 columns">
				    <select name="" id="">
				       	<option value="MVC">MVC</option>
				       	<option value="Normal">Normal</option>
				    </select>
		       	</div>
	       	</div>
		    <div class="instrucciones_izquierda">
		    	<p>
		    		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, libero.
		    	</p>
		    </div>
       </div>
    </div>


    <div class="row">
	   <div class="carpetas">
			<div class="large-12 columns border_left">
			    <div class="large-2 columns">
					 <input type="checkbox">
					<label for="">css</label>
			    </div>
			    <div class="large-2 columns">
					 <input type="checkbox">
					<label for="">img</label>
			    </div>
			    <div class="large-2 columns">
					 <input type="checkbox">
					<label for="">js</label>
			    </div>
			    <div class="large-2 columns">
					 <input type="checkbox">
					<label for="">templates</label>
			    </div>
			    <div class="large-2 columns">
					 <input type="checkbox">
					<label for="">php</label>
			    </div>
			    <div class="large-2 columns">
					 <input type="checkbox">
					<label for="">documentos</label>
			    </div>
			</div>
			<div class="instrucciones_derecha">
		    	<p>
		    		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, libero.
		    	</p>
		    </div>
	    </div>
	</div>
	
	<div class="row">
	   <div class="sitio_web" id="sitio_web">
	    	<h3 class="subtitulo">Pagina web <small>secciones principales</small></h3>
		    <div class="secciones_principales">
			    <div class="large-12 columns border_right">
			       	<div class="large-4 columns">
					    <input type="checkbox">
					    <label for="">inicio</label>
			       	</div>
			       	<div class="large-4 columns">
					    <input type="checkbox">
					    <label for="">nosotros</label>
			       	</div>
			       	<div class="large-4 columns">
					    <input type="checkbox">
						<label for="">contacto</label>
			       	</div>
			    </div>
			    <div class="instrucciones_izquierda">
			    	<p>
			    		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, libero.
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
			    <div class="instrucciones_derecha">
			    	<p>
			    		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, libero.
			    	</p>
			    </div>
		    </div>
	    </div>

	    <div class="sitio_web" id="sistema">
	    	<h3 class="subtitulo">Sistema <small>secciones principales</small></h3>
		    <div class="secciones_principales">
			    <div class="large-12 columns border_right">
			       	<div class="large-4 columns">
					    <input type="checkbox">
					    <label for="">inicio</label>
			       	</div>
			       	<div class="large-4 columns">
					    <input type="checkbox">
					    <label for="">nosotros</label>
			       	</div>
			       	<div class="large-4 columns">
					    <input type="checkbox">
						<label for="">contacto</label>
			       	</div>
			    </div>
			    <div class="instrucciones_izquierda">
			    	<p>
			    		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, libero.
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
			    <div class="instrucciones_derecha">
			    	<p>
			    		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, libero.
			    	</p>
			    </div>
		    </div>
	    </div>

	</div>
<!--body/container-->

<?php 
require 'templates/footer.php';
 ?>
