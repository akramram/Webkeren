<!DOCTYPE html>
<html>
<head>
	<title></title>
<<<<<<< HEAD
	<link rel="stylesheet" href="/css/style.css">
=======
  <link rel="stylesheet" href="./css/style.css">
>>>>>>> 8c028403d6e905a1ea610564ee772abcfb7eff45
</head>
<body>
	<div class="col-12">

<<<<<<< HEAD
		<div class="col-3">
			<h1>Sorting Ascending</h1>
			<?php
			$cars = array("Volvo", "BMW", "Toyota","xride","tamiya" ,"Avanza");
			sort($cars);
=======
  <div class="col-3" style="float:left;">
    <h1>Sorting Ascending</h1>
    <?php
    $cars = array("Volvo", "BMW", "Toyota","xride","tamiya" ,"Avanza");
    sort($cars);
>>>>>>> 8c028403d6e905a1ea610564ee772abcfb7eff45

			$clength = count($cars);
			for($x = 0; $x < $clength; $x++) {
				echo $cars[$x];
				echo "<br>";
			}
			?>
		</div>

<<<<<<< HEAD
		<div class="col-3">
			<h1>Sorting Descending</h1>
			<?php
			$cars = array("Volvo", "BMW", "Toyota","xride","tamiya" ,"Avanza");
			rsort($cars);
=======
  <div class="col-3" style="float:left;">
    <h1>Sorting Descending</h1>
    <?php
    $cars = array("Volvo", "BMW", "Toyota","xride","tamiya" ,"Avanza");
    rsort($cars);
>>>>>>> 8c028403d6e905a1ea610564ee772abcfb7eff45

			$clength = count($cars);
			for($x = 0; $x < $clength; $x++) {
				echo $cars[$x];
				echo "<br>";
			}
			?>
		</div>
	</div>



</body>
</html>
