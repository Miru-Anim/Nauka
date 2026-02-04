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

    $z=4;
    $x=5;
    $c=2;

    $wynik=($z**$c+$x);
    echo "działanie z^c+x :".$wynik."<br>";

    $wynik=($x*$x/$c);
    echo "działanie x*x/c".$wynik."<br>";

    $f=true;
    $g=false;
    echo "0=nie, 1=tak"."<br>";
    echo "spójnik i :".($z=4||$z>3);
    


?>

</body>
</html>