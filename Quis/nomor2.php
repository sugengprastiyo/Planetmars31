<!DOCTYPE html>
<html lang="en">


<head>
  <title>Nomor 2</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="jumbotron text-center">
    <h1>Penghitung Luas</h1>
    <p>Silahkan isi di bawah ini</p> 
    </div>
    <div class="container">
  <div class="row">
    <div class="col-sm">
    <center>
    <form action="" method="get">
        Pilih menu:<br><input type="text" id="menu" name="menu" placeholder="Pilih menu 1,2,3" required/><br/><br>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>

        <?php
        if (isset($_GET['submit'])) {
            $menu = $_GET['menu'];
            if ($menu == 1) {
                header("location:LuasSegitiga.php");
            } elseif ($menu == 2) {
                header("location:LuasLingkaran.php");
            } elseif ($menu == 3) {
                header("location:LuasPersegiPanjang.php");
            } else {
                echo '<script language="javascript">';
                echo 'alert("Pilihan salah")';
                echo '</script>';
            }
        }
        ?>
    </form>
    </center>
            </div>
        </div>
    </div>
   
</body>
</html>

​
