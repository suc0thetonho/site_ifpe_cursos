<?php

//$localhost = "localhost";
//$user = "root";
//$passw = "";
$banco = "cadastro";
try{
    //$pdo = new PDO("mysql:dbname = ".$banco."; host =".$localhost, $user, $passw);
    $pdo = new PDO("mysql:host=localhost;dbname=cadastro", "root", "");
   
    if ($pdo) {
		echo "ok";
    }

} catch (PDOException $e) {
	echo $e->getMessage();
}

    
?>