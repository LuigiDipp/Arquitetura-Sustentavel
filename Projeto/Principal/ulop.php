<?php
    include 'header.php'
?>
<?php
    include 'acesso.php'
?>

<?php

$s2 = $_POST['salvo2'];
$s3 = $_POST['salvo3'];
$s4 = $_POST['salvo4'];
$s5 = $_POST['salvo5'];
$s6 = $_POST['salvo6'];
$s7 = $_POST['salvo7'];
$s8 = $_POST['salvo8'];
$s9 = $_POST['salvo9'];

$salvar = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$salvar = $_POST['salvamento']; 

$slvr= "INSERT INTO nãosalvos (area, volume, npa, naps, npt, pf, nf, Autor) VALUES ('$s2', '$s3', '$s4', '$s5', '$s6', '$s7', '$s8', '$s9')";

        


$gravar = $mysqli->query($slvr);
}

$mysqli->close();
?>
<?php

?>
<?php
    include 'footer.php'
?>