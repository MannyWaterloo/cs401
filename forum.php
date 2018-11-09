<!-- <!DOCTYPE html>
<html> -->
<?php
session_start();
if (!isset($_SESSION["logged_in"]) && !$_SESSION["logged_in"]) {
  header("Location:login.php");
}
?>
<?php
require_once "header.php";
require_once "footer.php";
require_once "Dao.php";
$dao = new Dao();

?>
<body>

<div class="forum">
  <?php
  $infos = $dao->getComments();
  foreach ($infos as $info){

      //echo "<div>" . $info['user_username'] . $info['comment_body'] . $info['comment_date'];


      echo "<div class='comment'>";
        echo  "<div class='user'>" . $info['user_username'] . "</div>";
        echo"<br>";
        echo  "<div class='content'>" . $info['comment_body'] ."</div>";
      echo"</div>";

  }
  ?>

    <!-- <div class="comment">
        <div class="user-image"><img src="http://www.gravatar.com/avatar/98d247dcb9453a0d5adc70cd6b3acde9?s=18&d=identicon&r=PG" /></div>
        <div class="user">skankhunt42</div>
        <div style="clear:both;"></div>
        <div class="content">The game has changed. The word is out. And you... are a killer. Apparently it's all over town.
        Somebody crossed you, you got angry, you crushed their skull with an ATM machine. Who cares! Just
        as long as it's our competitors who believe it and not the police.</div>
    </div> -->
    <div>
      <form method="post" class="submit" action="forumhandler.php">
        <!-- Submit Comment: <input type="text" name="FirstName" value="some words"><br>
        <input type="submit" value="Submit"> -->
      Submit Comment:  <input type="text" id="commentbox" name="comment" value=""><br>
      <input type="submit" name="submit" value="Submit">

      </form>
    </div>
  </div>

</body>
</html>
