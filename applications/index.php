<?php

echo "Well done ! Installation réussie";

$link = mysql_connect("192.168.99.100:33061", "database", "root") or die("Impossible de se connecter : " . mysql_error());

echo '<br>Connexion à la base de données réussie !';
mysql_close($link);