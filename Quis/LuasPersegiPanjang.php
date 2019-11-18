<!DOCTYPE html>
<html lang="en">
<head>
  <title>Luas Persegi Panjang</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="jumbotron text-center">
    <h1>Luas Persegi Panjang</h1>
    <p>Silahkan isi di bawah ini</p> 
    </div>
    <div class="container">
    <div class="row">
    <div class="col-sm">
        

    <form action="" method = "GET">
    Masukkan lebar= <input type="number" name="lebar" id="lebar">
    Masukkan panjang = <input type="number" name="panjang" id="panjang"> <br> <br>

    <center>
    <button type="submit" name="submit" id="submit" value="hitung">HITUNG</button>
    </center>
    </form>
    Hasil = 
    <?php
    if (isset($_GET['submit'])) {
        $panjang = $_GET['panjang'];
        $lebar = $_GET['lebar'];
        $hasil;

        $hasil=$panjang*$lebar;
        echo $hasil;  
    echo " <br> Apakah anda ingin ke menu ?";
    echo "<a href='nomor2.php'><button type='submit'>Y</button></a>";
    echo "<a href='LuasPersegiPanjang.php'><button type='submit'>N</button></a>";
    } 
    ?>
    
    </div>
    </div>
    </div>


    
</body>
</html>