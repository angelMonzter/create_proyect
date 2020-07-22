//pantalla 1 elegir proyecto
var web = $('.boton_web');
var sistema = $('.boton_sistema');

var seleccionar_proyecto = $('.selecciona_proyecto');

var pasos_web = $('.pasos_web');
var web_paso1 = $('#web_paso1');
var web_paso2 = $('#web_paso2');
var web_paso3 = $('#web_paso3');
var web_paso4 = $('#web_paso4');

//botones
var web_boton_paso2 = $('.web_boton_paso2');
var web_boton_paso3 = $('.web_boton_paso3');
var web_boton_paso4 = $('.web_boton_paso4');

//pantalla 2 caracteristicas de proyecto
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
    	}
    }
});

