<?php
include(dbconnection.php);

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
	$stmt->execute();
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
		return $name
	}
}


if (is_ajax()) {
  if (isset($_POST["action"]) && !empty($_POST["action"])) { //Checks if action value exists
    $action = $_POST["action"];
    switch($action) { //Switch case for value of action
      case "reset": test_function(); break;
    }
  }
}

//Function to check if the request is an AJAX request
function is_ajax() {
  return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
}

function test_function(){
  $return = $_POST;
  
  //Do what you need to do with the info. The following are some examples.
  //if ($return["favorite_beverage"] == ""){
  //  $return["favorite_beverage"] = "Coke";
  //}
  //$return["favorite_restaurant"] = "McDonald's";
  
  $return["json"] = json_encode($return);
  echo json_encode($return);
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