<!DOCTYPE html>
<html>
<head>
	<title>Aula de JavaScript</title>
	<script type="text/javascript">

		//Método para tranforma a frase em letra maiúscula.
		//var nome = "douglas coleho goveia de almeida";

		//alert(nome.toUpperCase());

		// -----------------------------------------------------

		//Método para tranforma a frase em letra menúsculas.
		//var nome = "Douglas Coleho Goveia de Almeida";

		//alert(nome.toLowerCase());

		// -----------------------------------------------------

		//Método para tranforma a primeira letra da frase em maiúscula.
		var nome = "douglas coleho goveia de almeida";
		var letras_minusculas = nome.toLowerCase(); // Primeiro passo trasforma tudo em letras menúsculas.
		var primeira = letras_minusculas.charAt(0).toUpperCase();

		alert(primeira + letras_minusculas.substr(1,letras_minusculas.length));

	</script>
</head>
<body>

</body>
</html>