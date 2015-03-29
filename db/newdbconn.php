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
function validate($username, $password, $type) {
    $conn = connect();
    $sql = "SELECT * FROM [user] WHERE ID = ? AND Password = ? AND Type = ?";
    //$sql = "SELECT * FROM user";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(1, $username);
    $stmt->bindValue(2, $password);
    $stmt->bindValue(3, $type);
    //$rows->query($stmt);
    //$result->execute(); 
    //return $result->fetchColumn();
    try {
        $stmt->execute();
    } catch(PDOException $e) {
        print( "Error " );
        die(print_r($e));
    }
    return 1;
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