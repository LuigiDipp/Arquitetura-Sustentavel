<?php
include_once './header.php'
?> 



 <?php 

include './acesso.php';


if ($mysqli->connect_error) {
    die("Erro na conexão: " . $mysqli->connect_error);
}



$selecionar = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$seleciona = $_POST['xxx']; 

$wrdsrc= "SELECT * FROM teste_sql WHERE TAG LIKE '%" . implode("%' OR TAG LIKE '%", $seleciona) . "%'";
        


$selecionar=$mysqli->query($wrdsrc);
}


while ($row = $selecionar->fetch_assoc()) {

  echo ("<a href='ImgAberta.php?id=".$row['ID']."' class='imagens'><img src=".$row['SRC']." class='imagens'></a>");
}



$mysqli->close();

?>



 


<?php 
include_once './footer.php'
?>