<!DOCTYPE html>
<?php
    include "include/config.php";
    //isset dengan perintahnya yaitu post dan form juga dimasukin method post
    if(isset($_POST['Simpan']))
    {
        $kategoriberitaKODE = $_POST['inputKategoriKode'];
        $kategoriberitaNAMA = $_POST['inputKategoriNama'];
        $kategoriberitaKET = $_POST['inputKategoriKet'];

        mysqli_query($connection, "insert into kategoriberita values ('$kategoriberitaKODE', '$kategoriberitaNAMA', '$kategoriberitaKET')");
        header("location: inputberita.php");
    }
?>

<html lang="en">
    <style>
        
    </style>

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <title>Website Saya</title>
    </head>

    <body>
        <!-- ini bagian judul -->
        <h1 style="background-color:grey" class="col-sm-9">ENTRI DATA KATEGORI BERITA</h1>

        <!-- ini bagian kerja -->
        <div class="col-sm-10">
    <form method="POST">
        <div class="form-group row">
            <label for="kategorikode" class="col-sm-3 col-form-label">Kode Kategori Berita</label>
            <div class="col-sm-7">
            <input type="text" class="form-control" id="kategorikode" name="inputKategoriKode" placeholder="Inputkan Kode Kategori Berita">
            </div>
        </div>

        <div class="form-group row">
            <label for="kategorinama" class="col-sm-3 col-form-label">Nama Kategori Berita</label>
            <div class="col-sm-7">
            <input type="text" class="form-control" id="kategorikode" name="inputKategoriNama" placeholder="Inputkan Nama Kategori Berita">
            </div>
        </div>

        <div class="form-group row">
            <label for="kategoriket" class="col-sm-3 col-form-label">Keterangan Kategori Berita</label>
            <div class="col-sm-7">
            <input type="text" class="form-control" id="kategorikode" name="inputKategoriKet"placeholder="Inputkan Keterangan Kategori Berita">
            </div>
        </div>

        <div class="col-sm-3">
            <button type="submit" class="btn btn-secondary" value="Simpan" name="Simpan">Simpan</button>
            <button type="reset" class="btn btn-success">Batal</button>
        </div>

    </form>
    </div>

    </body>
</html>