<?php
    include 'header.php'
?>
<?php
    include 'acesso.php'
?>


<main class="container-fluid" id="main">
 <div class="col-12 row prin";>  

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


while ($row = $mostrar->fetch_assoc()) {
    echo "<div class='cell col-lg-6'>";
    echo $row['Autor']."<br>";
    echo $row['area']."<br>";
    echo $row['npa']."<br>";
    if($row['calhas'] == 1){
        echo "Calhas: Sim <br>";
    }
    else{
        echo "Calhas: Não<br>";
    }
    if($row['biodigestores'] == 1){
        echo "Biogás: Sim <br>";
    }
    else{
        echo "Biogás: Não<br>";
    }
    if($row['composteiras'] == 1){
        echo "Composteiras: Sim <br>";
    }
    else{
        echo "Composteiras: Não<br>";
    }
    if($row['hortas'] == 1){
        echo "Hortas: Sim<br>";
    }
    else{
        echo "Hortas: Não<br>";
    }
    echo "</div>";
}
$mysqli->close();

}

?>
</div>
</main>
<?php
    include 'footer.php'
?>