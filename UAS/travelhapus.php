<?php
    include("INCLUDE/config.php");
    if(isset($_POST['hapus']))
    {
        $travelKODE = $_POST['inputkode'];
		$travelNAMA = $_POST['inputtravel'];

		$travelKET = $_POST['inputket'];

        mysqli_query($connection, "insert into travel value ('$travelKODE', '$travelNAMA', '$travelKET')");
        header("location:travel.php");
    }

    $inputkode = $_GET['hapus'];
    mysqli_query($connection,"delete from travel where travelKODE = '$inputkode'");
    echo "<script>alert('DATA BERHASIL DIHAPUS');
    document.location='travel.php'</script>";
?>