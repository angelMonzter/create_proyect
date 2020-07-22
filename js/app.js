//PANTALLA 1 elegir proyecto
var web = $('.boton_web');
var sistema = $('.boton_sistema');

var seleccionar_proyecto = $('.selecciona_proyecto');

var pasos_web = $('.pasos_web');

//variables para pasar de pasos EJEMPLO: paso 1 a paso 2 ACLARACION: solo la parte de los pasos 
var paso_web_linea1 = $('.paso_web1');
var paso_web_linea2 = $('.paso_web2');
var paso_web_linea3 = $('.paso_web3');

var paso_web_inactivo1 = $('.paso_web_inactivo1');
var paso_web_inactivo2 = $('.paso_web_inactivo2');
var paso_web_inactivo3 = $('.paso_web_inactivo3');
var paso_web_inactivo4 = $('.paso_web_inactivo4');

//variables para pasar de un div a otro
var web_paso1 = $('#web_paso1');
var web_paso2 = $('#web_paso2');
var web_paso3 = $('#web_paso3');
var web_paso4 = $('#web_paso4');

//botones para al dar clic se cambie el div
var web_boton_paso2 = $('.web_boton_paso2');
var web_boton_paso3 = $('.web_boton_paso3');
var web_boton_paso4 = $('.web_boton_paso4');

//PANTALLA 2 elegir caracteristicas de proyecto
web.click(function() {
    if (seleccionar_proyecto.css("display", "block")) {
        seleccionar_proyecto.css("display", "none");
    	if (pasos_web.css("display", "none")) {
    		pasos_web.css("display", "block");
    		web_paso1.css("display", "block");
    	}
    }
})

web_boton_paso2.on('click', function () {
	event.preventDefault();
	
	if (web_paso1.css("display", "block")) {
        web_paso1.css("display", "none");
    	if (web_paso2.css("display", "none")) {
    		web_paso2.css("display", "block");
    		web_paso1.css("display", "none");
            paso_web_linea2.addClass('paso_activo_linea');
            paso_web_inactivo2.addClass('paso_activo');
    	}
    }
});

web_boton_paso3.on('click', function () {
	event.preventDefault();
	
	if (web_paso2.css("display", "block")) {
        web_paso2.css("display", "none");
    	if (web_paso3.css("display", "none")) {
    		web_paso3.css("display", "block");
    		web_paso2.css("display", "none");
            paso_web_linea3.addClass('paso_activo_linea');
            paso_web_inactivo3.addClass('paso_activo');
    	}
    }
});

web_boton_paso4.on('click', function () {
	event.preventDefault();
	
	if (web_paso3.css("display", "block")) {
        web_paso3.css("display", "none");
    	if (web_paso4.css("display", "none")) {
    		web_paso4.css("display", "block");
    		web_paso3.css("display", "none");
            paso_web_inactivo4.addClass('paso_activo');
    	}
    }
});

