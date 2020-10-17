<?php 
define('DB_HOST','localhost');   //Nom du serveur
define('DB_USER','root');        //Nom d'utilisateur
define('DB_PASS','');            //Mot de passe
define('DB_NAME','carrental');   //Le nom de la base de données
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>