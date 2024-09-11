<?php

$email=$_POST['email'];
$senha=$_POST['senha'];


if (($email=='gerhardsaboia@gmail.com') && ($senha=='1234')){
  
?>
 <h2>CLIQUE NO NOTEBOOK OU DESKTOP PARA CONFIGURAR SUA COMPRA</h2>
  <a href="notebook.php">
  <img src="images\notebook.jpg" height="200" width="300" alt="Descrição da imagem">
  </a>

  <a href="desktop.php">
 	<img src="images\desktop.jpg" height="200" width="300" alt="desktop">
 </a>
 <?php
}else{
    echo "Email ou senha incorretos!";
}
?>