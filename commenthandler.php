<?php
//$dao->checkExists($username, $password)

session_start();
require_once "Dao.php";
$dao = new Dao();

$username = $_POST['username'];
$comment = $_POST['comment'];

$_SESSION['presets']['username'] = $username;
$_SESSION['presets']['comment'] = $comment;

//$commentarray[1][]$dao->getComments();
//$singlecomment[]

?>
