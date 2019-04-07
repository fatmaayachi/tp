<?php

include "config.php";
$base=connect();

$e=$_REQUEST['nom']; 
$m=$_REQUEST['prenom'];
$a=$_REQUEST['tel'];
$b=$_REQUEST['genre'];
$v=$_REQUEST['email'];
$d=$_REQUEST['date'];
$z=$_REQUEST['nat'];
$h=$_REQUEST['inter'];
$y=$_REQUEST['mdp'];


$req="INSERT INTO user(id_user,nom,prenom,tel,genre,e_mail,datenaissance,nationnalité,inter,mdp)VALUES(null,'$e','&m','&a','&b','&v','&d','&z','&h','&y')";
$resp=$base->exec($req);
if ($resp==1){
    echo "donnees inserer ";

}else{
    echo"echec";
}

?>