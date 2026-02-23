<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

    $liczba=5;

    if($liczba % 2==0)
        {
            echo "<br>liczba $liczba z dzielenia jest parzysta<br>";
        }
        else 
        {
            echo "<br>liczba $liczba nie jest parzysta<br>";
        }

    $a=1;
    $b=2;

    if($a%$b==0)
        {
            echo "<br>liczba $a jest podzielna przez $b<br>";
        }
        else
        {
            echo "<br>liczba $a nie jest podzielna przez $b<br>";
        }


        $p=2;

        if(($p >= 1 && $p <=10))
            {
                echo "<br>liczba znajduje się w przedziale <1,10><br>";
            }
            elseif($p >=11 && $p <=30)
            {
                echo "<br>liczba znajduje się w przedziale <11,30><br>";
            }
            else
            {
                echo "<br>liczba nie znajduje się w rzadnym przedziale<br>";
            }


        $r=0;

        if($r>0)
            {
                echo "<br>liczba $r jest większa od 0<br>";
            }
            elseif($r<0)
            {
                echo "<br>liczba $r jest mniejsza od 0<br>";
            }
            else
            {
                echo "<br>liczba jest równa 0<br>";
            }

        






        $wiek=2;

        if($wiek<11)
            {
                echo "<br>dziecko<br>";
            }
            elseif($wiek>=11 && $wiek<=17)
            {
                echo "<br>Nastolatek<br>";
            }
            elseif($wiek>=18)
            {
                echo "<br>dorosły<br>";
            }


        $hasło="twojaMamaJest";

        if($hasło<5)
            {
                echo "<br>jesteś zjebany popraw hasło!!!!<br>";
            }
            elseif($hasło>=5 && $hasło <=8)
            {
                echo "<br>hasło słabe<br>";
            }
            elseif($hasło>=9 && $hasło <=11)
            {
                echo "<br>hasło silne<br>";
            }
            else
            {
                echo "<br>HASŁO ZAJEBISTE NIKT NIE ZGADNIE (TRUST BY DISCORD)<br>";
            }

            $n=67;
            $u=69;
            $j=100;

            if($n>$u && $n>$j)
                {
                    echo "<br>zmienna $n jest największa<br>";
                }
                elseif($u>$n && $u>$j)
                {
                    echo "<br>zmienna $u jest największa<br>";
                }
                elseif($j>$n && $j>$u)
                {
                    echo "<br>zmienna $j jest największa<br>";
                }

            $najmniej= min($n,$j,$u);

                echo "<br>najmniejsza liczba $najmniej<br>";
?>

</body>
</html>