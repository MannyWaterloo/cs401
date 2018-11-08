<?php
require_once "Dao.php";
session_start();
$dao = new Dao();
//echo "in handler ";

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

//save session data
$_SESSION['username'] = $username;
$_SESSION['email'] = $email;
$_SESSION['presets']['username'] = $username;
$_SESSION['presets']['email'] = $email;
$_SESSION['presets']['password'] = $password;

// Remove all illegal characters from email
$email = filter_var($email, FILTER_SANITIZE_EMAIL);

// Validate email
$emailbool = false;
if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    if ($dao->checkEmail($email) === true) {
      //echo("$email is already being used");
      $_SESSION['messages'][] = "$email is already being used";
    } else {
      //echo("$email is a valid email address");
      //$_SESSION['messages'][] = "$email is a valid email address";
      $emailbool = true;
    }
} else {
    //echo("$email is not a valid email address");
    $_SESSION['messages'][] = "$email is not a valid email address";
}

// regex to validate username 6-32 chars, letters and numbers only
$usernamebool = false;
if (preg_match('/^[A-Za-z][A-Za-z0-9_]{1,32}$/', $username)){
    if($dao->checkUsername($username) === true){
      //echo("$username is already being used");
      $_SESSION['messages'][] = "$username is already being used";
    } else {
      //echo("$username is valid");
      $usernamebool = true;
    }
} else {
  //echo ("$username is not valid, username must be 6-32 character, letters and numbers only");
    $_SESSION['messages'][] = "$username is not valid, username must be 6-32 characters letters and numbers only";
}

// (?=.*\d) Atleast a digit
// (?=.*[a-z]) Atleast a lower case letter
// (?=.*[A-Z]) Atleast an upper case letter
// (?!.* ) no space
// (?=.*[^a-zA-Z0-9]) at least a character except a-zA-Z0-9
// .{8,16} between 8 to 16 characters
$passwordbool = false;
if (preg_match('/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.* )(?=.*[^a-zA-Z0-9]).{8,32}$/m', $password)){
  if($password != $confirm_password){
    //echo("Passwords don't match.");
    $_SESSION['messages'][] = "Passwords don't match.";
  } else {
    //echo("passwords are valid");
    $passwordbool = true;
  }
} else {
  //echo("password must contain at least one number, one uppercase letter, and one lowercase
  //letter");
  $_SESSION['messages'][] = "Password must contain at least one number, one uppercase letter,
  one lowercase letter, and must be 8-32 characters.";
}

  //$dao = new Dao();
  if($emailbool === true && $usernamebool === true &&  $passwordbool === true){
    $dao->addUser($email, $username, $password);
    $dao->getUser($username);
    //echo("it worked");
    $_SESSION["registered"] = true;
    header('Location: login.php');
  } else {
    $_SESSION["registered"] = false;
    header('Location: register.php');
  }

  //header('Location: index.php');
//  exit;

?>
