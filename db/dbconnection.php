<?php
function connect() {
    try {
        $conn = new PDO ("sqlsrv:server = tcp:game-simu-edu-server.database.windows.net,1433; Database = game-simu-edu-db", "hackhack", "hackPSU!@#");
        $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    }
    catch ( PDOException $e ) {
        print( "Error connecting to SQL Server." );
        die(print_r($e));
    }
    return $conn;
}

?>