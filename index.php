<?php

$servername = "mysql://mysql:3306/";
$database = "sampledb";
$username = "userEJ1";
$password = "gGn725E32DAFgTFC";

echo 'Debut<br>';
echo 'Connexion to...'.$servername.'<br>';

$link = mysql_connect($servername, $username, $password)
    or die("Impossible de se connecter : " . mysql_error());
echo 'Connexion réussie';
mysql_close($link);