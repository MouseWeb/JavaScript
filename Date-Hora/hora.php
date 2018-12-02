<!DOCTYPE html>
<html>
<head>
	<title>Aula de JavaScript</title>
	<script type="text/javascript">
		
		// Método para retorna a Hora e informações do horario.
		// hora.getHours() -> retorna a hora no formato de 12 horas.
		// hora.getMinutes() -> retorna os minutos no formato de 0 - 59, por Ex: 0 = 1 minuto.
		// hora.getSeconds() -> retorna os segundos no formato de 0 - 59, por Ex: 0 = 1 segundo.

		// Fução para colocar o número (0) se na frente do horario se for menor que 10.
		function setDoisDigitos(tempo){
			if ( tempo < 10 ) {
				return "0" + tempo;
			}else{
				return tempo;
			}
		}

		//Método para retorna a HORA - MENUTOS - SEGUNDOS
		var hora = new Date(); // Classe (Date) -> cria um objeto de hora.
		alert(setDoisDigitos(hora.getHours()) + " : " + setDoisDigitos(hora.getMinutes()) + " : " + hora.getSeconds());

	</script>
</head>
<body>

</body>
</html>