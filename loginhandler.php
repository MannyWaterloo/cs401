<?php
// loginhandler.php
session_start();
require_once "Dao.php";
$dao = new Dao();

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
//set session data
$_SESSION['username'] = $username;
$_SESSION['email'] = $email;
$_SESSION['presets']['username'] = $username;
$_SESSION['presets']['email'] = $email;
$_SESSION['presets']['password'] = $password;
$_SESSION['presets']['userid'] = $userid;

if ($dao->checkExists($username, $password)) {
  $_SESSION["logged_in"] = true;
  //$userid = getUserId($username);
  header('Location: index.php');
} else {
  header('Location: login.php');
}

?>
