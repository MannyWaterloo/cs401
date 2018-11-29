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
<div class="largeCenterText">Super Secret Plans</div>
<div class="forum">
  <?php
  $infos = $dao->getComments();
  foreach ($infos as $info){

      echo "<div class='comment'>";
        echo  "<div class='user'>" . $info['user_username'] . "</div>";
        echo"<br>";
        // echo  "<div class='content'>" . $info['comment_body'] ."</div>";
        echo  "<div class='content'>" . htmlspecialchars($info['comment_body']) ."</div>";

      echo"</div>";

  }
  ?>

    <div>
      <form method="post" class="submit" action="forumhandler.php">
      <!-- Submit Comment:  <input type="text" id="commentbox" name="comment" value=""><br> -->
      <textarea type="text" id="commentbox" name="comment" value=""></textarea><br>
        <input type="submit" id="submit" name="submit" value="Submit">
      </form>
    </div>
  </div>

</body>
</html>
