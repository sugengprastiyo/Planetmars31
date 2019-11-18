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
        $rawString = "Welcom birmingham Parent.
        Yout replacement is a pleasure to have!";

        $malestr = str_replace("replacement", "son", $rawString);
        $femalestr = str_replace("replacement", "daughter", $rawString);

        echo "Son: ". $malestr. "<br>";
        echo "Daughter: ". $femalestr. "<br>";
        ?>
</body>
</html>