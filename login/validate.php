<?php
include("../db/newdbconn.php");

$type;
$email;
$password;
$active;
if(isset($_POST['radio'])) {
    $type = $_POST['radio'];
}
if(isset($_POST['inputEmail'])) {
    $email = $_POST['inputEmail'];
}
if(isset($_POST['inputPassword'])) {
    $password = $_POST['inputPassword'];
}

if ($type == 2 && validate($email, $password) == 1) {
    $_SESSION["email"] = $email;
    echo $email;
    header('Location: http://www.google.com');
}


echo $email;
?>