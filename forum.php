<!DOCTYPE html>
<html>
<?php require_once "header.php"; ?>
<?php require_once "footer.php"; ?>
<body>

  <?php
  $commentarray = $dao->getComments();
  foreach ($commentarray as $value) {
    echo"<div>"; echo("$value"); echo"</div>";

  } ?>

  <div class="forum">
    <div class="comment">
        <div class="user-image"><img src="http://www.gravatar.com/avatar/df125f7b89730a39163bb17c1c18c1d9?s=18&d=identicon&r=PG" /></div>
        <div class="user">Flaming-Dragon</div>
        <div style="clear:both;"></div>
        <div class="content">The game has changed. The word is out. And you... are a killer. Apparently it's all over town.
        Somebody crossed you, you got angry, you crushed their skull with an ATM machine. Who cares! Just
        as long as it's our competitors who believe it and not the police.</div>
    </div>
    <div class="comment">
        <div class="user-image"><img src="http://www.gravatar.com/avatar/98d247dcb9453a0d5adc70cd6b3acde9?s=18&d=identicon&r=PG" /></div>
        <div class="user">Rick-Dangerous</div>
        <div style="clear:both;"></div>
        <div class="content">The game has changed. The word is out. And you... are a killer. Apparently it's all over town.
        Somebody crossed you, you got angry, you crushed their skull with an ATM machine. Who cares! Just
        as long as it's our competitors who believe it and not the police.</div>
    </div>
    <div class="comment">
        <div class="user-image"><img src="http://www.gravatar.com/avatar/98d247dcb9453a0d5adc70cd6b3acde9?s=18&d=identicon&r=PG" /></div>
        <div class="user">skankhunt42</div>
        <div style="clear:both;"></div>
        <div class="content">The game has changed. The word is out. And you... are a killer. Apparently it's all over town.
        Somebody crossed you, you got angry, you crushed their skull with an ATM machine. Who cares! Just
        as long as it's our competitors who believe it and not the police.</div>
    </div>
    <div>
      <form class ="comment" action="/action_page.php">
        Submit Comment: <input type="text" name="FirstName" value="some words"><br>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>

</body>
</html>
