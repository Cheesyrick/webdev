<?php
    include("INCLUDE/config.php");
    if(isset($_POST['hapus']))
    {
        $destinasiKODE =  $_POST['kodedestinasi'];
        $destinasiNAMA = $_POST['namadestinasi'];
        $destinasiKET = $_POST['keterangandestinasi'];
        $kategoriKODE = $_POST['kodekategori'];

        $fotodestinasi = $_FILES['file']['name'];
        $file_tmp = $_FILES["file"]["tmp_name"];
        $ekstensifile = pathinfo($fotomangaFILE, PATHINFO_EXTENSION);

        if(($ekstensifile == "jpg") or ($ekstensifile == "JPG"))
        {
            move_uploaded_file($file_tmp, 'images/'.$fotodestinasi);
            mysqli_query($connection,"insert into destinasik values ('$destinasiKODE', '$destinasiNAMA', '$destinasiKET', '$fotodestinasi', '$kategoriKODE')");
            header("location:destinasi.php");
        }
            mysqli_query($connection,"insert into destinasik values ('$destinasiKODE', '$destinasiNAMA', '$destinasiKET', '$fotodestinasi', '$kategoriKODE')");
            header("location:destinasi.php");
    }
    $datakategori = mysqli_query($connection,"select * from kategoriwisata");

    //menerima kiriman data dari destinasi.php
    $kodedestinasi = $_GET['hapus'];
    mysqli_query($connection,"delete from destinasik where destinasiKODE = '$kodedestinasi'");
    echo "<script>alert('DATA BERHASIL DIHAPUS');
    document.location='destinasi.php'</script>";
?>