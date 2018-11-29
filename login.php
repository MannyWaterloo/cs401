<html>
<?php require_once "header.php"; ?>
<?php require_once "footer.php"; ?>
<?php
session_start();
    if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"]) {
    header("Location:index.php");
  }
?>

<?php
$message = isset($_SESSION['message']) ? $_SESSION['message'] : '';
unset($_SESSION['message']);
?>

<form method="post" class="register" action="/loginhandler.php">
<label for="username"><b>Username</b></label><br>
<input type="text" name="username" pattern="^[A-Za-z][A-Za-z0-9_]{1,32}$" title="invalid username" value="<?php echo @$_SESSION['username']; ?>"><br>
<label for="password"><b>Password</b></label><br>
<input type="password" name="password" value=""><br>
<input type="submit" id="submit" value="Submit">
</form>

</div>
</html>
