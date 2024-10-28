<?php
    include("INCLUDE/config.php");
    if(isset($_POST['hapus']))
    {
        $berita0007 = $_POST['beritakode'];
        $beritaADRIANNUS = $_POST['beritajudul'];
        $kategoriberita0007 = $_POST['kategorikode'];
        $event0007 = $_POST['eventkode'];
		$travelKODE = $_POST['travelkode'];

        mysqli_query($connection,"insert into adriannus values ('$berita0007','$beritaADRIANNUS','$kategoriberita0007','$event0007','$travelKODE')");
        header("location:adriannus.php");
    }
    $datatravel = mysqli_query($connection,"select * from travel");

    //menerima kiriman data dari destinasi.php
    $berita0007 = $_GET['hapus'];
    mysqli_query($connection, "DELETE FROM adriannus WHERE berita0007 = '$berita0007'");
    echo "<script>alert('DATA BERHASIL DIHAPUS');
    document.location='adriannus.php'</script>";
?>