<?php
    include 'header.php'
?>

<?php
    include 'acesso.php'
?>

<main class="container-fluid" id="main">
 <div class="col-12 row prin";>    
    
<?php 

$shower= "SELECT * FROM nãosalvos";
$mostrar = $mysqli->query($shower);
while ($row = $mostrar->fetch_assoc()) {

    echo "<div class='cell col-lg-6'>";
    echo "Autor: ".$row['Autor']."<br>";
    echo "Área: ".$row['area']." m²<br>";
    echo "Placas por Apt.:".$row['npa']."<br>";
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

?>

 </div>
</main>
</body>
</html>