<?php

include "config.php";
$base=connect();

$d=$_REQUEST['txta']; 
$dte=date('Y-m-d H:i:s',time());



$req="INSERT INTO todo(description,dateajout)VALUES('$d','$dte')";
$resp=$base->exec($req);
if ($resp==1){
    echo "donnees inserer ";

}else{
    echo"echec";
}

?>