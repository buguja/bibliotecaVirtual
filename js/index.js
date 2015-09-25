//window.onload= main(); //Espera que el documento esté listo para ejecutar el método

/*function main(){
	console.log("main");
}*/

/*function esValidoEmail(eMail){
	if(eMail.search(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/) == 0) {
		 return true; 
	} 
	return false;
}*/

function cargarDocument(url, form, tag){
	var xmlhttp;
	if(window.XMLHttpRequest)
		xmlhttp= new XMLHttpRequest();	//Soporte para los navegadores que no sean IE
	else
		xmlhttp= new ActiveXObject("Microsoft.XMLHTTP"); //Soporte para navegador IE
	xmlhttp.onreadystatechange= function(){
		if(xmlhttp.readyState==4 && xmlhttp.status==200){ //4=Petición finalizada y ompleta, 200=Petición procesada correctamente
			if((xmlhttp.response != "") && (tag == null)){
				alert(xmlhttp.response); //Muestra mensaje de alerta con la respuesta del servidor
			}else if(tag != null){
				tag.innerHTML= xmlhttp.response; //Muestra la respuesta del servidor, en la etiqueta especificada
				return false;
			}
			location.reload(); //Actualiza la página
		}
	}
	
	//LLamada
	xmlhttp.open("POST", url, true); //"POST":el métod de envío, "url":archivo a cargar, "true":ejecución asincrona
	xmlhttp.send(form); //Contenido del formulario a enviar
}

function enviarDato(e, tag, valor){
	e.preventDefault();//Prevenir el evento recibido de la etiqueta "a"
	var form= new FormData();
	form.append("identificador", valor); //El elemento que será manipulado en la tabla de la bd
	cargarDocument(tag.href, form, null); //Método ajax, para carga dinámica
}

function enviarForm(e, btnSumbit, idTag){
	e.preventDefault(); //Prevenir evento submit del botón
	var form= btnSumbit.parentNode; //encontrar el formulario que contiene al boton submit
	var formData= new FormData(form);
	var tag= null;
	console.log(idTag);
	if(idTag != null)
		tag= document.getElementById(idTag); //Selección de etiqueta a traves de su id
	cargarDocument(form.action, formData, tag); //Método ajax, para carga dinámica
}