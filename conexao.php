<?php
$conect = mysqli_connect("localhost:3306");
if (!$conect) die ("<h1>Falha na conexão com o Banco de Dados!</h1>");
$db = mysql_select_db("test");
?>