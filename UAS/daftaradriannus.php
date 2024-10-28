<!DOCTYPE html>
<html lang="en">
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
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Adriannus</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
</head>

<div class="row">
    <div class="col-sm-1">
    </div>

    <div class="col-sm-10">
    <div class="jumbotron mt-5">
        <h2 class="display-5">Daftar data berita</h2>
    </div>

    <!-- untuk membuat form pencarian data -->
    <!-- form search 1 -->
    <form method="POST">
        <div class="form-group row mb-2">
            <label for="search" class="col-sm-3">Cari Berita Judul</label>
            <div class="col-sm-6">
                <input type="text" name="search" class="form-control" id="search" value="<?php if (isset($_POST['search'])) {echo $_POST["search"];} ?>" placeholder="Cari Judul Berita">
            </div>
            <input type="submit" name="kirim" class="col-sm-1 btn btn-primary" value="search">
        </div>
    </form>
    <!-- akhir dari code line form -->

    <!-- untuk membuat form pencarian data -->
    <!-- form search 2 -->
    <form method="POST">
        <div class="form-group row mb-2">
            <label for="search1" class="col-sm-3">Cari kategori kode</label>
            <div class="col-sm-6">
                <input type="text" name="search1" class="form-control" id="search1" value="<?php if (isset($_POST['search1'])) {echo $_POST["search1"];} ?>" placeholder="Cari kategori kode">
            </div>
            <input type="submit" name="kirim1" class="col-sm-1 btn btn-primary" value="search">
        </div>
    </form>
    <!-- akhir dari code line form -->


    <table class="table table-dark table-striped">
    <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Berita Kode</th>
      <th scope="col">Berita Judul</th>
      <th scope="col">Kategori Berita Kode</th>
      <th scope="col">Event Kode</th>
      <th scope="col">Nama Travel</th>
    </tr>
    </thead>
    <tbody>
    <?php
        if(isset($_POST["kirim"]))
        {
            $search = $_POST["search"];
            $query = mysqli_query($connection,"select * from adriannus, travel where beritaADRIANNUS like '%".$search."%' and adriannus.travelKODE = travel.travelKODE");
        }
        elseif (isset($_POST["kirim1"])){
            $search1 = $_POST["search1"];
            $query = mysqli_query($connection,"select * from adriannus, travel where kategoriberita0007 like '%".$search1."%' and adriannus.travelKODE = travel.travelKODE");
        }
        else
        {
            $query = mysqli_query($connection,"select * from adriannus, travel where adriannus.travelKODE = travel.travelKODE");
        }

        $angka = 1;
        while ($row = mysqli_fetch_array($query)) {
    ?>
    <tr>
        <td><?php echo $angka; ?></td>
        <td><?php echo $row['berita0007'];?></td>
        <td><?php echo $row['beritaADRIANNUS'];?></td>
        <td><?php echo $row['kategoriberita0007'];?></td>
        <td><?php echo $row['event0007'];?></td>
        <td><?php echo $row['travelNAMA'];?></td>
    </tr>
    <?php 
            $angka++;
        }
    ?>
    </tbody>
    </table>
    </div> <!-- end of div col-sm-10 -->
    </div> <!-- end of div row -->
</body>
</main>
        <?php include "INCLUDE/footer.php"?>
        <?php include "INCLUDE/jsscript.php" ?>
</body>

</html>