<!DOCTYPE html>
<html lang="en">
<?php
    include "include/config.php";
    if (isset($_POST["edit"])) {
    $mangaKODE = $_POST['inputkode'];
    $mangaNAMA = $_POST['inputmanga'];
    $mangaKET = $_POST['inputket'];

    $fotomangaFILE = $_FILES['file']['name'];
    $file_tmp = $_FILES["file"]["tmp_name"];

    $ekstensifile = pathinfo($fotomangaFILE, PATHINFO_EXTENSION);

    // PERIKSA EKSTENSI FILE HARUS JPG ATAU jpg
    if (($ekstensifile == "jpg") or ($ekstensifile == "JPG")) {
        move_uploaded_file($file_tmp, 'images/' . $fotomangaFILE); //unggah file ke folder images
    }
        mysqli_query($connection, "update manga set mangaNAMA = '$mangaNAMA', mangaKET = '$mangaKET', fotomangaFILE = '$fotomangaFILE' where mangaKODE = '$mangaKODE'");
        header("location:manga.php");
    }
    $kodeManga = $_GET['ubah'];
    $editManga = mysqli_query($connection, "select * from manga where mangaKODE = '$kodeManga'");
    $rowedit = mysqli_fetch_array($editManga);
?>

<?php include "INCLUDE/head.php" ?>

<body class="sb-nav-fixed">
    <?php include "INCLUDE/menunav.php" ?>
    <div id="layoutSidenav">
        <?php include "INCLUDE/menu.php" ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Edit Data Manga</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Edit Data Manga</li>
                    </ol>
<head>
    <title>Website Manga</title>
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
            <form method="POST" enctype="multipart/form-data">

                <div class="form-group row mb-3">
                    <label for="inputkode" class="col-sm-2 col-form-label">Kode NISN Manga</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputkode" name="inputkode"
                            value="<?php echo $rowedit["mangaKODE"] ?>" readonly>
                    </div>
                </div>

                <div class="form-group row mb-3">
                    <label for="inputmanga" class="col-sm-2 col-form-label">Nama Manga</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputmanga" name="inputmanga"
                            value="<?php echo $rowedit["mangaNAMA"] ?>">
                    </div>
                </div>

                <div class="form-group row mb-3">
                    <label for="inputket" class="col-sm-2 col-form-label">Keterangan Manga</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputket" name="inputket"
                            value="<?php echo $rowedit["mangaKET"] ?>">
                    </div>
                </div>

                <div class="form-group row mb-3">
                    <label for="file" class="col-sm-2 col-form-label">Manga Cover</label>
                    <div class="col-sm-10">
                        <input type="file" id="file" name="file">
                        <p class="help-block">Field ini digunakan untuk unggah file</p>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="mt-3"></div>
                    <div class="col-sm-2"></div>
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-success" value="ubah" name="edit">Ubah</button>
                        <button type="reset" class="btn btn-secondary">Batal</button>
                    </div>
                </div>
            </form>

            <div class="jumbotron mt-5">
                <h2 class="display-5">Hasil edit data manga</h2>
            </div>

    <!-- untuk membuat form pencarian data -->
    <form method="POST">
        <div class="form-group row mb-2">
            <label for="search" class="col-sm-3">Cari Nama Manga</label>
            <div class="col-sm-6">
                <input type="text" name="search" class="form-control" id="search"
                    value="<?php if (isset($_POST['search'])) {
                                        echo $_POST["search"];
                                    } ?>" placeholder="Cari Nama Manga">
            </div>
            <input type="submit" name="kirim" class="col-sm-1 btn btn-primary" value="search">
        </div>
    </form>
    <!-- akhir dari code line form -->

    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Kode Manga</th>
                <th scope="col">Nama Manga</th>
                <th scope="col">Manga Cover</th>
                <th scope="col">Manga Keterangan</th>
                <th colspan="2" style="text-align: center">Aksi</th>
            </tr>
        </thead>
    <tbody>
        <?php
        if (isset($_POST["kirim"])) {
            $search = $_POST["search"];
            $query = mysqli_query($connection, "select manga.* from manga where mangaNAMA like '%$search%'");
        } else {
            $query = mysqli_query($connection, "select manga.* from manga");
        }

        $angka = 1;
        while ($row = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td><?php echo $angka; ?></td>
                <td><?php echo $row['mangaKODE']; ?></td>
                <td><?php echo $row['mangaNAMA']; ?></td>
                <td><?php
                        if (is_file("images/" . $row['fotomangaFILE'])) {
                    ?>
                        <img src="images/<?php echo $row['fotomangaFILE'] ?>" width="80">
                    <?php
                        } else echo "<img src='images/noimage.png' width='80'>"
                    ?>
                </td>
                <td><?php echo $row['mangaKET']; ?></td>
                <td width=5px>
                    <a href="mangaedit.php?ubah=<?php echo $row["mangaKODE"] ?>" 
                    class="btn btn-success btn-sm" title="EDIT" />
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                    </svg>
                </td>
                <td width=5px>
                    <a href="mangahapus.php?hapus=<?php echo $row["mangaKODE"] ?>"
                        class="btn btn-danger btn-sm" title="HAPUS" />
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