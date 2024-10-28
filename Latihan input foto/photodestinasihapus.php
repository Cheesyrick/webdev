<?php
    include("INCLUDE/config.php");
	if(isset($_POST['Simpan']))
	{
		$fotodestinasiKODE = $_POST['inputkode'];
		$fotodestinasiNAMA = $_POST['inputnama'];

		$fotodestinasiFILE = $_FILES['file']['name'];
		$file_tmp = $_FILES["file"]["tmp_name"];

		$destinasiKODE = $_POST['kodedestinasi'];

		$ekstensifile = pathinfo($fotodestinasiFILE, PATHINFO_EXTENSION);

		// PERIKSA EKSTEN FILE HARUS JPG ATAU jpg
		if(($ekstensifile == "jpg") or ($ekstensifile == "JPG"))
		{
			move_uploaded_file($file_tmp, 'images/'.$fotodestinasiFILE); //unggah file ke folder images
			mysqli_query($connection, "insert into fotodestinasi value ('$fotodestinasiKODE', '$fotodestinasiNAMA ', '$fotodestinasiFILE', '$destinasiKODE')");
			header("location:photodestinasi.php");
		}

	}
	$datadestinasi = mysqli_query($connection, "select * from destinasi");

	//untuk hapus
	$inputkode = $_GET["hapus"];
	mysqli_query ($connection, "DELETE FROM fotodestinasi WHERE fotodestinasiKODE = '$inputkode'");
	echo "<script> alert('data berhasil dihapus'); 
	document.location='photodestinasi.php' </script>";
?>