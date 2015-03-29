<?php
include(dbconnection.php);

// Creating a new Simulation into already existing SIMULATION_TABLES
function addSim($sim_id, $sim_pass, $sim_name)
{
	$conn = connect();
	$sql = "INSERT INTO [SIMULATION_TABLES] (email,SIM_ID,SIM_PASSWORD,SIM_NAME) VALUES (?, ?, ?, ?)";
	$stmt = $conn->prepare($sql);
	$user_id = $_SESSION("emailid");
	$stmt->bindValue(1, $user_id);
	$stmt->bindValue(2, $sim_id);
	$stmt->bindValue(3, $sim_pass);
	$stmt->bindValue(4, $sim_name);
	$stmt->execute();
}

// Creating the Model table corresponding Add Simulation
/*function createModelTable($sim_table, $sim_pass) {
	$conn = connect();
	$sql = "CREATE TABLE SIMULATIONS ( USER_ID varchar(50) ,PASSWORD varchar(50) NOT NULL";
	$stmt = $conn->prepare($sql);
	$stmt->bindValue(1, $name);
	$stmt->bindValue(2, $category);
	$stmt->bindValue(3, $date);
	$stmt->bindValue(4, $is_complete);
	$stmt->execute();
}*/

// Initializing the model table created into existing SIM_MODEL_TABLE
function initializeModelTable($start_time, $end_time, $initial_steps,$sim_name) {
	$conn = connect();
	$sql = "INSERT INTO [SIM_MODEL_TABLE] (SIM_ID,START_TIME,END_TIME,INITIAL_STEPS) VALUES (?, ?, ?, ?)";
	$stmt = $conn->prepare($sql);
	$stmt->bindValue(1, $sim_name);
	$stmt->bindValue(2, $start_time);
	$stmt->bindValue(3, $end_time);
	$stmt->bindValue(4, $initial_steps);
	$stmt->execute();
}

//function for initializing decision table
function initDecisionTable($sim_id,$decision_vars,$types) {
	$conn = connect();

	$sql = "INSERT INTO [DECISION_MODEL_TABLE] (SIM_ID,";
	foreach ($decision_vars as $key => $value) {
		# code...
	}
	foreach ($decision_vars as $key => $value) {
		# code...
	}
	$sql = "INSERT INTO [DECISION_MODEL_TABLE] (SIM_ID,START_TIME,END_TIME,INITIAL_STEPS) VALUES (?, ?, ?, ?)";
	$stmt = $conn->prepare($sql);
	$stmt->bindValue(1, $sim_name);
	$stmt->bindValue(2, $start_time);
	$stmt->bindValue(3, $end_time);
	$stmt->bindValue(4, $initial_steps);
	$stmt->execute();
}

//function for initializing variables values
function initVariableTable() {

}



// Creating the Decision Table corresponding Simulation

$sim_name = $_POST["sim_name"];
$sim_id = substr($sim_name,0,4).rand(1000,10000);
$sim_password = $_POST["sim_password"];
addSim($sim_id, $sim_password,$sim_name);
$start_time = $_POST["start_time"];
$end_time = $_POST["end_time"];
$initial_steps = $_POST["initial_steps"];
initializeModelTable($start_time, $end_time, $initial_steps);

?>