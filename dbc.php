<?php 

$servername = 'localhost';
$username = 'root';
$password = '****';
$dbn = 'DBTEST';


try {
    $dbc = new PDO("mysql:host=$servername;dbname=$dbn", $username, $password);
    // set the PDO error mode to exception
    $dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully"; 
}catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}

?>
