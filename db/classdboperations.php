<?php
include("dbconnection.php");

// Creating a new Simulation into already existing SIMULATION_TABLES
function addSim($sim_table, $sim_pass)
{
	$conn = connect();
	$sql = "INSERT INTO [SIMULATION_TABLES] (email,SIM_ID,SIM_PASSWORD) VALUES (?, ?, ?)";
	$stmt = $conn->prepare($sql);
	$user_id = $_SESSION("emailid");
	$stmt->bindValue(1, $user_id);
	$stmt->bindValue(2, $sim_table);
	$stmt->bindValue(3, $sim_pass);
	try {
        $stmt->execute();
    } catch(PDOException $e) {
        print( "Error " );
        die(print_r($e));
    }
}

function simName() {
	$conn = connect();
	$sim_id = $_SESSION("sim_id");
	$sql = "SELECT SIM_NAME from [SIMULATION_TABLES]";
	$result = mysql_query($sql, $conn);
	if(!$result) {
		die("could not get the data :" . mysql_error());
	}

	while($result = mysql_fetch_array($result, MYSQL_ASSOC)) {
		$name = $result['SIM_NAME'];
		return $name;
	}
}


if (is_ajax()) {
  if (isset($_POST["action"]) && !empty($_POST["action"])) { //Checks if action value exists
    $action = $_POST["action"];
    switch($action) { //Switch case for value of action
      case "reset": reset_func(); break;
      case "play": $data = $_POST["data"];play_func(); break;
    }
  }
}

//Function to check if the request is an AJAX request
function is_ajax() {
  return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
}

function reset_function(){
  $conn = connect();
  $sql = "DELETE * from [user_rounds]";
  try {
        $stmt->execute();
    } catch(PDOException $e) {
        print( "Error " );
        die(print_r($e));
    }
    $sql = "DELETE * from [cumulative_rounds] where ROUND!=0";
    try {
        $stmt->execute();
    } catch(PDOException $e) {
        print( "Error " );
        die(print_r($e));
    }
}

 function play_func() {

 }

 function initializeValues() {
 	$conn = connect();
	$sql = "SELECT SIM_NAME from [SIMULATION_TABLES]";
	$result = mysql_query($sql, $conn);
	if(!$result) {
		die("could not get the data :" . mysql_error());
	}
	while($result = mysql_fetch_array($result, MYSQL_ASSOC)) {
		$name = $result['SIM_NAME'];
		return $name;
	}
 }

  function fetchAllRounds() {
  	$conn = connect();

  }

  function fetchAllDecision() {
  	$conn = connect();

  }

  function createRoundsData() {

  }

?>