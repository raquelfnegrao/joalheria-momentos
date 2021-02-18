<?php
$cabecalho_title = "Joalheria Momentos";
include("cabecalho.php");
?>
<link rel="stylesheet" href="css/produto.css">
		<div class="produto-back">
		<div class="container">
		<div class="produto">
            <h1>Anel Ouro 18K</h1>
			<p>por apenas R$ 529,00</p>
				<form action="checkout1.php" method="POST">
				    <input type="hidden" name="nome" value="Anel Ouro 18K">
				    <input type="hidden" name="preco" value="529,00">
					<label><img src="img/produtos/anel_de_ouro.jpg" height="265" width="225" alt="anel ouro 18k"></label>
					<fieldset class="tamanhos">
						<legend>Escolha o tamanho:</legend>
						<input type="range" min="12" max="18" value="14" step="2" name="tamanho" id="tamanho">
                        <output for="tamanho" name="valortamanho">16</output>
					</fieldset>
				</form>
				<input type="submit" class="comprar" value="Comprar">
				
		    <div class="detalhes1">
			    <h2>Detalhes do produto</h2>
			    <p>Esse é o melhor anel que você irá comprar na sua vida.</p>
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
				    	<td>Anel 7845</td>
				    </tr>
			    	<tr>
				    	<td>Material</td>
				    	<td>Ouro e  zircônias</td>
				    </tr>
				    <tr>
				    	<td>Peso</td>
				    	<td>1,0g</td>
				    </tr>
			    </tbody>
			    </table>
			</div>
		</div>
		</div>
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/produto.js"></script>
		<?php include("rodape.php"); ?>
	</body>
</html>