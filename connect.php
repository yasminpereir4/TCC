<?php
  if(!$con= mysqli_connect('localhost','root', '' , 'bdtcc')){
    echo "Erro ao acessar a base de dados!";
  }
  mysqli_query($con,"SET NAMES utf8");
?>