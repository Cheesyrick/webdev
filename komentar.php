<!DOCTYPE html>
<html lang="en">
<?php 
include("INCLUDE/config.php");

if (isset($_POST['Simpan'])) {
    $komentarID = $_POST['komentarid'];
    $komentarNama = $_POST['komentarnama'];
    $komentarEmail = $_POST['komentaremail'];
    $komentarKet = $_POST['komentarket'];

    mysqli_query($connection, "INSERT INTO komentar (komentarID, komentarNama, komentarEmail, komentarKet) VALUES ('$komentarID','$komentarNama','$komentarEmail','$komentarKet')");
    header("location:komentar.php");
}

$dataKomentar = mysqli_query($connection, "SELECT * FROM komentar");
?>

<?php include "INCLUDE/head.php"; ?>
<body class="sb-nav-fixed">
    <?php include "INCLUDE/menunav.php";?>
    <div id="layoutSidenav">
        <?php include "INCLUDE/menu.php";?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Komentar Management</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Komentar</li>
                    </ol>

                    <div class="row">
                        <div class="col-sm-1"></div>
                        <div class="col-sm-10">
                        <form method="POST">
    <!-- Your form inputs for comments go here -->
    <div class="mb-3 row">
        <label for="komentarid" class="col-sm-2 col-form-label">Komentar ID</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="komentarid" id="komentarid">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="komentarnama" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="komentarnama" id="komentarnama">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="komentaremail" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="komentaremail" id="komentaremail">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="komentarket" class="col-sm-2 col-form-label">Komentar</label>
        <div class="col-sm-10">
            <textarea class="form-control" name="komentarket" id="komentarket" rows="3"></textarea>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-2"></div>
        <div class="col-sm-10">
            <input type="submit" class="btn btn-secondary" value="Simpan" name="Simpan"></input>
            <input type="reset" class="btn btn-success" value="Batal"></input>
        </div>
    </div>
</form>

                            <!-- Your comment display table goes here -->
                            <table class="table table-dark table-striped">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Komentar ID</th>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">Komentar</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $angka = 1;
        while ($row = mysqli_fetch_array($dataKomentar)) {
        ?>
        <tr>
            <td><?php echo $angka; ?></td>
            <td><?php echo $row['komentarID']; ?></td>
            <td><?php echo $row['komentarNama']; ?></td>
            <td><?php echo $row['komentarEmail']; ?></td>
            <td><?php echo $row['komentarKet']; ?></td>
        </tr>
        <?php
            $angka++;
        }
        ?>
    </tbody>
</table>

                        </div>
                    </div>
                </div>
            </main>
            <?php include "INCLUDE/footer.php";?>
        </div>
    </div>
    <?php include "INCLUDE/jsscript.php"; ?>
</body>
</html>
