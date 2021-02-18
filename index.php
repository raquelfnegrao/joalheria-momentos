<?php
$cabecalho_title = "Joalheria Momentos";
include("cabecalho.php");
?>
<body>
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
             <li><a href="catalogo.php">Catálogo</a></li>
             <li><a href="promocoes.php">Promoções</a></li>
          </ul>
              </li>
              <li><a href="email.php">Cadastre-se aqui!</a></li>
              <li>
                <a href="encomendas.php">Faça sua encomenda!</a>
                <ul>
                  <li><a href="pecazero.php">Criar uma peça do zero!</a></li>
                  <li><a href="pecajatenho.php">Modificar uma peça que ja tenho!</a></li>
                  <li><a href="outrasjoias.php">Me inspirar em peças da Momentos</a></li>
                  <li><a href="escrever.php">Escrever em uma peça!</a></li>
                </ul>
              </li>
              <li><a href="contato.php">Ajuda</a></li>
              <li><a href="Sobre.php">História</a></li>
          </ul>
        </nav>
      </section>
      <script>
        var banners = ["img/Entrada2.jpg", "img/entrada.jpg", "img/entrada3.jpg"];
        var bannerAtual = 0;
        function trocaBanner() {
        bannerAtual = (bannerAtual + 1) % 2;
        document.querySelector('.destaque img').src = banners[bannerAtual];
        }
        setInterval(trocaBanner, 4000);
      </script>
        <img id="entrada" src="img/entrada3.jpg" height="300" width="500" alt="Foto da Loja">
    </div>
    <div class="texto">
    <h2 id="texto2">Bem vindo a joalheria Momentos, venha brilhar!</h2>
    <p id="texto">
      O ouro está presente na História da humanidade. Ligado a diversos momentos importantes e com alto valor, esse metal precioso foi utilizado 
      para adornar lugares – como igrejas e teatros – e também para fazer parte do estilo de homens e mulheres de todas as idades, seja em joias 
      religiosas ou em outros adereços. Sua importância e elegância são reconhecidas até hoje.</p>
    <p>As joias de ouro são cheias de estilo e alta qualidade! Aqui na Joiasgold, a joalheria online perfeita para você, estão diversos modelos de 
      peças exclusivas, desenhadas por grandes nomes para levar o máximo de elegância para todos os momentos que você desejar usar uma joia de 
      ouro!</p>
    <p>Joias em Ouro para presentear quem você ama</p>
    <p>As joias também são excelentes opções de presentes para homenagear as pessoas mais queridas de sua vida, como as já
      tradicionais joias de 15 anos! De anéis a correntes de ouro, são muitas as peças que fazem a diferença e podem ser usadas para 
      expressar os seus sentimentos.</p>
      <img id="moca" src="img/ouro.jpg">
    <p><strong>Aliança de ouro</strong></p>
    <p>A aliança de ouro é perfeita para simbolizar o seu amor e seus sentimentos mais verdadeiros. Para compromisso, anel de noivado ou 
      casamento, a aliança também pode ter diversas características que a tornam única.</p>
    <p><strong>Anel de ouro</strong></p>
    <p>O anel de ouro pode ter diversos atrativos, desde versões mais básicas e tradicionais, até aqueles que acompanham pedras e outros detalhes 
      que os deixam ainda mais únicos e especiais.</p>
    <p><strong>Brinco de ouro</strong></p>
    <p>Os brincos de ouro são um dos adornos preferidos entre homens e mulheres. Ideais também como presente de nascimento, batizado, aniversários 
      e outras ocasiões especiais, conheça aqui os diferentes modelos, perfeitos para homenagear alguém querido.</p>
    <p><strong>Corrente de ouro</strong></p>
    <p>A corrente de ouro fascina as pessoas do mundo todo, sejam homens ou mulheres. Por ser uma peça de valor que enaltece a beleza, é um objeto 
      bastante desejado e importante para complementar o visual de maneira discreta ou mais vistosa.</p>
    <p>Aqui em nossa loja você encontrará a joia dos seus sonhos! Imaginação não tem limites, graças a nossa impressora 3D podemos criar
      qualquer anel, colar, pulseira que você inventar!</p>
    <p id="texto">Do estilo mais elegante ao mais criativo, trazemos também vários modelos prontos assinados pelo designer 
      <a href="https://www.instagram.com/nandotorresdesigner/">Fernando Torres.</p></a>
    <p id="texto">Para conhecer mais da nossa loja, navegue no menu!</p> 
    <p>Observe o mapa da localização nossa loja</p>
    </div> 
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3755.1856745404525!2d-47.93619338563801!3d-19.74726443775109!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94bad032e11ad62b%3A0xb66db9cafd910395!2sJoalheria%20Momentos!5e0!3m2!1spt-BR!2sbr!4v1613130085959!5m2!1spt-BR!2sbr" width="350" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    <?php include("rodape.php"); ?>
  </body>
</html>