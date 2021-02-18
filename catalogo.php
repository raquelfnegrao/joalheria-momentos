<?php
$cabecalho_title = "Joalheria Momentos";
include("cabecalho.php");
?>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Amatic+SC&display=swap" rel="stylesheet">
    <h1 id=texto2>Joalheria Momentos</h1>
    <h2>Aprecie nosso catálogo!</h2> 
    <div class="container paineis">
      <section class="painel novidades">
         <h2>Novidades</h2>
         <ol>
            <li>
               <a href="produto.php">
                  <figure id="borda">
                     <img src="img/produtos/colar_azul.jpeg" height="150" width="100">
                  <figcaption>Colar Cruz <strong>R$ 529,90</strong></figcaption>
                </figure>
               </a>
            </li>
            <li>
              <a href="produto2.php">
                <figure id="borda">
                    <img src="img/produtos/anel_de_ouro.jpg" height="150" width="100">
                <figcaption>Anel Ouro 18K <strong> R$ 540,90</strong></figcaption>
                </figure>
              </a>
            </li>
            <li>
              <a href="produto3.php">
                <figure id="borda">
                  <img src="img/produtos/anel_bike.jpg" height="150" width="100">
               <figcaption>Anel Bike 18k <strong>R$ 1429,90</strong></figcaption>
               </figure>
            </a>
            </li>
          </ol>
      </section>
      <section class="painel mais-vendidos">
        <h2>Mais Vendidos</h2>
          <ol>
            <li>
              <a href="produto1.php">
                <figure id="borda">
                  <img src="img/produtos/colarcutoturquesa.jpg" height="150" width="100">
                <figcaption>Colar Curto <strong> R$ 455,90</strong></figcaption>
                </figure>
              </a>
            </li>
            <li>
              <a href="produto4.php">
                <figure id="borda">
                  <img src="img/produtos/anel_cartier.jpg" height="150" width="100">
                <figcaption>Anel Crtier 18k <strong> R$ 2529,90</strong></figcaption>
                </figure>
              </a>
            </li>
            <li>
              <a href="produto5.php">
              <figure id="borda">
                <img src="img/produtos/anel_esmeralda.jpg" height="150" width="100">
              <figcaption>Anel Esmeralda <strong> R$ 3240,90</strong></figcaption>
              </figure>
              </a>
            </li>
          </ol>
    </div>
    <?php include("rodape.php"); ?>
  </body>
</html>