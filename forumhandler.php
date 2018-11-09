<?php
//$dao->checkExists($username, $password)

require_once "Dao.php";
session_start();
$dao = new Dao();

//$username = $_POST['username'];
$comment = $_POST['comment'];

//$_SESSION['username'] = $username;
//$_SESSION['email'] = $email;

$username = $_SESSION['username'];
$_SESSION['comment']= $comment;
//$_SESSION['presets']['comment'] = $comment;

// echo("$comment $username in forumhandler");

//if (!isset($_SESSION["logged_in"]) && !$_SESSION["logged_in"]) {
  //echo("$comment $username in forumhandler if statement");
  // if(isset($_POST['save'])){

  // $dao = new Dao();
  $dao->saveComment($username, $comment);
  echo("$comment $username in forumhandler if statement");
  // }

  header("Location: forum.php");
//}

?>
