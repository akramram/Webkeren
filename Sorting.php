<!DOCTYPE html>
<html>
<head>
	<title>Sorting</title>
	<link rel="stylesheet" href="./css/style.css">
</head>
<body>
	<?php

	  if(isset($_POST['btnOk'])){

	  $nama= $_POST['nama'];

	  foreach($nama as $key => $val){

	  echo 'Data ke - ' .$key. ' = '.$nama[$key].' <br/>';

	  }

	  }

	  ?>

	<form method="get" name="frm" action="">

	  <input name="jumlah" type="text" />

	  <input type="submit" name="btnJumlah" value="Ok" />

	  </form>

	<form method="post" name="frmpost" action="">

	  <table width="547" border="0" cellpadding="0" cellspacing="0">

	  <!--DWLayoutTable-->

	  <tr>

	  <td width="32" height="22" valign="top">No</td>

	  <td width="240" valign="top">Isi Array</td>

	  </tr>

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

	  <td height="23"><?php echo $i; ?></td>

	  <td><input name="nama[]" type="text" size="30" /></td>

	  </tr>

	  <?php

	  }

	  ?>

	  <tr>

	  <td height="23" colspan="4" align="right"><input type="submit" name="btnOk" value="Simpan" /></td>

	  </tr>

	  </table>

	  </form>

<h1>Sorting Ascending</h1>
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

<h1>Sorting Descending</h1>
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
</body>
</html>
