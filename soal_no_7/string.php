<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Contoh soal</h2>
    <?php
    echo "<h3>contoh 1</h3>";
    $kalimat1 = "hallo World";
    echo "kalimat pertama : ". $kalimat1 . "<br>";
    echo "panjang string : ". strlen($kalimat1) . "<br>";
    echo "jumla kata : ". str_word_count($kalimat1) . "<br>";


    echo "<h3>contoh 2</h3>";
    $string2 = "Muhammad alamsyah";
    echo "kalimat kedua : ". $string2 . "<br>";
    echo "kata pertama : ". substr($string2,0,4) . "<br>";
    echo "kata kedau : ". substr($string2,5,4) . "<br>";
    echo "kata ketiga : ". substr($string2,10,5) . "<br>";

    echo "<h3>contoh 2</h3>";
    $string3 ="Selmat pagi";
    echo "kalimatketiga : ". $string3 . "<br>";
    echo "Ganti Kalimat Ketiga  : ". str_replace("pagi","malam",$string3). "<br>";

    ?>
</body>
</html>