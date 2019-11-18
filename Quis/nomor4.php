<!DOCTYPE html>
<html lang="en">
<head>
    <title>Nomor 4</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>
<div class="jumbotron text-center">
    <h1>Biodata diri</h1>
    <p>Biodata diri yang dipanggi dari .txt</p> 
    </div>
    <div class="container">
    <div class="row">
    <div class="col-sm">
    <center>
    <?php
    $myFile = "bio.txt";
    echo filesize("bio.txt");
    echo ("Bytes<br><br>");
    $fh = fopen($myFile, 'r');
    $theData = fread($fh, filesize($myFile));
    fclose($fh);
    echo "$theData";
    ?>
    </center>
    </div>
    </div>
    </div>
</body>
</html>