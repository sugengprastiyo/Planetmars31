<!DOCTYPE html>
<html lang="en">
<head>
    <link rel ="stylesheet" type="text/css" href="stylee.css"/>
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Alamat</th>
        </tr>
        <?php
        include "koneksi.php";

        $query="SELECT * FROM mahasiswa";
        $result=mysqli_query($connect, $query);

        if (mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td> <?php echo $row["id"] ?></td>
                    <td> <?php echo $row["nama"] ?></td>
                    <td> <?php echo $row["alamat"]?></td>
                </tr>
                <?php
            }
        }
            else{
                echo "0 results";
            }

?>
    </table>
</body>
</html>