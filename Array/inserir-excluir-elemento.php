<!DOCTYPE html>
<html>
<head>
	<title>Aula de JavaScript</title>

	<script type="text/javascript">
		var salada = ["uva","morango","banana","maçan"]; 

		//adicionar no final
		salada.push("manga");
		
		//adicionar no inicio
		salada.unshift("Laranja");

		//excluir o útimo elemento do seu Array.
		salada.pop();

		//excluir o primeiro elemento
		salada.shift();

		alert(salada);
		//alert("Números de elementos: " + salada.length); -> Retronar o numero de elementos dentro de um Array.
		
	</script>
</head>
<body>

</body>
</html>