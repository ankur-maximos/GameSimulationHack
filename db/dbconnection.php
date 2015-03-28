<?php
$server = 'game-simu-edu-server.database.windows.net,1433'; 
$serverusername = 'hackhack'; 
$serverpassword = 'hackPSU!@#';
$db = 'user';

try{
    $conn = new PDO( "sqlsrv:Server= $server ; Database = $db ", $serverusername, $serverpassword);
    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}
catch(Exception $e){
    die(print_r($e));
}
?>