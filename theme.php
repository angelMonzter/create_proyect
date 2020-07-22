<?php 
require 'templates/header.php';
 ?>

<!--body/container-->

	<div align="center" class="row selecciona_proyecto">
		<h2>selecciona tu proyecto</h2>
		
		<div class="botones">
			<div class="large-6 columns">
				<input type="submit" value="Pagina Web" class="boton boton_web">
			</div>
			<div class="large-6 columns">
				<input type="submit" value="Sistema" class="boton boton_sistema">	
			</div>
		</div>
	</div>


	<!--SECCION WEB-->
	<div align="center" class="web">
		<div class="row pasos pasos_web">
			<div class="large-3 columns paso_web1 paso_activo_linea">
				<div class="paso_activo paso_web_inactivo1">
					<p>1</p>
				</div>
			</div>
			<div class="large-3 columns paso_web2">
				<div class="paso_web_inactivo2">
					<p>2</p>
				</div>
			</div>
			<div class="large-3 columns paso_web3">
				<div class="paso_web_inactivo3">
					<p>3</p>
				</div>
			</div>
			<div class="large-3 columns paso_web4">
				<div class="paso_web_inactivo4"> 
					<p>4</p>
				</div>
			</div>
		</div>
		
		<form action="php/creador.php" method="post">
			
			<div class="row caja" id="web_paso1">
				<h3>hola</h3>

				<div class="">
					<div class="inputs">
						<label for="hola">hola</label>
						<input type="text" placeholder="hola" id="hola">
					</div>
					<div class="inputs">
						<label for="hola">hola</label>
						<select name="" id="">
							<option value="hola">hola1</option>
							<option value="hola">hola1</option>
							<option value="hola">hola1</option>
						</select>
					</div>
					<div class="inputs">
						<label for="hola3">hola3</label>
						<input type="text" placeholder="hola3" id="hola3">
					</div>
				</div>
				<div class="botones">
					<div class="large-6 columns">
						<a href="#!" class="boton">Anterior</a>
					</div>
					<div class="large-6 columns">
						<a href="#!" class="boton web_boton_paso2">Siguiente</a>
					</div>
				</div>				
			</div>

			<div class="row caja checkbox" id="web_paso2">
				<h3>hola</h3>

				<div class="container_checkbox">
					<div class="large-4 columns">
						<label class="custom_checkbox">
						    <!-- Input oculto -->
						    <input class="custom_checkbox_input" type="checkbox">
						    <!-- Imagen en sustitucion -->
						    <span class="custom_checkbox_show custom_checkbox_show_b"></span>
						    <!-- Texto -->
						    <span class="custom_checkbox_text">hola1</span>
						</label>
					</div>
					<div class="large-4 columns">
						<label class="custom_checkbox">
						    <!-- Input oculto -->
						    <input class="custom_checkbox_input" type="checkbox">
						    <!-- Imagen en sustitucion -->
						    <span class="custom_checkbox_show custom_checkbox_show_b"></span>
						    <!-- Texto -->
						    <span class="custom_checkbox_text">hola1</span>
						</label>
					</div>
					<div class="large-4 columns">
						<label class="custom_checkbox">
						    <!-- Input oculto -->
						    <input class="custom_checkbox_input" type="checkbox">
						    <!-- Imagen en sustitucion -->
						    <span class="custom_checkbox_show custom_checkbox_show_b"></span>
						    <!-- Texto -->
						    <span class="custom_checkbox_text">hola1</span>
						</label>
					</div>
				</div>
				<div class="container_checkbox">
					<div class="large-4 columns">
						<label class="custom_checkbox">
						    <!-- Input oculto -->
						    <input class="custom_checkbox_input" type="checkbox">
						    <!-- Imagen en sustitucion -->
						    <span class="custom_checkbox_show custom_checkbox_show_b"></span>
						    <!-- Texto -->
						    <span class="custom_checkbox_text">hola1</span>
						</label>
					</div>
					<div class="large-4 columns">
						<label class="custom_checkbox">
						    <!-- Input oculto -->
						    <input class="custom_checkbox_input" type="checkbox">
						    <!-- Imagen en sustitucion -->
						    <span class="custom_checkbox_show custom_checkbox_show_b"></span>
						    <!-- Texto -->
						    <span class="custom_checkbox_text">hola1</span>
						</label>
					</div>
					<div class="large-4 columns">
						<label class="custom_checkbox">
						    <!-- Input oculto -->
						    <input class="custom_checkbox_input" type="checkbox">
						    <!-- Imagen en sustitucion -->
						    <span class="custom_checkbox_show custom_checkbox_show_b"></span>
						    <!-- Texto -->
						    <span class="custom_checkbox_text">hola1</span>
						</label>
					</div>
				</div>
				<div class="botones">
					<div class="large-6 columns">
						<a href="#!" class="boton">Anterior</a>
					</div>
					<div class="large-6 columns">
						<a href="#!" class="boton web_boton_paso3">Siguiente</a>
					</div>
				</div>			
			</div>

			<div class="row caja checkbox" id="web_paso3">
				<h3>hola</h3>

				<div class="container_checkbox">
					<div class="large-4 columns">
						<label class="custom_checkbox">
						    <!-- Input oculto -->
						    <input class="custom_checkbox_input" type="checkbox">
						    <!-- Imagen en sustitucion -->
						    <span class="custom_checkbox_show custom_checkbox_show_b"></span>
						    <!-- Texto -->
						    <span class="custom_checkbox_text">hola1</span>
						</label>
					</div>
					<div class="large-4 columns">
						<label class="custom_checkbox">
						    <!-- Input oculto -->
						    <input class="custom_checkbox_input" type="checkbox">
						    <!-- Imagen en sustitucion -->
						    <span class="custom_checkbox_show custom_checkbox_show_b"></span>
						    <!-- Texto -->
						    <span class="custom_checkbox_text">hola1</span>
						</label>
					</div>
					<div class="large-4 columns">
						<label class="custom_checkbox">
						    <!-- Input oculto -->
						    <input class="custom_checkbox_input" type="checkbox">
						    <!-- Imagen en sustitucion -->
						    <span class="custom_checkbox_show custom_checkbox_show_b"></span>
						    <!-- Texto -->
						    <span class="custom_checkbox_text">hola1</span>
						</label>
					</div>
				</div>
				<div class="container_checkbox">
					<div class="large-4 columns">
						<label class="custom_checkbox">
						    <!-- Input oculto -->
						    <input class="custom_checkbox_input" type="checkbox">
						    <!-- Imagen en sustitucion -->
						    <span class="custom_checkbox_show custom_checkbox_show_b"></span>
						    <!-- Texto -->
						    <span class="custom_checkbox_text">hola1</span>
						</label>
					</div>
					<div class="large-4 columns">
						<label class="custom_checkbox">
						    <!-- Input oculto -->
						    <input class="custom_checkbox_input" type="checkbox">
						    <!-- Imagen en sustitucion -->
						    <span class="custom_checkbox_show custom_checkbox_show_b"></span>
						    <!-- Texto -->
						    <span class="custom_checkbox_text">hola1</span>
						</label>
					</div>
					<div class="large-4 columns">
						<label class="custom_checkbox">
						    <!-- Input oculto -->
						    <input class="custom_checkbox_input" type="checkbox">
						    <!-- Imagen en sustitucion -->
						    <span class="custom_checkbox_show custom_checkbox_show_b"></span>
						    <!-- Texto -->
						    <span class="custom_checkbox_text">hola1</span>
						</label>
					</div>
				</div>
				<div class="botones">
					<div class="large-6 columns">
						<a href="#!" class="boton">Anterior</a>
					</div>
					<div class="large-6 columns">
						<a href="#!" class="boton web_boton_paso4">Siguiente</a>
					</div>
				</div>			
			</div>

			<div class="row caja" id="web_paso4">
				<h3>hola</h3>

				<div class="">
					<div class="inputs">
						<label for="hola">hola</label>
						<input type="text" placeholder="hola" id="hola">
					</div>
					<div class="inputs">
						<label for="hola">hola</label>
						<select name="" id="">
							<option value="hola">hola1</option>
							<option value="hola">hola1</option>
							<option value="hola">hola1</option>
						</select>
					</div>
					<div class="inputs">
						<label for="hola3">hola3</label>
						<input type="text" placeholder="hola3" id="hola3">
					</div>
				</div>
				<div class="botones">
					<div class="large-6 columns">
						<a href="#!" class="boton">Anterior</a>
					</div>
					<div class="large-6 columns">
						<input type="submit" value="Crear proyecto" class="boton web_boton_paso5">
					</div>
				</div>				
			</div>
		</form>
	</div>
	<!--SECCION WEB-->

	<!--SECCION SISTEMA-->
	<div align="center" class="sistema">
		<div class="row pasos pasos_sistema">
			<div class="large-3 columns paso_sistema1 paso_activo_linea">
				<div class="paso_activo paso_sistema_inactivo1">
					<p>1</p>
				</div>
			</div>
			<div class="large-3 columns paso_sistema2">
				<div class="paso_sistema_inactivo2">
					<p>2</p>
				</div>
			</div>
			<div class="large-3 columns paso_sistema3">
				<div class="paso_sistema_inactivo3">
					<p>3</p>
				</div>
			</div>
			<div class="large-3 columns paso_sistema4">
				<div class="paso_sistema_inactivo4"> 
					<p>4</p>
				</div>
			</div>
		</div>
		
		<form action="php/creador.php" method="post">
			
			<div class="row caja" id="sistema_paso1">
				<h3>hola</h3>

				<div class="">
					<div class="inputs">
						<label for="hola">hola</label>
						<input type="text" placeholder="hola" id="hola">
					</div>
					<div class="inputs">
						<label for="hola">hola</label>
						<select name="" id="">
							<option value="hola">hola1</option>
							<option value="hola">hola1</option>
							<option value="hola">hola1</option>
						</select>
					</div>
					<div class="inputs">
						<label for="hola3">hola3</label>
						<input type="text" placeholder="hola3" id="hola3">
					</div>
				</div>
				<div class="botones">
					<div class="large-6 columns">
						<a href="#!" class="boton">Anterior</a>
					</div>
					<div class="large-6 columns">
						<a href="#!" class="boton sistema_boton_paso2">Siguiente</a>
					</div>
				</div>				
			</div>

			<div class="row caja checkbox" id="sistema_paso2">
				<h3>hola</h3>

				<div class="container_checkbox">
					<div class="large-4 columns">
						<label class="custom_checkbox">
						    <!-- Input oculto -->
						    <input class="custom_checkbox_input" type="checkbox">
						    <!-- Imagen en sustitucion -->
						    <span class="custom_checkbox_show custom_checkbox_show_b"></span>
						    <!-- Texto -->
						    <span class="custom_checkbox_text">hola1</span>
						</label>
					</div>
					<div class="large-4 columns">
						<label class="custom_checkbox">
						    <!-- Input oculto -->
						    <input class="custom_checkbox_input" type="checkbox">
						    <!-- Imagen en sustitucion -->
						    <span class="custom_checkbox_show custom_checkbox_show_b"></span>
						    <!-- Texto -->
						    <span class="custom_checkbox_text">hola1</span>
						</label>
					</div>
					<div class="large-4 columns">
						<label class="custom_checkbox">
						    <!-- Input oculto -->
						    <input class="custom_checkbox_input" type="checkbox">
						    <!-- Imagen en sustitucion -->
						    <span class="custom_checkbox_show custom_checkbox_show_b"></span>
						    <!-- Texto -->
						    <span class="custom_checkbox_text">hola1</span>
						</label>
					</div>
				</div>
				<div class="container_checkbox">
					<div class="large-4 columns">
						<label class="custom_checkbox">
						    <!-- Input oculto -->
						    <input class="custom_checkbox_input" type="checkbox">
						    <!-- Imagen en sustitucion -->
						    <span class="custom_checkbox_show custom_checkbox_show_b"></span>
						    <!-- Texto -->
						    <span class="custom_checkbox_text">hola1</span>
						</label>
					</div>
					<div class="large-4 columns">
						<label class="custom_checkbox">
						    <!-- Input oculto -->
						    <input class="custom_checkbox_input" type="checkbox">
						    <!-- Imagen en sustitucion -->
						    <span class="custom_checkbox_show custom_checkbox_show_b"></span>
						    <!-- Texto -->
						    <span class="custom_checkbox_text">hola1</span>
						</label>
					</div>
					<div class="large-4 columns">
						<label class="custom_checkbox">
						    <!-- Input oculto -->
						    <input class="custom_checkbox_input" type="checkbox">
						    <!-- Imagen en sustitucion -->
						    <span class="custom_checkbox_show custom_checkbox_show_b"></span>
						    <!-- Texto -->
						    <span class="custom_checkbox_text">hola1</span>
						</label>
					</div>
				</div>
				<div class="botones">
					<div class="large-6 columns">
						<a href="#!" class="boton">Anterior</a>
					</div>
					<div class="large-6 columns">
						<a href="#!" class="boton sistema_boton_paso3">Siguiente</a>
					</div>
				</div>			
			</div>

			<div class="row caja checkbox" id="sistema_paso3">
				<h3>hola</h3>

				<div class="container_checkbox">
					<div class="large-4 columns">
						<label class="custom_checkbox">
						    <!-- Input oculto -->
						    <input class="custom_checkbox_input" type="checkbox">
						    <!-- Imagen en sustitucion -->
						    <span class="custom_checkbox_show custom_checkbox_show_b"></span>
						    <!-- Texto -->
						    <span class="custom_checkbox_text">hola1</span>
						</label>
					</div>
					<div class="large-4 columns">
						<label class="custom_checkbox">
						    <!-- Input oculto -->
						    <input class="custom_checkbox_input" type="checkbox">
						    <!-- Imagen en sustitucion -->
						    <span class="custom_checkbox_show custom_checkbox_show_b"></span>
						    <!-- Texto -->
						    <span class="custom_checkbox_text">hola1</span>
						</label>
					</div>
					<div class="large-4 columns">
						<label class="custom_checkbox">
						    <!-- Input oculto -->
						    <input class="custom_checkbox_input" type="checkbox">
						    <!-- Imagen en sustitucion -->
						    <span class="custom_checkbox_show custom_checkbox_show_b"></span>
						    <!-- Texto -->
						    <span class="custom_checkbox_text">hola1</span>
						</label>
					</div>
				</div>
				<div class="container_checkbox">
					<div class="large-4 columns">
						<label class="custom_checkbox">
						    <!-- Input oculto -->
						    <input class="custom_checkbox_input" type="checkbox">
						    <!-- Imagen en sustitucion -->
						    <span class="custom_checkbox_show custom_checkbox_show_b"></span>
						    <!-- Texto -->
						    <span class="custom_checkbox_text">hola1</span>
						</label>
					</div>
					<div class="large-4 columns">
						<label class="custom_checkbox">
						    <!-- Input oculto -->
						    <input class="custom_checkbox_input" type="checkbox">
						    <!-- Imagen en sustitucion -->
						    <span class="custom_checkbox_show custom_checkbox_show_b"></span>
						    <!-- Texto -->
						    <span class="custom_checkbox_text">hola1</span>
						</label>
					</div>
					<div class="large-4 columns">
						<label class="custom_checkbox">
						    <!-- Input oculto -->
						    <input class="custom_checkbox_input" type="checkbox">
						    <!-- Imagen en sustitucion -->
						    <span class="custom_checkbox_show custom_checkbox_show_b"></span>
						    <!-- Texto -->
						    <span class="custom_checkbox_text">hola1</span>
						</label>
					</div>
				</div>
				<div class="botones">
					<div class="large-6 columns">
						<a href="#!" class="boton">Anterior</a>
					</div>
					<div class="large-6 columns">
						<a href="#!" class="boton sistema_boton_paso4">Siguiente</a>
					</div>
				</div>			
			</div>

			<div class="row caja" id="sistema_paso4">
				<h3>hola</h3>

				<div class="">
					<div class="inputs">
						<label for="hola">hola</label>
						<input type="text" placeholder="hola" id="hola">
					</div>
					<div class="inputs">
						<label for="hola">hola</label>
						<select name="" id="">
							<option value="hola">hola1</option>
							<option value="hola">hola1</option>
							<option value="hola">hola1</option>
						</select>
					</div>
					<div class="inputs">
						<label for="hola3">hola3</label>
						<input type="text" placeholder="hola3" id="hola3">
					</div>
				</div>
				<div class="botones">
					<div class="large-6 columns">
						<a href="#!" class="boton">Anterior</a>
					</div>
					<div class="large-6 columns">
						<input type="submit" value="Crear proyecto" class="boton sistema_boton_paso5">
					</div>
				</div>				
			</div>
		</form>
	</div>
	<!--SECCION SISTEMA-->

<!--body/container-->

<?php 
require 'templates/footer.php';
 ?>
