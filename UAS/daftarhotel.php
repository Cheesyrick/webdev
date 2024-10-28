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
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Hotel</title>
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
        <h2 class="display-5">Daftar data Hotel</h2>
    </div>

    <!-- untuk membuat form pencarian data -->
    <form method="POST">
        <div class="form-group row mb-2">
            <label for="search" class="col-sm-3">Cari Nama Hotel</label>
            <div class="col-sm-6">
                <input type="text" name="search" class="form-control" id="search" value="<?php if (isset($_POST['search'])) {echo $_POST["search"];} ?>" placeholder="Cari Nama Hotel">
            </div>
            <input type="submit" name="kirim" class="col-sm-1 btn btn-primary" value="search">
        </div>
    </form>
    <!-- akhir dari code line form -->

	<table class="table table-dark table-striped">
    <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Kode Hotel</th>
      <th scope="col">Nama Hotel</th>
      <th scope="col">Foto Hotel</th>
      <th scope="col">Nama Destinasi</th>
    </tr>
    </thead>
	<tbody>
	<?php
			if(isset($_POST["kirim"]))
			{
				$search = $_POST["search"];
				$query = mysqli_query($connection,"select * from hotel, destinasik where hotelNAMA like '%".$search."%' and hotel.destinasiKODE = destinasik.destinasiKODE");
			}
			else
			{
				$query = mysqli_query($connection,"select * from hotel, destinasik where hotel.destinasiKODE = destinasik.destinasiKODE");
			}

			$angka = 1;
			while ($row = mysqli_fetch_array($query)) {
		?>
	<tr>
        <td><?php echo $angka; ?></td>
        <td><?php echo $row['hotelKODE'];?></td>
        <td><?php echo $row['hotelNAMA'];?></td>
        <td><?php 
				if(is_file("images/".$row['fotohotelFILE']))
				{
			?>
		<img src="images/<?php echo $row['fotohotelFILE']?>" width="80">
			<?php
				}
				else echo "<img src='images/noimage.png' width='80'>"
			?>
		</td>
        <td><?php echo $row['destinasiNAMA'];?></td>
	</tr>
	<?php 
			$angka++;
		}
	?>
	</tbody>
	</table>
    </div> <!-- end of row div -->
</body>
</main>
                <?php include "INCLUDE/footer.php"?>
        <?php include "INCLUDE/jsscript.php" ?>
</body>
</html>