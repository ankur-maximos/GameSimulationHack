<?php
$server = "tcp:game-simu-edu-server.database.windows.net,1433"; 
$user = "hackhack"@game-simu-edu-server; 
$pwd = "hackPSU!@#";
$db = 'user';

try{
    $conn = new PDO( "sqlsrv:Server= $server ; Database = $db ", $user, $pwd);
    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}
catch(Exception $e){
    die(print_r($e));
}
?>