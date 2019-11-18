
<head>
  <title>nomor 3 tampil</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>
<div class="jumbotron text-center">
    <h1>Hasil Pengisian</h1>
    <p>Hasil pengisian dari form</p> 
    </div>
    <div class="container">
    <div class="row">
    <div class="col-sm">
    <center>
<?php
    echo "<h2>Welcome!</h2><br>";
    echo "Nama anda: ".$_GET['name']."<br>";
    echo "E-mail anda: ".$_GET['email']."<br>";
    echo "Alternatif E-mail anda: ".$_GET['re_email']."<br>";
    echo "Nomor Telephone anda: ".$_GET['phoneNumber']."<br>";
    echo "Nomor HP anda: ".$_GET['mobilePhone']."<br>";
    echo "Portal Address anda: ".$_GET['portalAddress']."<br>";
    echo "Negara anda: ".$_GET['country']."<br>";
?>
</center>
</div>
</div>
</div>
</body>

