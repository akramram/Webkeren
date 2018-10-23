<!DOCTYPE html>
<html>
<head>
	<title>Sorting</title>
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>
	<div class="col-12">
  <div class="col-3" style="float:left;">
    <h1>Sorting Ascending</h1>

      <?php
      $cars = array("Volvo", "BMW", "Toyota","xride","tamiya" ,"Avanza");
      sort($cars);


			$clength = count($cars);
			for($x = 0; $x < $clength; $x++) {
				echo $cars[$x];
				echo "<br>";
			}
			?>
		</div>
  <div class="col-3" style="float:left;">
    <h1>Sorting Descending</h1>
    <?php
    $cars = array("Volvo", "BMW", "Toyota","xride","tamiya" ,"Avanza");
    rsort($cars);


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
