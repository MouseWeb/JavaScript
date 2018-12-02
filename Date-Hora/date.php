<!DOCTYPE html>
<html>
<head>
	<title>Aula de JavaScrip</title>
	<script type="text/javascript">
		
		// Método para pega a data e informações referente a Data.
		// data.getFullYear() -> retorna o formato de Ano Ex: 2018.
		// data.getMonth() -> retorna um Array com bloco de 0 - 11, por Ex: (0) vale igual a Janeiro e (11) é Dezembro.
		// data.getDate() -> retorna o dia do mês de 1 - 31.
		// data.getday() -> retorna um intervalo entre 0 a 6 que são os dias da semana por Ex: (0) -> Dom, (1) -> Seg e (6) -> Sáb.

		// Método para retorna o ANO
		//var data = new Date();
		//alert(data.getFullYear());

		// Método para retorna o MÊS
		var meses = ["JANEIRO", "FEVEREIRO", "MARÇO", "ABRIU", "MAIO", "JUNHO","JULHO","AGOSTO","SETEMBRO","OUTUBRO","NOVEMBRO","DEZEMBRO"]
		var semana = ["DOMINGO","SEGUNDA-FEIRA","TERÇA-FEIRA","QUARTA-FEIRA","QUINTA-FEIRA","SEXTA-FEIRA","SÁBADO"]
		
		var data = new Date(); // Classe (Date) -> cria um objeto de data.
		alert(data.getDate() + " de " + meses[data.getMonth()] + " de " + data.getFullYear());

		var aniversario = new Date(1993,6,17);
		alert("Dia da semana em que você nasceu " + semana[aniversario.getDay()] + " Seu dia da semana");

		// Método para retorna o DIA
		//var data = new Date();
		//alert(data.getDate());

		// Método para retorna o DIA DA SEMANA
		//var data = new Date();
		//alert(data.getDay());

	</script>
</head>
<body>

</body>
</html>