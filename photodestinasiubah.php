<!DOCTYPE html>
<html lang="en">

<?php
	include "include/config.php";
    if(isset($_POST["edit"])){
		$fotodestinasiKODE = $_POST['inputkode'];
		$fotodestinasiNAMA = $_POST['inputnama'];

        $fotodestinasiFILE = $_FILES['file']['name'];
		$file_tmp = $_FILES["file"]["tmp_name"];

		$destinasiKODE = $_POST['kodedestinasi'];

		$ekstensifile = pathinfo($fotodestinasiFILE, PATHINFO_EXTENSION);

        // PERIKSA EKSTEN FILE HARUS JPG ATAU jpg
		if(($ekstensifile == "jpg") or ($ekstensifile == "JPG"))
		{
			move_uploaded_file($file_tmp, 'images/'.$fotodestinasiFILE); //unggah file ke folder images
			mysqli_query($connection, "UPDATE fotodestinasi SET
			fotodestinasiKODE = '$fotodestinasiKODE',
			fotodestinasiNAMA = '$fotodestinasiNAMA',
			fotodestinasiFILE = '$fotodestinasiFILE',
			destinasiKODE = '$kodedestinasi' 
			WHERE fotodestinasiKODE = '$fotodestinasiKODE'");		
			header("location:photodestinasi.php");
		}
			mysqli_query($connection, "UPDATE fotodestinasi SET
			fotodestinasiKODE = '$fotodestinasiKODE',
			fotodestinasiNAMA = '$fotodestinasiNAMA',
			fotodestinasiFILE = '$fotodestinasiFILE',
			destinasiKODE = '$destinasiKODE' 
			WHERE fotodestinasiKODE = '$fotodestinasiKODE'");			
			header("location:galeri.php");
    }
	$datadestinasi = mysqli_query($connection, "SELECT * FROM destinasi");
	
    $fotodestinasiKODE = $_GET['ubah'];
    $editfoto = mysqli_query($connection, "SELECT * FROM fotodestinasi WHERE fotodestinasiKODE = '$fotodestinasiKODE'");
    $rowedit = mysqli_fetch_array($editfoto);

	$editkode = mysqli_query($connection, "SELECT * FROM fotodestinasi, destinasi WHERE fotodestinasiKODE = '$fotodestinasiKODE' AND fotodestinasi.destinasiKODE = destinasi.destinasiKODE");
	$rowedit2 = mysqli_fetch_array($editkode);	
?>

<?php include "INCLUDE/head.php" ?>
    <body class="sb-nav-fixed">
        <?php include "INCLUDE/menunav.php"?>
        <div id="layoutSidenav">
        <?php include "INCLUDE/menu.php"?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Galeri</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Galeri Koleksi Foto</li>
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
<div class="col-sm-1"></div>

<div class="col-sm-10">
	<div class="jumbotron jumbotron-fluid">
		<div class="container">
			<h1 class="display-4">Input Photo Destinasi Wisata</h1>
		</div>
	</div>

	<form method="POST" enctype="multipart/form-data">
		<div class="form-group row">
			<label for="inputkode" class="col-sm-2 col-form-label">Kode Photo</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="kodefoto" name="inputkode" placeholder="Kode Photo" maxlength="4"
                value="<?php echo $rowedit["fotodestinasiKODE"]?>"readonly>
			</div>
		</div>

		<div class="form-group row">
			<label for="inputnama" class="col-sm-2 col-form-label">Nama Photo</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="namafoto" name="inputnama" placeholder="Nama Photo"
                value="<?php echo $rowedit["fotodestinasiNAMA"] ?>">
			</div>
		</div>

		<div class="form-group row">
		<label for="kodedestinasi" class="col-sm-2 col-form-label">Kode Destinasi</label>
		<div class="col-sm-10">
			<select type="form-control" class="form-control" name="kodedestinasi" id="kodedestinasi">
				<option value="<?php echo $rowedit["destinasiKODE"] ?>">
					<?php echo $rowedit["destinasiKODE"] ?> 
					<?php echo $rowedit2["destinasiNAMA"] ?>
				</option>
				<?php while($row = mysqli_fetch_array($datadestinasi)) { ?>
					<option value="<?php echo $row["destinasiKODE"] ?>">
						<?php echo $row["destinasiKODE"] ?>
						<?php echo $row["destinasiNAMA"] ?>
					</option> 
				<?php } ?>				
			</select>
			</div>
		</div>


		<div class="form-group row">
			<label for="file" class="col-sm-2 col-form-label">Photo Wisata</label>
			<div class="col-sm-10">
				<input type="file" id="file" name="file">
				<p class="help-block">Field ini digunakan untuk unggah file</p>
			</div>
		</div>

    <div class="form-group row">
    <div class="col-sm-2"></div>
    <div class="col-sm-10">
        <button type="submit" class="btn btn-success" value="ubah" name="edit">Ubah</button>
        <button type="reset" class="btn btn-secondary">Batal</button>
    </div>
    </div>
	</form>

</div>

<div class="col-sm-1"></div>
</div>

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
            <label for="search" class="col-sm-3">Cari Kode Photo</label>
            <div class="col-sm-6">
                <input type="text" name="search" class="form-control" id="search" value="<?php if (isset($_POST['search'])) {echo $_POST["search"];} ?>" placeholder="Cari Kode Photo">
            </div>
			<input type="submit" name="kirim" class="col-sm-1 btn btn-primary" value="search">
        	</div>
    		</form>
        <!-- akhir dari code line form -->


	<table class="table table-hover table-danger">
		<thead class="thead-dark">
			<tr>
				<th>No</th>
				<th>Kode Photo</th>
				<th>Nama Photo Wisata</th>
				<th>Photo Destinasi</th>
				<th>Kode Destinasi</th>
				<th colspan="2" style="text-align: center">Action</th>
			</tr>			
		</thead>

		<tbody>
            <?php
			if (isset($_POST["kirim"])) {
				$search = $_POST["search"];
				$query = mysqli_query($connection, "SELECT fotodestinasi.* FROM fotodestinasi WHERE fotodestinasiNAMA LIKE '%$search%'");
			} else {
				$query = mysqli_query($connection, "SELECT fotodestinasi.* FROM fotodestinasi");
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
					<td><?php echo $row['destinasiKODE'];?></td> 

					<td width = 5px>
						<a href="photodestinasiubah.php?ubah=<?php echo $row["fotodestinasiKODE"]?>"
						class="btn btn-success btn-sm" title="EDIT"/>
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
						<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
						<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
						</svg>
      				</td>

					  <td width = 5px>
						<a href="photodestinasihapus.php?hapus=<?php echo $row["fotodestinasiKODE"]?>"
						class="btn btn-danger btn-sm" title="HAPUS"/>
						<i class="bi bi-trash"></i>
					</td>

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
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</html>