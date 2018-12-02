<!DOCTYPE html>
<html>
<head>
	<title>aula de JavaScript</title>
	<script type="text/javascript">

		//Método para pega as letras de uma frase de um String.
		var frase = "Meu nome é Douglas";
		var primeira = frase.charAt(0); // O || .charAt ||(Aqui dentro vc determina qual vai ser a letra pela sua posição númericade ordem de caractere), ai faz a busca.

		// Métodom para pega uma palava dentro de uma String.
		var letra = "";
		var primeira_palavra = "";
		var i = 0;

		while ( letra != " "){
			letra = frase.charAt(i);
			primeira_palavra += letra;
			i++;
		}

		//alert(primeira);
		alert(primeira_palavra);

	</script>
</head>
<body>

</body>
</html>