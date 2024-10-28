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
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>FOTO DESTINASI WISATA</title>
  	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
</head>
<body>

<div class="row">

<div class="row">
	<div class="col-sm-1"></div>
	<div class="col-sm-10">
		<div class="jumbotron jumbotron-fluid">
			<div class="container">
				<h1 class="display-4">Daftar Photo Destinasi Wisata</h1>
			</div>
		</div>

		    <!-- untuk membuat form pencarian data -->
			<form method="POST">
        	<div class="form-group row mb-2">
            <label for="search" class="col-sm-3">Cari Nama Photo</label>
            <div class="col-sm-6">
                <input type="text" name="search" class="form-control" id="search" value="<?php if (isset($_POST['search'])) {echo $_POST["search"];} ?>" placeholder="Cari Nama Photo">
            </div>
			<input type="submit" name="kirim" class="col-sm-1 btn btn-primary" value="search">
        	</div>
    		</form>
    		<!--akhir dari code line form -->


	<table class="table table-hover table-danger">
		<thead class="thead-dark">
			<tr>
				<th>No</th>
				<th>Kode Photo</th>
				<th>Nama Photo Wisata</th>
				<th>Photo Destinasi</th>
				<th>Nama Destinasi</th>
			</tr>			
		</thead>

		<tbody>
			<?php
			if (isset($_POST["kirim"])) {
				$search = $_POST["search"];
				$query = mysqli_query($connection, "SELECT * FROM fotodestinasi, destinasik WHERE fotodestinasiNAMA LIKE '%".$search."%' and fotodestinasi.destinasiKODE = destinasik.destinasiKODE");
			} 
			else 
			{
				$query = mysqli_query($connection, "SELECT * FROM fotodestinasi, destinasik WHERE fotodestinasi.destinasiKODE = destinasik.destinasiKODE");
			}
			$nomor = 1;
			while ($row = mysqli_fetch_array($query))
			{ ?>
				<tr>
					<td><?php echo $nomor;?></td>
					<td><?php echo $row['fotodestinasiKODE'];?></td>
					<td><?php echo $row['fotodestinasiNAMA'];?></td>
					<td>
						<?php if(is_file("images/".$row['fotodestinasiFILE']))
						{ ?>
							<img src="images/<?php echo $row['fotodestinasiFILE']?>" width="80">
						<?php } else
							echo "<img src='images/noimage.png' width='80'>"
						?>
					</td>
					<td><?php echo $row['destinasiNAMA'];?></td> 
				</tr>
			<?php $nomor = $nomor + 1;?>
			<?php }	?>
		</tbody>
		
	</table>
	</div>

	<div class="col-sm-1"></div>

	
</div>
</body>
</main>
                <?php include "INCLUDE/footer.php"?>
            </div>
        </div>
        <?php include "INCLUDE/jsscript.php" ?>
</body>
</html>