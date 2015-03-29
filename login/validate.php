<?php
include("../db/newdbconn.php");

$type = 0;
$email;
$password;
$active;
echo "ok";
if(isset($_POST['radio'])) {
    $type = $_POST['radio'];
}
echo "ok1";
if(isset($_POST['inputEmail'])) {
    $email = $_POST['inputEmail'];
}
echo "ok2";
if(isset($_POST['inputPassword'])) {
    $password = $_POST['inputPassword'];
}
echo "ok3";

if (validate($email, $password, $type) == 1) {
    $_SESSION["email"] = $email;
    header('Location: '."google.com");
}

?>