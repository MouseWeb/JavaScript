<!DOCTYPE html>
<html>
<head>
	<title>Aula de JavaScript</title>
	<script type="text/javascript">
		
		// Método para pega uma frazer de String e colocar em um Array.
		// O resultado de || .aplit(""); -> é um Array, colocar as palavas em cada bloco de um Array.

		//var frase = "Douglas coelho goveia de almeida";
		//alert(frase.split(" "));

//  -----------------------------------------------------------------------------------------------------

		//Médoto para pega a primeira palavra de um Array que tem um dado de uma String.
		var frase2 = "Leticia martins de novaes";
		var primeira_palavra = frase2.split(" ")[0]; // Define o caracter separador por Ex: .split(" ") <- espaço entre as letras ou até pode usar uma , Ex: .split(",") -> Resultado = Letcia, .

		alert("Oi, " + primeira_palavra + " Bom dia");

	</script>
</head>
<body>

</body>
</html>