<?php
include("dbconnection.php");
function markItemComplete($table, $item_id) {
	$conn = connect();
	$sql = "UPDATE ? SET is_complete = 1 WHERE id = ?";
	$stmt = $conn->prepare($sql);
	$stmt->bindValue(1, $table);
	$stmt->bindValue(2, $item_id);
	$stmt->execute();
}
function getAllItems($table) {
	$conn = connect();
	$sql = "SELECT * FROM ?";
	$stmt = $conn->prepare($sql);
	$stmt->bindValue(1, $table);
	$result->query($stmt);
	return $result->fetchAll(PDO::FETCH_NUM);
}

function validate_prof($username, $password) {
    $conn = connect();
    $sql = "SELECT COUNT(*) FROM [user] WHERE ID = ? AND Password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(1, $username);
    $stmt->bindValue(2, $password);
    try {
        $stmt->execute();
    } catch(PDOException $e) {
        print( "Error " );
        die(print_r($e));
    }
    $sql1 = "UPDATE [user] SET Active = ? WHERE ID = ?";
    $stmt1 = $conn->prepare($sql1);
    $stmt1->bindValue(1, 1);
    $stmt1->bindValue(2, $username);
    try {
        $stmt1->execute();
    } catch(PDOException $e) {
        print( "Error " );
        die(print_r($e));
    }
    if ($stmt->fetchColumn() > 0)
    	return 1;
    else
    	return 0;
}

function validate_class($username, $password, $simId) {
    $conn = connect();
    $sql = "SELECT COUNT(*) FROM [user] WHERE ID = ? AND Password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(1, $username);
    $stmt->bindValue(2, $password);
    try {
        $stmt->execute();
    } catch(PDOException $e) {
        print( "Error " );
        die(print_r($e));
    }
    if ($stmt->fetchColumn() > 0)
    	return 1;
    else
    	return 0;
}

function deleteItem($table, $item_id) {
	$conn = connect();
	$sql = "DELETE FROM ? WHERE id = ?";
	$stmt = $conn->prepare($sql);
	$stmt->bindValue(1, $table);
	$stmt->bindValue(2, $item_id);
	$stmt->execute();
}
?>