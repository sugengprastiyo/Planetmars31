<!DOCTYPE html>
<html lang="en">
<head>
        <link rel="stylesheet" type="text/css" href="stylee.css"/>
</head>
<body>
    <table>
            <tr>
                <td>ID</td>
                <td>Nama</td>
                <td>Alamat</td>
                <td>Aksi</td>
            </tr>
            <?php
                include "koneksi.php";

                $query="SELECT * FROM mahasiswa";
                $result=mysqli_query($connect, $query);

                if (mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
                        ?>
                        <tr>
                            <td> <?php echo $row["id"] ?> </td>
                            <td> <?php echo $row["nama"] ?> </td>
                            <td> <?php echo $row["alamat"] ?> </td>
                            <td>
                                <a href="editForm.php?id=<?php echo $row['id']; ?> ">
                                Edit</a>
                                <a href="hapus.php?id=<?php echo $row['id']; ?> ">
                                Hapus</a>
                            </td>
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