<?php
    include("INCLUDE/config.php");
    if(isset($_POST['hapus']))
    {
		$restaurantKODE = $_POST['inputkode'];
		$restaurantNAMA = $_POST['inputnama'];

		$restaurantKET = $_POST['inputket'];
        $travelKODE = $_POST['travelkode'];

        mysqli_query($connection, "insert into restaurant value ('$restaurantKODE', '$restaurantNAMA', '$restaurantKET', '$travelKODE')");
        header("location:restaurant.php");
    }
    $datatravel = mysqli_query($connection,"select * from travel");

    $inputkode = $_GET['hapus'];
    mysqli_query($connection,"delete from restaurant where restaurantKODE = '$inputkode'");
    echo "<script>alert('DATA BERHASIL DIHAPUS');
    document.location='restaurant.php'</script>";
?>