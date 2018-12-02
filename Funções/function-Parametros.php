<!DOCTYPE html>
<html>
<head>
	<title>Aula de JavaScript</title>
	<script type="text/javascript">

		//Método Math.round() -> Arendonda para a Média.
		//Método Math.ceil() -> Arendonda sempre para Cima.
		//Método Math.floor() -> Arendonada para Baixa.
		//Método que determina um número de casas Decimais posivel -> .toFixed(2);
		
		function calcularDiaria(salario,dias){ // <- Passando parametro para a function Ex: calcularDiaria(salario,dias) que recebe = calcularDiaria(5000,22); || salario = 5000 e dias = 22.
			return (salario/dias).toFixed(2);
		}

		var diaria = calcularDiaria(5000,22);
		alert(diaria);

	</script>
</head>
<body>

</body>
</html>