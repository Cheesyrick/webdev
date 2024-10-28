<!DOCTYPE html>
<html lang="en">

<?php
    include "include/config.php";
    if (isset($_POST['edit'])) {
        $restaurantKODE = $_POST['inputkode'];
        $restaurantNAMA = $_POST['inputnama'];
        $restaurantKET = $_POST['inputket'];
        $travelKODE = $_POST['travelkode'];

        mysqli_query($connection, "update restaurant set restaurantKODE = '$restaurantKODE', restaurantNAMA = '$restaurantNAMA', restaurantKET = '$restaurantKET', travelKODE = '$travelKODE' where restaurantKODE = '$restaurantKODE'");
        header("location:restaurant.php");
    }
    $datatravel = mysqli_query($connection, "select * from travel");

    $restaurantKODE = $_GET['ubah'];
    $editrestaurant =  mysqli_query($connection, "select * from restaurant where restaurantKODE = '$restaurantKODE'");
    $rowedit = mysqli_fetch_array($editrestaurant);
?>

<?php include "INCLUDE/head.php" ?>
<body class="sb-nav-fixed">
    <?php include "INCLUDE/menunav.php" ?>
    <div id="layoutSidenav">
        <?php include "INCLUDE/menu.php" ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Edit Data Restaurant</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Mengedit data restaurant disini</li>
                    </ol>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Restaurant</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
</head>

<body>
    <div class="row">
    <div class="col-sm-1"></div>

    <div class="col-sm-10">

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Edit Data Restaurant</h1>
        </div>
    </div>

    <form method="POST" enctype="multipart/form-data">
        <div class="form-group row, mb-3 row">
            <label for="inputkode" class="col-sm-2 col-form-label">Kode Restaurant</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputkode" name="inputkode" placeholder="Kode Restaurant" maxlength="4" value="<?php echo $rowedit["restaurantKODE"] ?>" readonly>
            </div>
        </div>

        <div class="form-group row, mb-3 row">
            <label for="inputnama" class="col-sm-2 col-form-label">Nama Restaurant</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputnama" name="inputnama" placeholder="Nama Restaurant" value="<?php echo $rowedit["restaurantNAMA"] ?>">
            </div>
        </div>

        <div class="form-group row, mb-3 row">
            <label for="inputket" class="col-sm-2 col-form-label">Keterangan Restaurant</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputket" name="inputket" placeholder="Keterangan Restaurant" value="<?php echo $rowedit["restaurantKET"] ?>">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="travelkode" class="col-sm-2 col-form-label">Travel Kode</label>
            <div class="col-sm-10">
                <select type="form-control" class="form-control" name="travelkode" id="travelkode">
                    <option>Travel Kode</option>
                    <?php while ($row = mysqli_fetch_array($datatravel)) { ?>
                        <option value="<?php echo $row["travelKODE"] ?>" <?php if ($rowedit["travelKODE"] == $row["travelKODE"]) echo "selected" ?>>
                            <?php echo $row["travelKODE"] ?>
                            <?php echo $row["travelNAMA"] ?>
                        </option>
                    <?php } ?>
                </select>
            </div>
        </div>

        <div class="form-group row, mb-3 row">
            <div class="mt-3"></div>
            <div class="col-sm-2"></div>
            <div class="col-sm-10">
                <button type="submit" name="edit" class="btn btn-primary">Simpan</button>
                <a href="restaurant.php" class="btn btn-secondary">Batal</a>
            </div>
        </div>
    </form> <!-- end of form line -->

    <div class="jumbotron mt-5">
        <h2 class="display-5">Hasil entri data Restaurant</h2>
    </div>

    <!-- untuk membuat form pencarian data -->
    <form method="POST">
        <div class="form-group row mb-2">
            <label for="search" class="col-sm-3">Cari Nama Restaurant</label>
            <div class="col-sm-6">
                <input type="text" name="search" class="form-control" id="search" value="<?php if (isset($_POST['search'])) {
                                                                                                echo $_POST["search"];
                                                                                            } ?>" placeholder="Cari Nama Restaurant">
            </div>
            <input type="submit" name="kirim" class="col-sm-1 btn btn-primary" value="search">
        </div>
    </form>
    <!-- akhir dari code line form -->

    <table class="table table-dark table-striped">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Kode Restaurant</th>
            <th scope="col">Nama Restaurant</th>
            <th scope="col">Keterangan Restaurant</th>
            <th scope="col">Travel Kode</th>
            <th colspan="2" style="text-align: center">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if (isset($_POST["kirim"])) {
            $search = $_POST["search"];
            $query = mysqli_query($connection, "select restaurant.* from restaurant where restaurantNAMA like '%" . $search . "%'");
        } else {
            $query = mysqli_query($connection, "select restaurant.* from restaurant");
        }

        $angka = 1;
        while ($row = mysqli_fetch_array($query)) {
        ?>
    <tr>
        <td><?php echo $angka; ?></td>
        <td><?php echo $row['restaurantKODE']; ?></td>
        <td><?php echo $row['restaurantNAMA']; ?></td>
        <td><?php echo $row['restaurantKET']; ?></td>
        <td><?php echo $row['travelKODE']; ?></td>
        <td width=5px>
            <a href="restauranthapus.php?hapus=<?php echo $row["restaurantKODE"] ?>" class="btn btn-danger btn-sm" title="HAPUS" />
            <i class="bi bi-trash"></i>
        </td>
    </tr>
    <?php
        $angka++;
    }
    ?>
    </tbody>
    </table>
    </div> <!-- end of div col-sm-10 -->
    </div> <!-- end of row div -->
</body>
</main>
        <?php include "INCLUDE/footer.php" ?>
    </div>
</div>
<?php include "INCLUDE/jsscript.php" ?>
</body>
</html>