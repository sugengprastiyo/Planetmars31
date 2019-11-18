<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $status = "Bukan Langganan";    
        $lembar = "200";
    
        if($status == "Langganan"){
            $hargaPerlembar = 190;
            $total = $lembar*$hargaPerlembar;
            echo "$status <br>";
            echo "Total Harga = $total";
        }elseif($status == "Bukan Langganan"){
            if($lembar<150){
                $hargaPerlembar = 300;
                $total = $lembar*$hargaPerlembar;
                echo "$status <br>";
                echo "Total = $total";
            }elseif($lembar>=150){
                $hargaPerlembar = 250;
                $total = $lembar*$hargaPerlembar;
                echo "$status <br>";
                echo "Toal = $total";
            }
        }
    ?>
</body>
</html>