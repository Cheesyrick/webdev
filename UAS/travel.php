<!DOCTYPE html>
<html lang="en">

<?php
include "include/config.php";
if (isset($_POST['Simpan'])) {
    $travelKODE = $_POST['inputkode'];
    $travelNAMA = $_POST['inputtravel'];
    $travelKET = $_POST['inputket'];

    mysqli_query($connection, "insert into travel values ('$travelKODE', '$travelNAMA', '$travelKET')");
    header("location:travel.php");
}
?>

<?php include "INCLUDE/head.php" ?>

<body class="sb-nav-fixed">
    <?php include "INCLUDE/menunav.php" ?>
    <div id="layoutSidenav">
        <?php include "INCLUDE/menu.php" ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Input data Travel</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Menginput data Travel disini</li>
                    </ol>

                    <head>
                        <meta charset="UTF-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <title>Website Travel</title>
                        <link rel="stylesheet" type="text/css"
                            href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css">
                        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
                        <link rel="stylesheet"
                            href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">
                        <link rel="stylesheet"
                            href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"
                            integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e"
                            crossorigin="anonymous">
                    </head>

                    <body>
                        <div class="row">
                            <div class="col-sm-1"></div>
                            <div class="col-sm-10">
                                <div class="jumbotron jumbotron-fluid">
                                    <div class="container">
                                        <h1 class="display-4">Input Data Travel</h1>
                                    </div>
                                </div>

                                <form method="POST" enctype="multipart/form-data">
                                    <div class="form-group row mb-3">
                                        <label for="inputkode" class="col-sm-2 col-form-label">Kode Travel</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputkode" name="inputkode"
                                                placeholder="Kode Travel" maxlength="4">
                                        </div>
                                    </div>

                                    <div class="form-group row mb-3">
                                        <label for="inputtravel" class="col-sm-2 col-form-label">Nama Travel</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputtravel" name="inputtravel"
                                                placeholder="Nama Travel">
                                        </div>
                                    </div>

                                    <div class="form-group row mb-3">
                                        <label for="inputket" class="col-sm-2 col-form-label">Keterangan Travel</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputket" name="inputket"
                                                placeholder="Keterangan Travel">
                                        </div>
                                    </div>

                                    <div class="form-group row mb-3">
                                        <div class="col-sm-2"></div>
                                        <div class="col-sm-10">
                                            <input type="submit" name="Simpan" class="btn btn-primary" value="Simpan">
                                            <input type="submit" name="Batal" class="btn btn-secondary" value="Batal">
                                        </div>
                                    </div>
                                </form>

                                <div class="jumbotron mt-5">
                                    <h2 class="display-5">Hasil entri data Travel</h2>
                                </div>

                                <form method="POST">
                                    <div class="form-group row mb-2">
                                        <label for="search" class="col-sm-3">Cari Nama Travel</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="search" class="form-control" id="search"
                                                value="<?php if (isset($_POST['search'])) {echo $_POST["search"];} ?>"
                                                placeholder="Cari Nama Travel">
                                        </div>
                                        <input type="submit" name="kirim" class="col-sm-1 btn btn-primary" value="search">
                                    </div>
                                </form>

                                <table class="table table-dark table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Kode Travel</th>
                                            <th scope="col">Nama Destinasi Travel</th>
                                            <th scope="col">Keterangan Destinasi Travel</th>
                                            <th colspan="2" style="text-align: center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if (isset($_POST["kirim"])) {
                                            $search = $_POST["search"];
                                            $query = mysqli_query($connection,
                                                "select travel.* from travel where travelNAMA like '%" . $search . "%'");
                                        } else {
                                            $query = mysqli_query($connection, "select travel.* from travel");
                                        }

                                        $angka = 1;
                                        while ($row = mysqli_fetch_array($query)) {
                                        ?>
                                        <tr>
                                            <td><?php echo $angka; ?></td>
                                            <td><?php echo $row['travelKODE']; ?></td>
                                            <td><?php echo $row['travelNAMA']; ?></td>
                                            <td><?php echo $row['travelKET']; ?></td>
                                            <td width=5px>
                                                <a href="traveledit.php?ubah=<?php echo $row["travelKODE"] ?>"
                                                    class="btn btn-success btn-sm" title="EDIT">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-pencil-square"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                        <path fill-rule="evenodd"
                                                            d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                    </svg>
                                                </a>
                                            </td>
                                            <td width=5px>
                                                <a href="travelhapus.php?hapus=<?php echo $row["travelKODE"] ?>"
                                                    class="btn btn-danger btn-sm" title="HAPUS">
                                                    <i class="bi bi-trash"></i>
                                                </a>
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
