<?php
    include("INCLUDE/config.php");
    if(isset($_POST['hapus']))
    {
        $destinasiKODE =  $_POST['kodedestinasi'];
        $destinasiNAMA = $_POST['namadestinasi'];
        $kategoriKODE = $_POST['kodekategori'];

        mysqli_query($connection,"insert into destinasi values ('$destinasiKODE', '$destinasiNAMA', '$kategoriKODE')");
        header("location:destinasi.php");
    }
    $datakategori = mysqli_query($connection,"select * from kategoriwisata");

    //menerima kiriman data dari destinasi.php
    $kodedestinasi = $_GET['hapus'];
    mysqli_query($connection,"delete from destinasi where destinasiKODE = '$kodedestinasi'");
    echo "<script>alert('DATA BERHASIL DIHAPUS');
    document.location='destinasi.php'</script>";
?>