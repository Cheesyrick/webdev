<!DOCTYPE html>
<html>
<?php
    include("INCLUDE/config.php");
?>

<?php include "INCLUDE/head.php" ?>
    <body class="sb-nav-fixed">
        <?php include "INCLUDE/menunav.php"?>
        <div id="layoutSidenav">
        <?php include "INCLUDE/menu.php"?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>

<head>
    <title>DESTINASI</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
</head>

<body>
    <div class="row">
    <div class="col-sm-1">
    </div>

    <div class="col-sm-10">
    <div class="jumbotron mt-5">
        <h2 class="display-5">Daftar data destinasi wisata </h2>
    </div>

    <!-- untuk membuat form pencarian data -->
    <form method="POST">
        <div class="form-group row mb-2">
            <label for="search" class="col-sm-3">Cari Nama Destinasi</label>
            <div class="col-sm-6">
                <input type="text" name="search" class="form-control" id="search" value="<?php if (isset($_POST['search'])) {echo $_POST["search"];} ?>" placeholder="Cari Nama Destinasi">
            </div>
            <input type="submit" name="kirim" class="col-sm-1 btn btn-primary" value="search">
        </div>
    </form>
    <!-- akhir dari code line form -->

    <table class="table table-dark table-striped">
    <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Kode Destinasi</th>
      <th scope="col">Nama Destinasi</th>
      <th scope="col" >Nama Kategori</th>
    </tr>
    </thead>
    <tbody>
    <?php 
        if(isset($_POST["kirim"]))
        {
            $search = $_POST["search"];
            $query = mysqli_query($connection,"select * from destinasi, kategoriwisata where destinasiNAMA like '%".$search."%' and destinasi.kategoriKODE = kategoriwisata.kategoriKODE");
        }
        else 
        {
            $query = mysqli_query($connection,"select destinasi.* from destinasi, kategoriwisata where destinasi.kategoriKODE = kategoriwisata.kategoriKODE");
        }

        $nomor = 1;

        while($row = mysqli_fetch_array($query))
        {
    ?>
    <tr>
      <td><?php echo $nomor; ?></td>
      <td><?php echo $row['destinasiKODE'];?></td>
      <td><?php echo $row['destinasiNAMA'];?></td>
      <td><?php echo $row['kategoriNAMA'];?></td>
    </tr>
    <?php 
            $nomor++;
        }
    ?>
    </tbody>
    </table>
    </div>

    </div> <!-- ini penutup class=col-sm-10 -->
    </div> <!-- ini penutup class=row -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
<script>
    $(document).ready(function()
    {
        $('#kodekategori').select2(
            {
                closeOnSelect: true,
                allowClear: true,
                placeholder: 'Pilih kategori wisata'
            });
    });
</script>
</body>
                </main>
                <?php include "INCLUDE/footer.php"?>
            </div>
        </div>
        <?php include "INCLUDE/jsscript.php" ?>
</body>

</html>