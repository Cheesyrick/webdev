<!doctype html>
<?php
    include "include/config.php";
?>

<?php include "INCLUDE/head.php" ?>
    <body class="sb-nav-fixed">
        <?php include "INCLUDE/menunav.php"?>
        <div id="layoutSidenav">
        <?php include "INCLUDE/menu.php"?>
            <div id="layoutSidenav_content">
                <main>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
    <title>Website Saya</title>
</head>
    <body>

    <!-- ini bagian kerja saya -->
    <div class="row">
    <div class="col-sm-1">
    </div>

    <div class="col-sm-10">
    <div class="jumbotron mt-5">
        <h2 class="display-5">Daftar data Kategori Wisata</h2>
    </div>

    <!-- untuk membuat form pencarian data -->
    <!-- form search 1 -->
    <form method="POST">
        <div class="form-group row mb-2">
            <label for="search" class="col-sm-3">Cari Nama Kategori Kode</label>
            <div class="col-sm-6">
                <input type="text" name="search" class="form-control" id="search" value="<?php if (isset($_POST['search'])) {echo $_POST["search"];} ?>" placeholder="Cari Kategori Nama Kode">
            </div>
            <input type="submit" name="kirim" class="col-sm-1 btn btn-primary" value="search">
        </div>
    </form>
    <!-- akhir dari code line form -->

    <table class="table table-dark table-striped">
    <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Kategori Kode</th>
      <th scope="col">Nama Kategori Kode</th>
      <th scope="col">Keterangan Kategori</th>
      <th scope="col">Referensi Kategori</th>
    </tr>
    </thead>
    <tbody>
    <?php   
        if(isset($_POST["kirim"]))
        {
            $search = $_POST["search"];
            $query = mysqli_query($connection,"select kategoriwisata.* from kategoriwisata where kategoriNAMA like '%".$search."%'");
        }
        else
        {
            $query = mysqli_query($connection,"select kategoriwisata.* from kategoriwisata");
        }
        $nomor = 1;
        while($row = mysqli_fetch_array($query)){
    ?>
    <tr>
      <td><?php echo $nomor; ?></td>
      <td><?php echo $row['kategoriKODE'];?></td>
      <td><?php echo $row['kategoriNAMA'];?></td>
      <td><?php echo $row['kategoriKET'];?></td>
      <td><?php echo $row['kategoriREFERENCE'];?></td>
    </tr>
    <?php 
            $nomor++;
        }
    ?>
    </tbody>
    </table>
    </div>
    <!-- end table -->

    </div>
    <!-- ini bagian akhir kerja saya -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>

  </main>
                <?php include "INCLUDE/footer.php"?>
            </div>
        </div>
        <?php include "INCLUDE/jsscript.php" ?>
</body>
</html>