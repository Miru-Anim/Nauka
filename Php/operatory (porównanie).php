<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    echo "<h1>operatory<br></h1>";
    $a=5;
    $b="napic";
    $c=7;
    $d="7";
     echo "a=".$a."b=".$b."c=".$c."d=".$d."<br>";
    echo "a=".$a."<br>"."b=".$b."<br>"."c=".$c."<br>"."d=".$d."<br>";
    $wynik;

    $wynik=($a<$c);
    echo "porównanie a < c :".$wynik."<br>";

    $wynik=($a>=$c);
    echo "porównanie a>=c :".$wynik."<br>";

    $wynik=($a>$c);
    echo "porównanie a>c :".$wynik."<br>";

    $wynik=($a==$c);
    echo "porównanie a==c :".$wynik."<br>";

    $wynik=($a!=$c);
    echo "porównanie a!=c :".$wynik."<br>";

    $wynik=($a===$c);
    echo "porównanie a===c :".$wynik."<br>";



?>

</body>
</html>