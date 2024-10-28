<?php
    include("INCLUDE/config.php");
    if(isset($_POST['hapus']))
    {
        $olehKODE = $_POST['inputkode'];
		$olehNAMA = $_POST['inputtravel'];

		$olehKET = $_POST['inputket'];
        $destinasiKODE = $_POST['kodedestinasi'];

        mysqli_query($connection, "insert into oleholeh value ('$olehKODE', '$olehNAMA', '$olehKET','$destinasiKODE')");
        header("location:oleholeh.php");
    }
    $datadestinasi = mysqli_query($connection,"select * from destinasik");

    //menerima kiriman data dari destinasi.php
    $inputkode = $_GET['hapus'];
    mysqli_query($connection,"delete from oleholeh where olehKODE = '$inputkode'");
    echo "<script>alert('DATA BERHASIL DIHAPUS');
    document.location='oleholeh.php'</script>";
?>