<!DOCTYPE html>
<html>
<head>
	<title>Aula de JavaScript</title>
	<script type="text/javascript">
		
		// Cria um objeto na memoria chamado PRODUTO que armazena seus valores.
		var produto = new Object();

		produto.nome = "Caneta"; // Atribuição de valos da o objeto produto.
		produto.preco = 2.99;
		produto.cor = "preto";

		// nome, preco, cor -> é propriedade do objeto produto.
		// retornarInfor() -> é um método. 
		// produto -> é um objeto criado na memória.

		function retornarInfo(){ // Função retorna a informação que é o valor que está dentro do objeto.
			return "Meu produto " +  this.nome + ", custa: " + this.preco; // Retorna o valor armazenado em .nome no objeto produto.
		}

		produto.info = retornarInfo; // Atribui o retorno, o valor que está no método retorno.info passa os valores para a variavel -> produto.info.

		alert(produto.info());

	</script>
</head>
<body>

</body>
</html>