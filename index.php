<?php

$servername = "mysql://all-mysql:3306/";
$username = "all";
$password = "all2018";

$link = mysql_connect($servername, $username, $password)
    or die("Impossible de se connecter : " . mysql_error());
echo 'Connexion réussie';
mysql_close($link);