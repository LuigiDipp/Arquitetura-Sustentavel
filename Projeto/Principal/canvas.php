<?php
    include 'header.php'
?>


<main class="container-fluid" id="main">
 <div class="col-12 row prin" style="height:80vh;";>         
 <h1 >As dimensões são em metros. Caso centímetro, use decimais.</h1>
 <h1 >Informações da placa solar são em kW/h.</h1>
<form class="col-9"  action="cozido.php" method="post">
<h2 class="cell">Altura:<input type="number" name="height" step="0.01"></h2>
<h2 class="cell">Comprimento: <input type="number" name="width" step="0.01"></h2>
<h2 class="cell">Largura:<input type="number" name="depth" step="0.01"></h2>
<h2 class="cell">Apartamentos:<input type="number" name="naps" step="0.01"></h2>
<h2 class="cell">Largura da placa:<input type="number" name="lp" step="0.01"></h2>
<h2 class="cell">Produção mensal da placa: <input type="number" name="pm" step="0.01"></h2>
<h2 class="cell">Quanto consome: <input type="number" name="consumo" step="0.01"></h2>
<h2 class="cell">Possui calhas:<input type="radio" name="calhas"></h2>
<h2 class="cell">Possui hortas: <input type="radio" name="hortas"></h2>
<h2 class="cell">Possui biodigestor: <input type="radio" name="biodigestor"></h2>
<h2 class="cell">Possui composteira: <input type="radio" name="composteira"></h2>
<input type="submit" value="faça a boa">
</form>
 </div>
</main>



<?php
    include 'footer.php'
?>