<!DOCTYPE html>
<html lang="en">
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
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Input data Travel</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Menginput data Travel disini</li>
                        </ol>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Travel</title>
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
	<div class="jumbotron mt-5">
		<h2 class="display-5">Hasil entri data Travel</h2>
	</div>

    <!-- untuk membuat form pencarian data -->
    <form method="POST">
        <div class="form-group row mb-2">
            <label for="search" class="col-sm-3">Cari Nama Travel</label>
            <div class="col-sm-6">
                <input type="text" name="search" class="form-control" id="search" value="<?php if (isset($_POST['search'])) {echo $_POST["search"];} ?>" placeholder="Cari Nama Travel">
            </div>
            <input type="submit" name="kirim" class="col-sm-1 btn btn-primary" value="search">
        </div>
    </form>
    <!-- akhir dari code line form -->
	<table class="table table-dark table-striped">
    <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Kode Travel</th>
      <th scope="col">Nama Destinasi Travel</th>
      <th scope="col">Keterangan Destinasi Travel</th>
    </tr>
    </thead>
	<tbody>
		<?php
			if(isset($_POST["kirim"]))
			{
				$search = $_POST["search"];
				$query = mysqli_query($connection,"select travel.* from travel where travelNAMA like '%".$search."%'");
			}
			else
			{
				$query = mysqli_query($connection,"select travel.* from travel");
			}

			$angka = 1;
			while ($row = mysqli_fetch_array($query)) {
		?>
	<tr>
		<td><?php echo $angka; ?></td>
		<td><?php echo $row['travelKODE'];?></td>
		<td><?php echo $row['travelNAMA'];?></td>
		<td><?php echo $row['travelKET'];?></td>
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
                <?php include "INCLUDE/footer.php"?>
            </div>
        </div>
        <?php include "INCLUDE/jsscript.php" ?>
</body>
</html>