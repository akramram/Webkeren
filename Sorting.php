<!DOCTYPE html>
<html>
<head>
	<title>Sorting</title>
	<link rel="stylesheet" href="./css/style.css">
</head>
<body>
	<nav>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="aritmatika.php">Aritmatika</a></li>
			<li><a href="perbandingan.php">Perbandingan</a></li>
			<li><a class="active" href="sorting.php">Sorting</a></li>
		</ul>
	</nav>
	<div class="kalkulator">
		<h2 class="judul">Sorting</h2>

		<form method="get" name="frm" action="Sorting.php">
			<label style="color:white;">Banyak Data yang diinginkan : </label>
			<input name="jumlah" class="bil" type="number" placeholder="Banyak Data" />

			<input type="submit" name="btnJumlah" class="tombol" value="Ok" />


		</form>

		<form method="post" name="frmpost" action="">

			<table width="547" border="0" cellpadding="0" cellspacing="0">

				<!--DWLayoutTable-->



				<?php

				if(isset($_GET['jumlah']) && $_GET['jumlah']>0){

					$jumlah_form = $_GET['jumlah'];

				}

				else{

					$jumlah_form = 1;

				}

				for($i=1; $i<=$jumlah_form; $i++){

					?>

					<tr>

						<td height="23"></td>

						<td>
							<label style="color:white;">Data Ke - <?php echo $i; ?></label> <br>
							<input name="nama[]" class="bil" type="text" size="30" />
						</td>

						</tr>

						<?php

					}

					?>





				</table>
<input type="submit" class="tombol" name="btnOk" value="Simpan" />
<button type="reset" class="tombol" value="Reset">Reset</button>

			</form>
			<div style="color:white">

				<?php

				if(isset($_POST['btnOk'])){

					$nama= $_POST['nama'];

					foreach($nama as $key => $val){

						echo 'Data ke - ' .($key+1). ' = '.$nama[$key].' <br/>';

					}

				}
				?>
			</div>


		</div>


<div  style="color:white;">
	<div class="col-5">
		<div class="kalkulator">
			<h2 class="judul">Hasil Sorting Ascending</h2>
			<?php
			if (empty($nama)) {
				echo "Data Kosong";
			}else {
				sort($nama);
				$arrlength=count($nama);
				for($x=0;$x<$arrlength;$x++)
				{
					echo $nama[$x];
					echo "<br>";
				}
			}
			?>
		</div>
	</div>

	<div class="col-5">
		<div class="kalkulator">
			<h2 class="judul">Hasil Sorting Descending</h2>
			<?php
			if (empty($nama)) {
				echo "Data Kosong";
			}else {
				rsort($nama);
				$arrlength=count($nama);
				for($x=0;$x<$arrlength;$x++)
				{
					echo $nama[$x];
					echo "<br>";
				}
			}
			?>
		</div>
	</div>
</div>
	</body>
	</html>
