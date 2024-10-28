<!DOCTYPE html>
<html lang="en">
<?php 
    include("INCLUDE/config.php");
    if(isset($_POST['Simpan']))
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
?>

<?php include "INCLUDE/head.php" ?>
    <body class="sb-nav-fixed">
        <?php include "INCLUDE/menunav.php"?>
        <div id="layoutSidenav">
        <?php include "INCLUDE/menu.php"?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Input data Berita</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Menginput data berita disini</li>
                        </ol>
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
    <form method="POST">

    <div class="mb-3 row">
    <label for="beritakode" class="col-sm-2 col-form-label">Berita Kode</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" name="beritakode" id="beritakode">
        </div>
    </div>

    <div class="mb-3 row">
    <label for="beritajudul" class="col-sm-2 col-form-label">Berita Judul</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" name="beritajudul" id="beritajudul">
        </div>
    </div>

    <div class="mb-3 row">
    <label for="kategorikode" class="col-sm-2 col-form-label">Kategori Berita Kode</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" name="kategorikode" id="kategorikode">
        </div>
    </div>

    <div class="mb-3 row">
    <label for="eventkode" class="col-sm-2 col-form-label">Event Kode</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" name="eventkode" id="eventkode">
        </div>
    </div>

    <div class="mb-3 row">
        <label for="travelkode" class="col-sm-2 col-form-label">Travel Kode</label>
            <div class="col-sm-10">
            <select type="form-control" class="form-control" name="travelkode" id="travelkode">
                <option>Travel Kode</option>
                <?php while($row = mysqli_fetch_array($datatravel)) { ?>
                <option value="<?php echo $row["travelKODE"]?>">
                <?php echo $row["travelKODE"]?>
                <?php echo $row["travelNAMA"]?>
                </option>
                <?php } ?>
            </div>
            </select>
    </div>

    <div class="form-group row">
    <div class="mt-3"></div>
    <div class="col-sm-2"></div>
    <div class="col-sm-10">
    <input type="submit" class="btn btn-secondary" value="Simpan" name="Simpan"></input>
    <input type="reset" class="btn btn-success" value="Batal"></input>
    </div>
    </div>

    </form>

    <div class="jumbotron mt-5">
        <h2 class="display-5">Hasil entri data</h2>
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
      <th scope="col">Travel Kode</th>
      <th colspan="2" style="text-align : center">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php

        $jumlahtampilan = 3;
        $halaman = (isset($_GET['page'])) ? $_GET['page'] : 1;
        $mulaitampilan = ($halaman - 1) * $jumlahtampilan;

        if(isset($_POST["kirim"]))
        {
            $search = $_POST["search"];
            $query = mysqli_query($connection,"select adriannus.* from adriannus where beritaADRIANNUS like '%".$search."%' limit $mulaitampilan, $jumlahtampilan");
        }
        elseif (isset($_POST["kirim1"])){
            $search1 = $_POST["search1"];
            $query = mysqli_query($connection,"select adriannus.* from adriannus where kategoriberita0007 like '%".$search1."%' limit $mulaitampilan, $jumlahtampilan");
        }
        else
        {
            $query = mysqli_query($connection, "SELECT adriannus.* FROM adriannus LIMIT $mulaitampilan, $jumlahtampilan");        }

        $angka = 1;
        while ($row = mysqli_fetch_array($query)) {
    ?>
    <tr>
        <td><?php echo $mulaitampilan + $angka; ?></td>
        <td><?php echo $row['berita0007'];?></td>
        <td><?php echo $row['beritaADRIANNUS'];?></td>
        <td><?php echo $row['kategoriberita0007'];?></td>
        <td><?php echo $row['event0007'];?></td>
        <td><?php echo $row['travelKODE'];?></td>
        <td width = 5px>
        <a href="beritaedit.php?ubah=<?php echo $row["berita0007"]?>"
        class="btn btn-success btn-sm" title="EDIT"/>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
        </svg>
        </td>
        <td width = 5px>
        <a href="beritahapus.php?hapus=<?php echo $row["berita0007"]?>"
        class="btn btn-danger btn-sm" title="HAPUS"/>
        <i class="bi bi-trash"></i>
        </td>
    </tr>
    <?php 
            $angka++;
        }
    ?>
    </tbody>
    </table>
    </div>
    <?php 
    $query = mysqli_query($connection, "SELECT * FROM adriannus");
    $jumlahrecord = mysqli_num_rows($query);
    $jumlahpage = ceil($jumlahrecord/$jumlahtampilan);
    ?>

    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <li class="page-item"><a class="page-link" href="?page=1">PERTAMA</a></li>
            <?php for ($nomorhal = 1; $nomorhal <= $jumlahpage; $nomorhal++) { ?>
                <li class="page-item">
                    <?php if ($nomorhal != $halaman) { ?>
                        <a class="page-link" href="?page=<?php echo $nomorhal ?>"><?php echo $nomorhal ?></a>
                    <?php } else { ?>
                        <a class="page-link" href="?page=<?php echo $nomorhal ?>"><?php echo $nomorhal ?></a>
                    <?php } ?>
                </li>
            <?php } ?>
            <li class="page-item"><a class="page-link" href="?page=<?php echo $jumlahpage ?>">TERAKHIR</a></li>
        </ul>
    </nav>
    </div>

</body>
</main>
                <?php include "INCLUDE/footer.php"?>
            </div>
        </div>
        <?php include "INCLUDE/jsscript.php" ?>
</body>

</html>