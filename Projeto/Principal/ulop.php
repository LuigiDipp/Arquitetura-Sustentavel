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



if ($_SERVER["REQUEST_METHOD"] == "POST") {



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