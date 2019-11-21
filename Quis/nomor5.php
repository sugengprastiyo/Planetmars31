<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nomor 5 Tampil</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>

<body>
    <div class="container">

        <?php if (isset($_POST['simpan'])) : ?>
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Data Telah Terisi',
                    showConfirmButton: false,
                    timer: 2000
                })
            </script>
        <?php else : ?>
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Data Kosong',
                    showConfirmButton: false,
                    timer: 2000
                })
            </script>
        <?php endif ?>



  
            <div class="row mt-4">
                <div class="col-2">
                    <img src="img/logo.png" style="width :100px ">
                </div>
                <div class="col-8 text-center">
                    <h5><b>PERPUSTAKAAN FAKULTAS TEKNIK UNSWAGATI</b></h5>
                    <h5>Alamat :Jl.Pemuda No. 32 Cirebon 45132 </h5>
                    <h5>Telp. /Fax.(0231) 246664<h5>
                </div>
            </div>

            <hr>
 
        <center>
            <h6>FORMULIR ANGGOTA PERPUSTAKAAN</h6> <br> <br>
        </center>
        <h7>Saya yang bertanda tangan di bawah ini :</h7> <br> <br>
        <div class="row">
            <div class="col">

                Nama : <br>
                No Kerja: <br>
                No Telpon HP: <br>
                No Telp Rumah: <br>
                No Telp Kantor : <br>
                Unit : <br>
                Departement : <br>
                Tempat Tanggal Lahir : <br>
                Alamat : <br>
            </div>
            <?php
            if (isset($_POST['simpan'])) {
                $nama = $_POST['nama'];
                $nokerja = $_POST['nokerja'];
                $mobile = $_POST['mobile'];
                $home = $_POST['home'];
                $office = $_POST['office'];
                $unit = $_POST['unit'];
                $departement = $_POST['departement'];
                $ttl = $_POST['tempatL'];
                $ttl2 = $_POST['tanggalL'];
                $alamat = $_POST['postalAddress'];

                echo "<br> <br> <br>";
                $target_path = "uploads/";
                echo "<div class = 'col'>
                        
                        $nama <br>
                        $nokerja <br>
                        $mobile <br>
                        $home <br>
                        $office <br>
                        $unit <br>
                        $departement <br>
                        $ttl / $ttl2<br>
                        $alamat <br>
                         </div>
                         "
                ?><br>
                </ <p>Dengan ini menyatakan permohonan untuk menjadi anggota perpustakaan Fakultas Teknik
                Unswagati Cirebon, maka saya bersedia dikenakan administrasi sebesar Rp. 10.000(Sepuluh ribu rupiah)
                dan saya bersedia mematuhi peraturan yang berlaku.
                Apabila kemudian hari saya melakukan pelanggaran terhadapat pertauran tersebut maka saya bersedia untuk dikenakan sanksi <br>

                </p>
                <br> <br>
                <hr>
        </div>
        <div class="row">
            <div class="col-7">
                <?php

                    $target_path = $target_path . basename(
                        $_FILES['kirimServer']['name']
                    );
                    if (move_uploaded_file($_FILES['kirimServer']['tmp_name'], $target_path)) {
                        $image = $_FILES['kirimServer']['name'];
                        $img = "uploads/" . $image;
                        echo "<img style='width:125px;height:200px;border:1px solid black;' src=\"$img\"><br><br>";
                    } else {
                        echo "There was an error during uploading the file, please try again<br>";
                    }

                    ?>
            </div>

            <div class="col mr-3">
                <?php
                    echo "<br><br><br><br><br><br>";
                    echo "<p align='right'> ......................... </p>";
                    echo "<p align='right'> $nama </p>";
                    ?>
            </div>
        </div>

    <?php
    } else {
        echo ("Data kosong");
    }
    ?>

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