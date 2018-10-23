<!DOCTYPE html>
<html>
<head>
	<title>Perbandingan</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
  <?php
  if(isset($_POST['banding'])){
    $bil1 = $_POST['bil1'];
    $bil2 = $_POST['bil2'];


  }
  ?>
	<div class="kalkulator">
		<h2 class="judul">Perbandingan</h2>
		<form method="post" action="perbandingan.php">
			<input type="text" name="bil1" class="bilband" autocomplete="off" placeholder="Angka-1">
			<input type="text" name="bil2" class="bilband" autocomplete="off" placeholder="Angka-2">
			<input type="submit" name="banding" value="Bandingkan" class="tombolbd">
		</form>
		<?php if(isset($_POST['hitung'])){ ?>

		<?php }else{ ?>
			<h2 class="hasilbd">Hasil Perbandingan</h2>
      <?php if ($bil1 < $bil2){
        echo "$bil1 Lebih Kecil dari $bil2";
      } elseif ($bil1 > $bil2){
        echo "$bil1 Lebih Besar dari $bil2 ";
      } else {
        echo "$bil1 Sama besar dengan $bil2";
      }?>
		<?php } ?>
	</div>
</body>
</html>
