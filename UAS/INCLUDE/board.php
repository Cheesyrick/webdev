<?php
    //ada 8
    include("config.php");
    //1
    $test = mysqli_query($connection, "SELECT * FROM fotodestinasi");
    $jumlah = mysqli_num_rows($test);

    //2
    $dua = mysqli_query($connection, "SELECT * FROM destinasik");
    $jumlah2 = mysqli_num_rows($dua);

    //3
    $tiga = mysqli_query($connection, "SELECT * FROM hotel");
    $jumlah3 = mysqli_num_rows($tiga);

    //4
    $empat = mysqli_query($connection, "SELECT * FROM restaurant");
    $jumlah4 = mysqli_num_rows($empat);

    //5
    $lima = mysqli_query($connection, "SELECT * FROM travel");
    $jumlah5 = mysqli_num_rows($lima);

    //6
    $enam = mysqli_query($connection, "SELECT * FROM oleholeh");
    $jumlah6 = mysqli_num_rows($enam);

    //7
    $tujuh = mysqli_query($connection, "SELECT * FROM adriannus");
    $jumlah7 = mysqli_num_rows($tujuh);

    //8
    $delapan = mysqli_query($connection, "SELECT * FROM manga");
    $jumlah8 = mysqli_num_rows($delapan);
?>

<div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Jumlah data Foto Destinasi: <?php echo $jumlah?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="daftarphotodestinasi.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Jumlah data Destinasi: <?php echo $jumlah2?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="daftardestinasi.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Jumlah data Hotel: <?php echo $jumlah3?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="daftarhotel.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Jumlah data Restaurant: <?php echo $jumlah4?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="daftarrestaurant.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Jumlah data Travel: <?php echo $jumlah5?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="daftartravel.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Jumlah data Oleh-oleh: <?php echo $jumlah6?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="daftaroleholeh.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Jumlah data Berita: <?php echo $jumlah7?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="daftaradriannus.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Jumlah data Manga: <?php echo $jumlah8?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="daftarmanga.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
</div>