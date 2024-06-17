<?php
    include 'header.php'
?>

<?php


$calhas = $_POST['calhas'];
$comps = $_POST['composteira'];
$biodi = $_POST['biodigestor'];
$hortas = $_POST['hortas'];

$x = $_POST['height'];
$y = $_POST['width'];
$z = $_POST['depth'];
$a = $_POST['lp'];
$c = $_POST['pm'];

$height = $x*1;
$width = $y*1;
$depth = $z*1;
$heightar = $x*10;
$widthar = $y*10;
$depthar = $z*10;


$cmm = $_POST['consumo'];
$npa = $cmm/$c;
$naps = $_POST['naps'];
$npt = $npa * $naps;
$lp = $a;
$cfun = $npt*$lp;
$tdf = $z * 0.90;
$nf = $cfun / $tdf;
$pf = $npt / $nf;

$area = $depth * $width;
$area2 = $depth * $width* $height;



echo "<div class='container-fluid'>";
echo "<div class='row lala'>";

echo "<div class='col-8 pol3'>";

echo "<div class='ml-2 lol2 ' style='width: {$widthar}px; height: {$heightar}px;'>frente</div>";

echo "<div class='ml-2 lol2 ' style='width: {$depthar}px; height: {$heightar}px;'>lado esquerdo</div>";

echo "<div class='ml-2 lol2 ' style='width: {$depthar}px; height: {$widthar}px;'>Cima</div>";

echo "<div class='ml-2 lol2 ' style='width: {$depthar}px; height: {$heightar}px;'>lado direito</div>";

echo "<div class='ml-2 lol2 ' style='width: {$widthar}px; height: {$heightar}px;'>costas</div>";

echo "</div>";



echo "<div class='col-3 pol3'>";

echo "<h1 id='sdio'>Modelo construído com sucesso!</h1>";

echo "</div>";

echo "<div class='col-6 pol3'>";
echo "<h2>Informações</h2>";
echo "<p>Area: $area m²</p>";
echo "<p>Volume: $area2 m²</p>";
echo "<p>Placas por apartamento: $npa</p>";
echo "<p>Número de apartamentos: $naps</p>";
echo "<p>Total de placas: $npt</p>";
echo "<p>Placas por fileira $pf</p>";
echo "<p>Número de fileiras de placas: $nf</p>";
echo "<p>Reciclagem de água: $calhas</p>";
echo "<p>Biogás: $biodi</p>";
echo "<p>Hortas: $hortas</p>";
echo "<p>Reciclagem de resíduos: $comps</p>";
echo"</div>";

echo "<div class='col-5 pol3'>";

echo "<form action='./ulop.php' name='salvamento' method='post'>";

echo "<input class='cell' type='number' name='salvar2' step='0.01' value='$area'>";
echo "<input class='cell'  type='number' name='salvar3' step='0.01' value='$area2'>";
echo "<input class='cell'  type='number' name='salvar4' step='0.01' value='$npa'>";
echo "<input class='cell'  type='number' name='salvar5' step='0.01' value='$naps'>";
echo "<input class='cell'  type='number' name='salvar6' step='0.01' value='$npt'>";
echo "<input class='cell'  type='number' name='salvar7' step='0.01' value='$nf'>";
echo "<input class='cell'  type='number' name='salvar8' step='0.01' value='$pf'>";
echo "<input class='cell'  type='' name='salvar5' value='$calhas'>";
echo "<input class='cell' name='salvar6' value='$comps'>";
echo "<input class='cell' name='salvar7' value='$hortas'>";
echo "<input class='cell' name='salvar8' value='$biodi'>";

echo "<input class='cell'  type='search' name='salvar9' step='0.01' placeholder='Se identifique'>";

echo "<input type='submit' value='Salvar modelo' for='salvamento'>";

echo "</form>";
echo "</div>";

echo "</div>";
echo "</div>";





?>
<?php
    include 'footer.php'
?>