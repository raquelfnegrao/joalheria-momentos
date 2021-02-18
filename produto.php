<?php
$cabecalho_title = "Joalheria Momentos";
include("cabecalho.php");
?>
<link rel="stylesheet" href="css/produto.css">
		<div class="produto-back">
		<div class="container">
		<div class="produto">
            <h1>Colar Curto</h1>
		    <p>por apenas R$ 449,00</p>
				<form action="checkout1.php" method="POST">
				    <input type="hidden" name="nome" value="Colar Curto">
				    <input type="hidden" name="preco" value="449,00">
                <fieldset class="cores">
				<legend>Escolha a cor:</legend>
					<input type="radio" name="cor" value="vermelho" id="vermelho" checked>
						<label for="vermelho">
						<img src="img/produtos/colar_vermelho.jpeg" height="250" width="200" alt="vermelho">
						</label>
					<input type="radio" name="cor" value="verde" id="verde">
						<label for="verde">
						<img src="img/produtos/colar_verde.jpeg" height="250" width="200" alt="verde">
						</label>
					<input type="radio" name="cor" value="azul" id="azul">
						<label for="azul">
						<img src="img/produtos/colar_azul.jpeg" height="250" width="200" alt="azul">
						</label>
                </form>
				<input type="submit" class="comprar" value="Comprar">
				
                <div class="detalhes1">
			<h2>Detalhes do produto</h2>
			<p>Esse é o melhor colar que você irá comprar na sua vida.</p>
			<table>
			<thead>
				<tr>
					<th>Característica</th>
					<th>Detalhe</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Modelo</td>
					<td>Colar 7845</td>
				</tr>
				<tr>
					<td>Material</td>
					<td>Ouro e prata</td>
				</tr>
			</tbody>
			</table>
		</div>
		</div>
		</div>
		</div>
    <?php include("rodape.php"); ?>
	</body>