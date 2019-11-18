<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nomor 5</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .error{
            color: #FF0000;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                
                <nav aria-label="breadcrumb">
                    
                </nav>
            </div>
        </div>
        <div class="row table-bordered ">
            <div class="col">
                <form action="nomor5.php" method="post" enctype="multipart/form-data">
                    <center> <h2 class="mt-3">FORMULIR PENDAFTARAN </h2></center>
                    <hr>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Nama</span>
                        </div>
                        <input type="text" class="form-control" name="nama" id="nama" required>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">No. Pekerja</span>
                        </div>
                        <input type="number" class="form-control" name="nokerja"id="nomer" required>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">No. Telp</span>
                        </div>
                        <input type="telp" class="form-control" placeholder="Hp" name="mobile" id="tphp" pattern="[0-9]{12}" required>
                        <input type="telp" class="form-control" placeholder="Rumah" name="home" id="tpRumah">
                        <input type="telp" class="form-control" placeholder="Kantor" name="office"id="tpKantor">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Unit</span>
                        </div>
                        <input type="text" class="form-control" name="unit" id="unit" required>
                        <div class="input-group-prepend">
                            <span class="input-group-text">Departement</span>
                        </div>
                        <input type="text" class="form-control" name="departement" id="nomer" required>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Tempat & Tanggal Lahir</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Tempat Lahir" name="tempatL" id="nomer" required>
                        <input type="date" class="form-control" placeholder="Tanggal Lahir" name="tanggalL" id="nomer" required>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Alamat</span>
                        </div>
                        <textarea class="form-control" name="postalAddress" aria-label="With textarea"></textarea>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupFileAddon01">Upload </span>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="kirimServer" id="foto" required>
                            <label class="custom-file-label" for="inputGroupFile01">Pilih File</label>
                        </div>
                    </div>
                   
                    <button type="submit" class="btn btn-info mb-3" name="simpan" value="Kirim">▶ Continue</button>
                    <button type="reset" class="btn btn-danger mb-3" value="Reset">🔄 Reset</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    
</body>
</html>