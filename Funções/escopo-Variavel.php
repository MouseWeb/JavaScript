<!DOCTYPE html>
<html>
<head>
	<title>Aula de JavaScript</title>
	<script type="text/javascript">

		//Método Math.round() -> Arendonda para a Média.
		//Método Math.ceil() -> Arendonda sempre para Cima.
		//Método Math.floor() -> Arendonada para Baixa.
		//Método que determina um número de casas Decimais posivel -> .toFixed(2);
		
		var bonus; // Variavel criada fora da function - o escorpo da variavel pode ser GLOBAL -> Public.

		function calcularDiaria(salario,dias){
			bonus = 300; 
			return (salario/dias).toFixed(2);
		}

		var diaria = calcularDiaria(5000,22);
		
		//alert(diaria);
		alert(bonus);

		//alert(bonus); // È visivel quando declara a variavel fora da function e apenas atribui um valor dentro da function.

		//alert(bonus); // O alert(bonus); não é visivel fora da function - está recebendo um valor de uma variavel denttro da function, é visivel apenas dentro da function ou por parametro.

	</script>
</head>
<body>

</body>
</html>