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
echo $type;
echo $email;
echo $password;

echo validate($email, $password, $type);
if (validate($email, $password, $type) == 1) {
    $_SESSION["email"] = $email;
    header('Location: '."google.com");
}

?>