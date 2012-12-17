<html>
<head>
<title>CargaVariable</title>
<script src="jquery.js" type="text/javascript"></script>	
<script>
	function llamada(){
	// Esta función recupera la variable $_SERVER y la carga dentro de la página al pulsar el botón.
	
		var resultado="";
		$.getJSON("devuelve_valor.php", function(datos){
			for(var index in datos){
				resultado += (index + " "+ datos[index] +" ");
				}
				document.getElementById("respuesta").innerHTML=resultado;
			});
	
	
		}

</script>
 
</head>

<body>

	<div id="respuesta" style="padding: 10px;"></div>
	<br>
	<form>
		<input type="button" value="Cargar variable $_SERVER" onClick="$('#respuesta').html(llamada())">
		<input type="button" value="Limpiar Valor" onClick="document.getElementById('respuesta').innerHTML=''">
	</form>

</body>
</html>
