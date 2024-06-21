<?php
    include 'header.php'
?>


<main class="container-fluid" id="main">
 <div class="col-12 row prin";>    
    
<?php 
 if ($_SERVER["REQUEST_METHOD"] == "POST") {



$shower= "SELECT * FROM nãosalvos";

$mostrar = $mysqli->query($shower);


while ($row = $mostrar->fetch_assoc()) {
    echo $row['Autor'] ;
}

$mysqli->close();

 }
?>

 </div>
</main>



<?php
    include 'footer.php'
?>