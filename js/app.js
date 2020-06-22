var tipoProyecto = document.getElementById('tipo_proyecto');
var sitio_web = document.getElementById('sitio_web');
var sistema = document.getElementById('sistema');

function mostrarProyecto() {
	if (tipo_proyecto.value == "pagina web") {
		sitio_web.style.display = 'block';
		sistema.style.display = 'none';
	}
	if (tipo_proyecto.value == "sistema") {
		sistema.style.display = 'block';
		sitio_web.style.display = 'none';
	}
}
