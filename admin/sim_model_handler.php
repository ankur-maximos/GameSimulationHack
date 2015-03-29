<?php
include("../db/newdbconn.php");
echo "ok";
if(isset($_POST['name-field'])) {
    $name_field = $_POST['name-field'];
    echo $name_field;
}
if(isset($_POST['people-field'])) {
    $people_field = $_POST['people-field'];
}
if(isset($_POST['start-field'])) {
    $start_field = $_POST['start-field'];
}
if(isset($_POST['end-field'])) {
    $start_field = $_POST['end-field'];
}
if(isset($_POST['step-field'])) {
    $start_field = $_POST['step-field'];
}

$decision_num;
if(isset($_POST['decision-num'])) {
    $decision_num  = $_POST['decision-num'];
}

for ($i = 1; $i < $decision_num + 1; $i++) {
    $dnf = "decision-name-field" . $i;
    $decision_name_field[$i - 1] = $_POST[$dnf];
    $dtf = "decision-type-field" . $i;
    $decision_type_field[$i - 1] = $_POST[$dtf];
}

$variable_num;
if(isset($_POST['variable-num'])) {
    $variable_num  = $_POST['variable-num'];
}

for ($i = 1; $i < $variable_num + 1; $i++) {
    $dnf = "variable-name-field" . $i;
    $variable_name_field[$i - 1] = $_POST[$dnf];
    $dtf = "variable-equation-field" . $i;
    $variable_equation_field[$i - 1] = $_POST[$dtf];
}

echo $variable_equation_field[0];
foreach ($variable_name_field as $vnf) {
    print($vnf);
}




?>