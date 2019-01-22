function myMap() {
var mapProp= {
  center:new google.maps.LatLng(-2.1331924,-79.930191),
  zoom:5,
};

var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}

function setearNoticia(titulo, descripcion) {
	$('h3#titulo_noticia').text(titulo);
	$('p#descripcion_noticia').text(descripcion);
}

function cargarPrimerNoticia() {
	var h3 = document.getElementById('titulo_noticia')
   	h3.setAttribute("name", "titulo1");  
   	$.getJSON( "../static/data/noticias.json", function( data ) {
   	  setearNoticia(data[0]['titulo1'], data[0]['descripcion1']);       	 
  	});
}

function cargarNoticia(num){
	var h3 = document.getElementById('titulo_noticia')
   	h3.setAttribute("name", "titulo"+num);     
	var new_titulo = 'titulo'+num;
	var new_descripcion = 'descripcion'+num;	
	console.log(new_titulo);
	console.log(new_descripcion);
	$.getJSON( "../static/data/noticias.json", function( data ) {
		//console.log(data[0][new_titulo]);
		//console.log(data[0][new_descripcion]);		
   	  setearNoticia(data[parseInt(num-1)][new_titulo], data[parseInt(num-1)][new_descripcion]);     	  
  	});
}

$(document).ready(function(){
	myMap();
	cargarPrimerNoticia();
	$('button#id_cambiar').click(function(e){
		console.log('entra')
		var num_verf = $("#titulo_noticia").attr("name");
		console.log(num_verf);
		var titulo = 'titulo';
		console.log(titulo)
		var num_noticia = '3';
		console.log(num_noticia)
		console.log(titulo+num_noticia)
		if(num_verf == titulo+num_noticia){
			cargarNoticia('1')
		}else{
			var num = (parseInt(num_verf.substring(titulo.length,titulo.length+1))+1).toString();
			console.log(num)
			cargarNoticia(num);
		}
		return false;
	})
});