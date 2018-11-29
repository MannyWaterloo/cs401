<?php
session_start();

$message = isset($_SESSION['message']) ? $_SESSION['message'] : '';
unset($_SESSION['message']);
?>

<html>
<?php require_once "header.php"; ?>
<?php require_once "footer.php"; ?>

<?php if (isset($_SESSION["registered"]) && !$_SESSION["registered"]) : ?>

<?php endif;?>

<div class="register">
<form method="post" class="register" action="reghandler.php">
  <label for="username"><b>Username</b></label><br>
  <input type="text" name="username" pattern="^[A-Za-z][A-Za-z0-9_]{1,32}$" title="username must be 2-32 characters letters and numbers only" value="<?php echo @$_SESSION['username']; ?>"><br>
  <label for="email"><b>Email</b></label><br>
  <input type="email" name="email" value="<?php echo @$_SESSION['email']; ?>"><br>
  <label for="password"><b>Password</b></label><br>
  <input type="password" name="password" value=""><br>
  <label for="confirm_password"><b>Confirm Password</b></label><br>
  <input type="password" name="confirm_password" value=""><br>
<input type="submit" id="submit" value="Submit">
</div>
</form>

<div>
<?php if (isset($_SESSION['messages'])) {
  foreach ($_SESSION['messages'] as $message) {?>
      <div class="error <?php echo isset($_SESSION['validated']) ? $_SESSION['validated'] : '';?>"><?php
      echo $message; ?></div>
<?php  }
 unset($_SESSION['messages']);
?> </div>
<?php } ?>
</div>

</html>
