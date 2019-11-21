<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <title>Nomor 1</title>
</head>
<body>
    <center><h2>Multidimensional Array</h2></center>
    <table>
        <tr>
            <th>Nama</th>
            <th>NIP</th>
            <th>Tgl_Lahir</th>
            <th>Jumlah_Anak</th>
            <th>Gaji</th>
            
        </tr>
        <?php
            $ident = array(
                        array("Valentino Rossi", 5678, "16-02-1979",2,12500),
                        array("Cristiano Ronaldo", 1234, "05-02-1985",1,18000),
                        array("Nico Erik Rosberg", 4567, "27-06-1985",1,11000),
                        array("Rio Haryanto", 7890, "22-01-1993",0,2500),
                        array("Kobe Bryant", 6789, 0,0,13500),
                        array("Maria Sharapova", 3456, "19-04-1986",0,5500),
                        array("Ana Ivanovic", 2345, "12-03-1992",0,6500)
                    );
            echo "<tr>";
                    echo "<td>". $ident[0][0] ."</td>";
                    echo "<td>". $ident[0][1] ."</td>";
                    echo "<td>". $ident[0][2] ."</td>";
                    echo "<td>". $ident[0][3] ."</td>";
                    echo "<td>". $ident[0][4] ."</td>";
            echo "</tr>";
            echo "<tr>";
                    echo "<td>". $ident[1][0] ."</td>";
                    echo "<td>". $ident[1][1] ."</td>";
                    echo "<td>". $ident[1][2] ."</td>";
                    echo "<td>". $ident[1][3] ."</td>";
                    echo "<td>". $ident[1][4] ."</td>";
            echo "</tr>";
            echo "<tr>";
                    echo "<td>". $ident[2][0] ."</td>";
                    echo "<td>". $ident[2][1] ."</td>";
                    echo "<td>". $ident[2][2] ."</td>";
                    echo "<td>". $ident[2][3] ."</td>";
                    echo "<td>". $ident[2][4] ."</td>";
            echo "</tr>";
            echo "<tr>";
                    echo "<td>". $ident[3][0] ."</td>";
                    echo "<td>". $ident[3][1] ."</td>";
                    echo "<td>". $ident[3][2] ."</td>";
                    echo "<td>". $ident[3][3] ."</td>";
                    echo "<td>". $ident[3][4] ."</td>";
            echo"</tr>";
            echo "<tr>";
                    echo "<td>". $ident[4][0] ."</td>";
                    echo "<td>". $ident[4][1] ."</td>";
                    echo "<td>". $ident[4][2] ."</td>";
                    echo "<td>". $ident[4][3] ."</td>";
                    echo "<td>". $ident[4][4] ."</td>";
            echo "</tr>";
            echo "<tr>";
                    echo "<td>". $ident[5][0] ."</td>";
                    echo "<td>". $ident[5][1] ."</td>";
                    echo "<td>". $ident[5][2] ."</td>";
                    echo "<td>". $ident[5][3] ."</td>";
                    echo "<td>". $ident[5][4] ."</td>";
            echo "</tr>";
            echo "<tr>";
                    echo "<td>". $ident[6][0] ."</td>";
                    echo "<td>". $ident[6][1] ."</td>";
                    echo "<td>". $ident[6][2] ."</td>";
                    echo "<td>". $ident[6][3] ."</td>";
                    echo "<td>". $ident[6][4] ."</td>";
            ?>

    </table>
</body>
</html>