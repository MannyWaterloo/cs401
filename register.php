<?php
session_start();

$message = isset($_SESSION['message']) ? $_SESSION['message'] : '';
unset($_SESSION['message']);
?>

<html>
<?php require_once "header.php"; ?>
<?php require_once "footer.php"; ?>

<?php if (isset($_SESSION["registered"]) && !$_SESSION["registered"]) : ?>
<!-- <div class="reg_form_info">
  <p>
    Username must be 1-32 character, letters and numbers only.
  </p>
  <p>
    Must provide a valid email.
  </p>
  <p>
    Password must be 8-32 character, and contain one uppercase, one lowercase,
    one number, and one special character.
  </p>
</div> -->
<?php endif;?>

<div class="register">
<form method="post" class="register" action="reghandler.php">
  <label for="username"><b>Username</b></label>
  <input type="text" name="username" value="<?php echo @$_SESSION['username']; ?>"><br>
  <label for="email"><b>Email</b></label>
  <input type="text" name="email" value="<?php echo @$_SESSION['email']; ?>"><br>
  <label for="password"><b>Password</b></label>
  <input type="password" name="password" value=""><br>
  <label for="confirm_password"><b>Confirm Password</b></label>
  <input type="password" name="confirm_password" value=""><br>
<input type="submit" value="Submit">
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
