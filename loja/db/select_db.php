<?php

$db_host = "10.135.0.53\sqledutsi";
$db_name = "Kanino";
$user = "TSI";
$password = "SistemasInternet123";
$dsn = "Driver={SQL Server};Server=$db_host;Port=1433;Database=$db_name;";

if ($db = odbc_connect( $dsn, $user, $password)){
	$query = odbc_exec($db, " SELECT * FROM Usuario ");
	
	while ($result = odbc_fetch_array($query)){
		$usuarios = $result;
		
	}
		
}else{
	echo'deu ruim <br>';
	
}

$teste="teste"

?>
