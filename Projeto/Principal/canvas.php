<?php
    include 'header.php'
?>


<h1>As medidas são em metros. Caso centímetro, use decimais</h1>

<form action="cozido.php" method="post">
     altura: <input type="number" name="height" step="0.01">
     comprimento: <input type="number" name="width" step="0.01">
     largura: <input type="number" name="depth" step="0.01">
     apartamentos: <input type="number" name="naps" step="0.01">
     largura da placa: <input type="number" name="lp" step="0.01">
     produção mensal da placa: <input type="number" name="pm" step="0.01">
     quanto deseja: <input type="number" name="desejo" step="0.01">
     quanto consome: <input type="number" name="consumo" step="0.01">
     possui calhas: <input type="radio" name="calhas">
     possui hortas: <input type="radio" name="hortas">
     possui biodigestor: <input type="radio" name="biodigestor">
     possui composteira: <input type="radio" name="composteira">
    <input type="submit" value="faça a boa">
</form>

<img src="./ASSETS/calibragem.png">

<div class="container1">
    <div class="cube">
        <div class="face top">Top</div>
        <div class="face bottom">Bottom</div>
        <div class="face left">Left</div>
        <div class="face right">Right</div>
        <div class="face front">Front</div>
        <div class="face back">Back</div>
    </div>
</div>


<?php
    include 'footer.php'
?>