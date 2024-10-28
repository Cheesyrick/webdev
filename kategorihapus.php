<?php
    include("INCLUDE/config.php");
    if(isset($_POST['hapus']))
    {
        $kategoriKODE = $_POST['inputKategoriKode'];
        $kategoriNAMA = $_POST['inputKategoriNama'];
        $kategoriKET = $_POST['inputKategoriKet'];
        $kategoriREFERENCE = $_POST['inputKategoriRef'];

        mysqli_query($connection, "insert into kategoriwisata values ('$kategoriKODE', '$kategoriNAMA', '$kategoriKET', '$kategoriREFERENCE')");
        header("location: inputkategori.php");
    }

    $berita0007 = $_GET['hapus'];
    mysqli_query($connection, "DELETE FROM kategoriwisata WHERE kategoriKODE = '$berita0007'");
    echo "<script>alert('DATA BERHASIL DIHAPUS');
    document.location='inputkategori.php'</script>";
?>