<?php
    include("INCLUDE/config.php");
    if(isset($_POST['hapus']))
    {
        $mangaKODE = $_POST['inputkode'];
		$mangaNAMA = $_POST['inputmanga'];
        $mangaKET = $_POST['inputket'];
        $fotomangaFILE = $_FILES['file']['name'];
        $file_tmp = $_FILES["file"]["tmp_name"];

        $ekstensifile = pathinfo($fotomangaFILE, PATHINFO_EXTENSION);

		// PERIKSA EKSTEN FILE HARUS JPG ATAU jpg
		if(($ekstensifile == "jpg") or ($ekstensifile == "JPG"))
		{
			move_uploaded_file($file_tmp, 'images/'.$fotomangaFILE); //unggah file ke folder images
			mysqli_query($connection, "insert into manga value ('$mangaKODE', '$mangaNAMA', '$mangaKET', '$fotomangaFILE')");
			header("location:manga.php");
		}
        mysqli_query($connection, "insert into manga value ('$mangaKODE', '$mangaNAMA', '$mangaKET', '$fotomangaFILE')");
        header("location:manga.php");
    }

    $inputkode = $_GET['hapus'];
    mysqli_query($connection,"delete from manga where mangaKODE = '$inputkode'");
    echo "<script>alert('DATA BERHASIL DIHAPUS');
    document.location='manga.php'</script>";
?>