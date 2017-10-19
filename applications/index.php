<?php

echo "Well done ! Installation réussie"; 
$etatConnexion = "<br>Connexion à la base de données réussie !";
if (ereg("Win", getenv("HTTP_USER_AGENT"))){
	$link = mysql_connect("192.168.99.100:33061", "database", "root") or die("Impossible de se connecter : " . mysql_error());
}
elseif ((ereg("Mac", getenv("HTTP_USER_AGENT"))) || (ereg("PPC", getenv("HTTP_USER_AGENT")))){
	$link = mysql_connect("localhost:33061", "database", "root") or die("Impossible de se connecter : " . mysql_error());
}
elseif (ereg("Linux", getenv("HTTP_USER_AGENT"))) {
	$link = mysql_connect("localhost:33061", "database", "root") or die("Impossible de se connecter : " . mysql_error());
} else {
	$etatConnexion = "";
}

echo $etatConnexion;

mysql_close($link);