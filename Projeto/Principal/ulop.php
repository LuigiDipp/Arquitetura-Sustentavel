<?php
    include 'header.php'
?>
<?php
    include 'acesso.php'
?>

<?php

$s2 = $_POST['salvar2'];
$s3 = $_POST['salvar3'];
$s4 = $_POST['salvar4'];
$s5 = $_POST['salvar5'];
$s6 = $_POST['salvar6'];
$s7 = $_POST['salvar7'];
$s8 = $_POST['salvar8'];
$s9 = $_POST['salvar9'];
$s10 = $_POST['salvar10'];
$s11= $_POST['salvar11'];
$s12 = $_POST['salvar12'];
$s13 = $_POST['salvar13'];




if ($_SERVER["REQUEST_METHOD"] == "POST") {



$slvr= "INSERT INTO nãosalvos (area, volume, npa, naps, npt, pf, nf, Autor,calhas,biodigestores,hortas,composteiras) VALUES ('$s2', '$s3', '$s4', '$s5', '$s6', '$s7', '$s8', '$s9', ".$s10.",".$s13.", ".$s12.", ".$s11.")";
$shower= "SELECT * FROM nãosalvos";

$gravar = $mysqli->query($slvr);

$mostrar = $mysqli->query($shower);


echo "<p>$s2</p>";
echo "<p>$s9</p>";
echo "<p>$s3</p>";
echo "<p>$s4</p>";
echo "<p>$s5</p>";
echo "<p>$s6</p>";
echo "<p>$s7</p>";
echo "<p>$s8</p>";


}

$mysqli->close();




?>
<?php

?>
<?php
    include 'footer.php'
?>