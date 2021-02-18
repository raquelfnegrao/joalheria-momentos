<?php $cabecalho_title = "Joalheria Momentos";
include("cabecalho.php");?>
<link rel="stylesheet" href="css/bootstrap.css">
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
            <h1>Bem-Vindo ao nosso cadastro!</h1>
            <h2 class="panel-title">Aqui você pode adquirir incríveis descontos! </h2>
            <form>
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
            <button type="submit" class="btn btn-primary">
			<span class="glyphicon glyphicon-thumbs-up"></span>
			Enviar cadastro
			</button>
            <button type="submit" class="btn btn-primary">
			<span class="glyphicon glyphicon-thumbs-up"></span>
			<a href="LogIn.php">Já sou cadastrado</a>
			</button>
        </div>
    </div>
</body>
<?php include("rodape.php")?>