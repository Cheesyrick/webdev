<!DOCTYPE html>
<html lang="en">
<?php 
    include("INCLUDE/config.php");
    if(isset($_POST['Simpan']))
    {
        $adriannusID = $_POST['inputdata'];
        $adriannusKOTA = $_POST['inputkota'];
        $destinasiKODE = $_POST['inputdestinasi'];

        mysqli_query($connection,"insert into adriannusjs values ('$adriannusID','$adriannusKOTA','$destinasiKODE')");
        header("location:adriannusjs.php");
    }
    $datadestinasi = mysqli_query($connection,"select * from destinasik");
?>

<?php include "INCLUDE/head.php" ?>
    <body class="sb-nav-fixed">
        <?php include "INCLUDE/menunav.php"?>
        <div id="layoutSidenav">
        <?php include "INCLUDE/menu.php"?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Input data Pribadi UAS</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Menginput data Pribadi disini</li>
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
    <label for="inputdata" class="col-sm-2 col-form-label"> Input ID </label>
        <div class="col-sm-10">
        <input type="text" class="form-control" name="inputdata" id="inputdata" placeholder="Input data ID">
        </div>
    </div>   
    <div class="mb-3 row">
    <label for="inputkota" class="col-sm-2 col-form-label"> Input Kota </label>
        <div class="col-sm-10">
        <input type="text" class="form-control" name="inputkota" id="inputkota" placeholder="Input data Kota">
        </div>
    </div>  

    <div class="mb-3 row">
        <label for="inputdestinasi" class="col-sm-2 col-form-label">Destinasi Kode</label>
            <div class="col-sm-10">
            <select type="form-control" class="form-control" name="inputdestinasi" id="inputdestinasi">
                <option>Destinasi Kode</option>
                <?php while($row = mysqli_fetch_array($datadestinasi)) { ?>
                <option value="<?php echo $row["destinasiKODE"]?>">
                <?php echo $row["destinasiKODE"]?>
                <?php echo $row["destinasiNAMA"]?>
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
    </div> <!-- akhir dari col-sm-10 -->
</div> <!-- akhir dari row -->
</body>
</main>
                <?php include "INCLUDE/footer.php"?>
            </div>
        </div>
        <?php include "INCLUDE/jsscript.php" ?>
</body>
</html>