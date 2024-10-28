<?php
    include("INCLUDE/config.php");
    if(isset($_POST['hapus']))
    {
		$hotelKODE = $_POST['inputkode'];
		$hotelNAMA = $_POST['inputhotel'];

		$fotohotelFILE = $_FILES['file']['name'];
		$file_tmp = $_FILES["file"]["tmp_name"];

		$destinasiKODE = $_POST['kodedestinasi'];

		$ekstensifile = pathinfo($fotohotelFILE, PATHINFO_EXTENSION);

		// PERIKSA EKSTEN FILE HARUS JPG ATAU jpg
		if(($ekstensifile == "jpg") or ($ekstensifile == "JPG"))
		{
			move_uploaded_file($file_tmp, 'images/'.$fotohotelFILE); //unggah file ke folder images
			mysqli_query($connection, "insert into hotel value ('$hotelKODE', '$hotelNAMA', '$fotohotelFILE', '$destinasiKODE')");
			header("location:hotel.php");
		}
            mysqli_query($connection, "insert into hotel value ('$hotelKODE', '$hotelNAMA', '$fotohotelFILE', '$destinasiKODE')");
            header("location:hotel.php");
	}
	$datadestinasi = mysqli_query($connection, "select * from destinasi");

    $inputkode = $_GET['hapus'];
    mysqli_query($connection,"delete from hotel where hotelKODE = '$inputkode'");
    echo "<script>alert('DATA BERHASIL DIHAPUS');
    document.location='hotel.php'</script>";
?>