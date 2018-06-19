<?php

$servername = "mysql://mysql:3306/";
$database = "sampledb";
$username = "user5WQ";
$password = "BTbVj6OBK3vyWiIJ";

echo 'Debut<br>';
echo 'Connexion to...'.$servername.'<br>';

$link = mysql_connect($servername, $username, $password)
    or die("Impossible de se connecter : " . mysql_error());
echo 'Connexion réussie';
mysql_close($link);