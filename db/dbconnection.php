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

function markItemComplete($table, $item_id)
{
	$conn = connect();
	$sql = "UPDATE ? SET is_complete = 1 WHERE id = ?";
	$stmt = $conn->prepare($sql);
	$stmt->bindValue(1, $table);
	$stmt->bindValue(2, $item_id);
	$stmt->execute();
}
function getAllItems($table)
{
	$conn = connect();
	$sql = "SELECT * FROM ?";
	$stmt = $conn->prepare($sql);
	$stmt->bindValue(1, $table);
	$stmt->execute();
}
/*function addItem($name, $category, $date, $is_complete)
{
	$conn = connect();
	$sql = "INSERT INTO items (name, category, date, is_complete) VALUES (?, ?, ?, ?)";
	$stmt = $conn->prepare($sql);
	$stmt->bindValue(1, $name);
	$stmt->bindValue(2, $category);
	$stmt->bindValue(3, $date);
	$stmt->bindValue(4, $is_complete);
	$stmt->execute();
}*/
function deleteItem($table, $item_id)
{
	$conn = connect();
	$sql = "DELETE FROM ? WHERE id = ?";
	$stmt = $conn->prepare($sql);
	$stmt->bindValue(1, $table);
	$stmt->bindValue(2, $item_id);
	$stmt->execute();
}

?>