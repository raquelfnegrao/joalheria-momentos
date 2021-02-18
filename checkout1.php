<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Checkout Joalheria Momentos</title>
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">Mirror Fashion <span class="glyphicon glyphicon-home"></span></a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="sobre.php">Sobre <span class="glyphicon glyphicon-book"></span></a></li>
            <li><a href="#">Ajuda <span class="glyphicon glyphicon-question-sign"></span></a></li>
            <li><a href="#">Perguntas frequentes <span class="glyphicon glyphicon-exclamation-sign"></span></a></li>
            <li><a href="#">Entre em contato <span class="glyphicon glyphicon-envelope"></span></a></li>
        </ul>
    </nav>
<div class="jumbotron">
		<div class="container">
			<h1>Ótima escolha!</h1>
			<p>Obrigado por comprar na Joalheria Momentos!
			Preencha seus dados para efetivar a compra.</p>
		</div>
	</div>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
		<div class="panel panel-success">
			<div class="panel-heading">
				<h2 class="panel-title">Sua compra</h2>
			</div>
			<div class="panel-body">
				<img src="img/produtos/colarcutorosa.jpg $_POST['cor'] ?>.png" class="img-thumbnail img-responsive">
				<dl>
					<dt>Produto</dt>
					<dd><?= $_POST['nome'] ?></dd>
					<dt>Preço</dt>
					<dd id="preco">R$ <?= $_POST['preco'] ?></dd>
				</dl>
				<div class="form-group">
					<label for="qt">Quantidade</label>
					<input id="qt" class="form-control" type="number" min="0" max="99" value="1">
				</div>
				<div class="form-group">
					<label for="total">Total</label>
					<output for="qt preco" id="total" class="form-control">
					<?= $_POST["preco"] ?>
					</output>
				</div>
			</div>
        </div>
		    </div>
        <form class="col-sm-8">
			<fieldset>
				<legend>Dados pessoais</legend>
				<div class="form-group">
					<label for="nome">Nome completo</label>
					<input type="text" class="form-control" id="nome" name="nome" autofocus required>
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<div class="input-group">
						<span class="input-group-addon">@</span>
						<input type="email" class="form-control" id="email" name="email" placeholder="exemplo@seuemail.com" required>
					</div>
				</div>
				<div class="form-group">
					<label for="cpf">CPF</label>
					<input type="text" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00" required>
				</div>
				<div class="checkbox">
					<label>
					<input type="checkbox" value="sim" name="spam" checked>
					Quero receber spam da Joalheria Momentos
					</label>
				</div>
			</fieldset>
			<fieldset>
				<legend>Cartão de crédito</legend>
				<div class="form-group">
					<label for="numero-cartao">Número - CVV</label>
					<input type="text" class="form-control" id="numero-cartao" name="numero-cartao">
				</div>
				<div class="form-group">
					<label for="bandeira-cartao">Bandeira</label>
					<select name="bandeira-cartao" id="bandeira-cartao" class="form-control">
						<option value="master">MasterCard</option>
						<option value="visa">VISA</option>
						<option value="amex">American Express</option>
					</select>
				</div>
				<div class="form-group">
					<label for="validade-cartao">Validade</label>
					<input type="month" class="form-control" id="validade-cartao" name="validade-cartao">
				</div>
			</fieldset>
            <button type="submit" class="btn btn-primary">
			    <span class="glyphicon glyphicon-ok"></span>
			    Confirmar Pedido
			</button>
        </form>
    </div>
</div>
</body>
</html>