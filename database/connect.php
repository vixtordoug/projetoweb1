<?php
//Página de Conexão com database
//Dados de conexão local

/* $servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "projetoweb"; */


//Dados de conexão InfinityFree
$servername = "sql204.epizy.com";
$username   = "epiz_28925354";
$password   = "pdWPy1MqQxMY";
$dbname     = "epiz_28925354_projetoWeb";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Conectado com sucesso!";
} catch(PDOException $e) {
  echo "Falha na conexão: " . $e->getMessage();
}
?>