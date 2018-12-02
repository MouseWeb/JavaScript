<!DOCTYPE html>
<html>
<head>
	<title>aula de JavaScript</title>
	<script type="text/javascript">

		var sorteio;
		var mega = new Array();

		var i = 0;

		while( i < 6 ){

			sorteio = Math.ceil(Math.random() * 60);
			if ( mega.indexOf(sorteio) < 0 ) { // Se o indexOf quando fizer a consulta for -1 que significa que o número sorteado não existe então passara para o PUSH e add mais um número no sorteio, um número diferente. 
				mega.push(sorteio);
				i++;
			}
		}

		function ordenarNumeros(a,b){ 
			return a-b;
		}

		mega.sort(ordenarNumeros);
		alert(mega);

	</script>
</head>
<body>

</body>
</html>