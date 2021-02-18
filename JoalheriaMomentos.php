<?php
$cabecalho_title = "Mirror Fashion";
include("cabecalho.php");
?>
   <div class="container destaque">
    <section class="busca">
      <h2>Busca</h2>
        <form>
        <input type="search">
        <input type="image" src="img/busca.png">
        </form>
    </section>
    <section class="menu-departamentos">
       <h2>Menu</h2>
        <nav>
          <ul>
            <li>
              <a href="#">Nossas peças!</a>
          <ul>
             <li><a href="catalogo.html">Catálogo</a></li>
             <li><a href="promocoes.html">Promoções</a></li>
          </ul>
              </li>
              <li><a href="email.html">Cadastre-se aqui!</a></li>
              <li>
                <a href="encomendas">Faça sua encomenda!</a>
                <ul>
                  <li><a href="pecazero.html">Criar uma peça do zero!</a></li>
                  <li><a href="pecajatenho.html">Modificar uma peça que ja tenho!</a></li>
                  <li><a href="outrasjoias.html">Me inspirar em peças da Momentos</a></li>
                  <li><a href="escrever.html">Escrever em uma peça!</a></li>
                </ul>
              </li>
              <li><a href="contato.html">Ajuda</a></li>
              <li><a href="Sobre.html">História</a></li>
          </ul>
        </nav>
      </section><!-- fim .menu-departamentos -->
        <img id="entrada" src="img/Entrada.jpg" height="300" width="500" alt="Foto da Loja">
    </div>
    <h2 id="texto2">Bem vindo a joalheria Momentos, venha brilhar!</h2>
    <p id="texto">
      Aqui em nossa loja você encontrará a joia dos seus sonhos! Imaginação não tem limites, graças a nossa impressora 3D podemos criar
      qualquer anel, colar, pulseira que você inventar!</p>
    <p id="texto">Do estilo mais elegante ao mais criativo, trazemos também vários modelos prontos assinados pelo designer 
      <a href="https://www.instagram.com/nandotorresdesigner/">Fernando Torres.</p></a>
    <p id="texto">Para conhecer mais da nossa loja, navegue no menu!</p>  
    <div id="rodape">
      &copy; Copyright Joalheria Momentos
    </div>
    <?php include("rodape.php"); ?>
  </body>
</html>