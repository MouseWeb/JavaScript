<!DOCTYPE html>
<html>
<head>
	<title>Aula de JavaScript</title>

	<script type="text/javascript">
		
		function ordenarNumeros(a,b){ // NO JavaScrip não existe uma variavel para ordenar números tem que criar uma function para ordenar os números Ex: o método -> ordenarNumeros faz a ordenação dos números = 2,3,5,10,40,50,60
			return a-b;
		}

		var megasena = new Array(40, 10, 3, 2, 5, 50, 60);

		megasena.sort(ordenarNumeros); // Ordenar por string Ex: 10,2,3,40,5,50,60

		alert(megasena);

	</script>
</head>
<body>

</body>
</html>