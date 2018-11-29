<!DOCTYPE html>
<html>
<?php require_once "header.php"; ?>
<?php require_once "footer.php"; ?>

<link rel="stylesheet" href="css/slider.css" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<script src="js/jquery.flexslider-min.js"></script>

<script>
$(document).ready(function () {
$('.flexslider').flexslider({
    animation: 'fade',
    controlsContainer: '.flexslider'
});
});
</script>

<!-- <div id="shipList">
  <img class = "size-chart" src="ship-sizes.png"/>
  <img class = "type-chart" src="ship-types.png"/>
  <ul>
    <li><a id="listHeading">Capital</a></li>
    <li><a href="https://robertsspaceindustries.com/pledge/ships/orion/Orion">Orion                  1</a></li>
    <li><a id="listHeading">Large</a></li>
    <li><a href="https://robertsspaceindustries.com/pledge/ships/reclaimer/Reclaimer">Reclaimer              1</a></li>
    <li><a href="https://robertsspaceindustries.com/pledge/ships/merchantman/Merchantman">Merchantman            1</a></li>
    <li><a href="https://robertsspaceindustries.com/pledge/ships/rsi-constellation/Constellation-Aquila">Constellation Aquila   1</a></li>
    <li><a id="listHeading">Medium</a></li>
    <li><a href="https://robertsspaceindustries.com/pledge/ships/drake-cutlass/Cutlass-Black">Cutlass Black          2</a></li>
    <li><a id="listHeading">Small</a></li>
    <li><a href="https://robertsspaceindustries.com/pledge/ships/rsi-aurora/Aurora-MR">Aurora MR              3</a></li>
    <li><a href="https://robertsspaceindustries.com/pledge/ships/mustang/Mustang-Alpha">Mustang Alpha          1</a></li>
    <li><a href="https://robertsspaceindustries.com/pledge/ships/sabre/Sabre">Sabre                  1</a></li>
    <li><a href="https://robertsspaceindustries.com/pledge/ships/anvil-hornet/F7C-Hornet">F7C Hornet             2</a></li>
    <li><a href="https://robertsspaceindustries.com/pledge/ships/anvil-arrow/Arrow">Arrow                  1</a></li>
  </ul>
</div> -->

<div id="shipList">
<table>
  <tr>
    <th>Ship</th>
    <th>Quantity</th>

  </tr>
  <tr>
    <td><a href="https://robertsspaceindustries.com/pledge/ships/orion/Orion">Orion</td>
    <td>1</td>

  </tr>
  <tr>
    <td><a href="https://robertsspaceindustries.com/pledge/ships/reclaimer/Reclaimer">Reclaimer</td>
    <td>1</td>

  </tr>
  <tr>
    <td><a href="https://robertsspaceindustries.com/pledge/ships/merchantman/Merchantman">Merchantman</td>
    <td>1</td>

  </tr>
  <tr>
    <td><a href="https://robertsspaceindustries.com/pledge/ships/rsi-constellation/Constellation-Aquila">Constellation Aquila</td>
    <td>1</td>

  </tr>
  <tr>
    <td><a href="https://robertsspaceindustries.com/pledge/ships/drake-cutlass/Cutlass-Black">Cutlass Black</td>
    <td>1</td>

  </tr>
  <tr>
    <td><a href="https://robertsspaceindustries.com/pledge/ships/rsi-aurora/Aurora-MR">Aurora MR</td>
    <td>3</td>

  </tr>
  <tr>
    <td><a href="https://robertsspaceindustries.com/pledge/ships/mustang/Mustang-Alpha">Mustang Alpha</td>
    <td>1</td>

  </tr>
  <tr>
    <td><a href="https://robertsspaceindustries.com/pledge/ships/sabre/Sabre">Sabre</td>
    <td>1</td>

  </tr>
  <tr>
    <td><a href="https://robertsspaceindustries.com/pledge/ships/anvil-hornet/F7C-Hornet">F7C Hornet</td>
    <td>2</td>

  </tr>
  <tr>
    <td><a href="https://robertsspaceindustries.com/pledge/ships/anvil-arrow/Arrow">Arrow</td>
    <td>1</td>

  </tr>
</table>
</div>
<body>

<div class="flex-container">
	<div class="flexslider">
		<ul class="slides">
			<li>
				<a href="#"><img src="img/banumm.jpg" /></a>
			</li>

			<li>
				<img src="img/arrow.jpg" />
			</li>

			<li>
				<img src="img/auroramr.jpg" />
				<!-- <p>Designing The Well-Tempered Web</p> -->
			</li>
      <li>
        <a href="#"><img src="img/constellationaquila.png" /></a>
      </li>
      <li>
        <a href="#"><img src="img/cutlassblack.png" /></a>
      </li>
      <li>
        <a href="#"><img src="img/hornet.png" /></a>
      </li>
      <li>
        <a href="#"><img src="img/orion.jpg" /></a>
      </li>
      <li>
        <a href="#"><img src="img/reclaimer.jpg" /></a>
      </li>
      <li>
        <a href="#"><img src="img/sabre.jpg" /></a>
      </li>
		</ul>
	</div>
</div>

<!-- <img class = "size-comparison" src="size-comparison.png"/>
<p class = "sc-source"><a href="ship-roster.php">Source: YT's Ship Scale Comparison Chart -- Duck Hunt Edition</a></p> -->

<script>
$(document).ready(function () {
	$('.flexslider').flexslider({
		animation: 'fade',
		controlsContainer: '.flexslider'
	});
});
</script>

</body>
</html>
