<?php
    include 'header.php'
?>

<?php

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


/*$calhas = $_POST['calhas'];
$hortas = $_POST['hortas'];
$biodigestor = $_POST['biodigestor'];
$composteira = $_POST['composteira'];*/

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

echo "<div class='cube1'>";
echo "<div class='ml-4 lol c' style='width: {$widthar}px; height: {$heightar}px;'>frente</div>";
echo "<div class='ml-2 lol x' style='width: {$depthar}px; height: {$heightar}px;'>lado esquerdo</div>";
echo "<div class='ml-2 lol b' style='width: {$depthar}px; height: {$widthar}px;'>Cima</div>";
echo "<div class='ml-2 lol z' style='width: {$depthar}px; height: {$heightar}px;'>lado direito</div>";
echo "<div class='ml-2 lol v' style='width: {$widthar}px; height: {$heightar}px;'>costas</div>";
echo "</div>";

echo "<h1>Isométrico</h1>";

echo "</div>";

echo "<div class='col-6 pol3'>";
echo "<p>Area: $area</p>";
echo "<p>npa: $npa</p>";
echo "<p>naps: $naps</p>";
echo "<p>lp: $lp</p>";
echo "<p>npt: $npt</p>";
echo "<p>pf: $pf</p>";
echo "<p>nf: $nf</p>";
echo"</div>";

echo "<div class='col-5 pol3'>";

echo "<form action='./ulop.php' name='salvamento' method='POST'>";
echo "<input type='number' name='salvar' step='0.01' value='$nf' for='Filtros'>";
echo "<input type='submit' action='enviar' method='GET' value='Salvar modelo' for='salvamento'>";
echo "</form>";
echo "</div>";

echo "</div>";
echo "</div>";


if (isset($_POST['calhas'])) {


    echo "<div style='width: {$widthar}px; height: {$heightar}px; border:3px solid orange; border-bottom: blue dashed;'></div>";
    
}

if (isset($_POST['hortas'])) {
    echo "<div style='width: {$widthar}px; height: {$heightar}px; border:3px solid orange; border-bottom: dashed;'></div>";
    
}

if (isset($_POST['biodigestor'])) {
    echo "<div style='width: {$widthar}px; height: {$heightar}px; border:3px solid orange; border-bottom: dashed;'></div>";
    
}

if (isset($_POST['composteira'])) {
    echo "<div style='width: {$widthar}px; height: {$heightar}px; border:3px solid orange; border-bottom: dashed;'></div>";
    
}



?>
<?php
    include 'footer.php'
?>