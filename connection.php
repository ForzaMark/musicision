<?php  

// Verbíndung zur datenbank
$user = 'USER369761';
$pass = 'm2a4r0k1 13-mark-';
$dsn = 'mysql:dbname=db_369761_1;host=musicision.lima-db.de';


try {

	$dbh = new PDO($dsn,$user,$pass);
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	


}
 catch (PDOException $e) {

 	echo "error ". $e->getMessage();
	
}

?>