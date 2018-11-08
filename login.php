<html>
<?php require_once "header.php"; ?>
<?php require_once "footer.php"; ?>
<?php
session_start();
    if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"]) {
    header("Location:index.php");
  }
?>

<form method="post" class="register" action="/loginhandler.php">
<label for="username"><b>Username</b></label>
<input type="text" name="username" value="<?php echo @$_SESSION['username']; ?>"><br>
<label for="password"><b>Password</b></label>
<input type="password" name="password" value=""><br>
<input type="submit" value="Submit">
</form>
</html>
