<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<title>Joalheria Momentos</title>
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/estilosM.css">
		<link rel="stylesheet" href="css/mobile.css" media="(max-width: 939px)">
		<link rel="stylesheet" href="css/produto.css">
	</head>
	<body>
    <header class="container">
    <h1>
    <img src="img/logp.jpg" height="200" width="250" alt="Joalheria Momentos">
    </h1>
    <p class="sacola">
    Nenhum item na sacola de compras
    <img src="img/sacola.png" alt="sacola de compras">
    </p>
    <nav class="menu-opcoes">
        <ul>
            <li><a href="#">Sua Conta</a></li>
            <li><a href="#">Lista de Desejos</a></li>
            <li><a href="#">Cartão Fidelidade</a></li>
            <li><a href="sobre.php">História</a></li>
            <li><a href="#">Ajuda</a></li>
        </ul>
    </nav>
	</header>
		<?php
		$cabecalho_title = "Produto da Joalheria Momentos";
		?>
		<div class="produto-back">
		<div class="container paineis">
            <section class="painel imagens">
				<form action="checkout.php" method="POST">
                <center><img src="img/produtos/anel_bike.jpg" height="265" width="225" alt="anel ouro 18k"></center>
				</form>
            </section>   
            <section class="painel legendas">
                <form action="checkout.php" method="POST">
                    <h1>Anel Bike 18K</h1>
			        <p>por apenas R$ 1429,90</p>
                    <input type="hidden" name="nome" value="Anel Bike 18K">
				    <input type="hidden" name="preco" value="1429,90">
					    <fieldset class="tamanhos">
						    <legend>Escolha o tamanho:</legend>
						    <input type="range" min="12" max="18" value="14" step="2" name="tamanho" id="tamanho">
                            <output for="tamanho" name="valortamanho">16</output>
					    </fieldset>
					<input type="submit" class="comprar" value="Comprar">
                </form>
            </section>
		    <section class="detalhes">
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
				    	<td>Anel Bike 7845</td>
				    </tr>
			    	<tr>
				    	<td>Material</td>
				    	<td>Ouro 18k</td>
				    </tr>
				    <tr>
				    	<td>Peso</td>
				    	<td>1,5g</td>
				    </tr>
			    </tbody>
			    </table>
            </section>
		</div>
		</div>
		<?php include("rodape.php"); ?>
	</body>
</html>