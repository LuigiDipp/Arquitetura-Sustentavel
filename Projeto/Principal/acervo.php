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
    echo $row['Autor']."<br>";
    echo $row['area']."<br>";
    echo $row['npa']."<br>";
    echo $row['calhas']."<br>";
    echo $row['biodigestores']."<br>";
    echo $row['composteiras']."<br>";
    echo $row['hortas']."<br>";
    echo "</div>";
}

$mysqli->close();

?>

 </div>
</main>
<?php
    include 'footer.php'
?>