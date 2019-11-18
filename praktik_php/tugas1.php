<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
            <center> 
 
    <?php
    
        $usia = "60";
        $golongan = "golongan =";

        if($usia<5){
            echo "$golongan balita";
        }elseif($usia>=5 && $usia<=15){
            echo "$golongan kanak kanak";
        }elseif($usia>=15 && $usia<=25){
            echo "$golongan remaja";
        }elseif($usia>=25 && $usia<=60){
            echo "$golongan dewasa";
        }elseif($usia>=60){
            echo "$golongan lansia";
        }else{
            echo "Eror!";
        }
        
    ?>
               </center>
</body>
</html>