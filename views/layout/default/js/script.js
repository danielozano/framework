;(function(window, $, undefined) {
	"use strict";



		/* LINKS DEL MENU */
	
	//PRIMER LINK COMO DEFAULT ACTIVE
	$("#pagina-1").addClass('active-link');

	$("#pagina-1").on('click', function (e){
		e.preventDefault();
		for(var i =0; i<=3;i++){
			$("#pagina-"+i).removeClass("active-link");
		};
		
		$("#pagina-1").addClass('active-link');
	});

	$("#pagina-2").on('click', function (e){
		e.preventDefault();
		for(var i =0; i<=3;i++){
			$("#pagina-"+i).removeClass("active-link");
		};
		
		$("#pagina-2").addClass('active-link');
	});

	$("#pagina-3").on('click', function (e){
		e.preventDefault();
		for(var i =0; i<=3;i++){
			$("#pagina-"+i).removeClass("active-link");
		};
		
		$("#pagina-3").addClass('active-link');
	});

})(window, jQuery);