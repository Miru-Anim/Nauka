<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a=4;
        $b=5;
        $c=6;
        $napis="napis";

        if($c==6)
        {
            echo "c jest równe 6";
        }
        else if($c<5)
        {
            echo "c nie jest równe 6";
        }
        else
        {
            echo "nic";
        }

        echo "<br>";

        if($b>7)
        {
            echo "b jest większe od 7";
        }
        else if($b<7)
        {
            echo "b jest mniejsze od 7";
        }
        else
        {
            echo "b nie istnieje    ";
        }

        echo "<br>";

        if($c=="napis")
        {
            echo "c";
        }
        else
        {
            echo "liczba to nie napis";
        }

        echo "<br>";

        $a=1;
        $b=6;
        $c=-7;
        $delta=($b**2-4*$a*$c);

        echo $delta;
        
        echo "<br>";

        if ($delta>0)
        {
            echo "dwa rozwiązania<br>";
            echo "delta ".sqrt($delta)."<br>";
            
            $x1=((-$b +sqrt($delta))/2*$a);
            echo "x1 ".$x1."<br>";
            $x2=(-$b -sqrt($delta)/2*$a);
            echo "x2 ".$x2."<br>";
            
        }
        else if($delta==0)
        {
            echo " jedno rozwiązanie<br>";
        }
        else
        {
            echo " brak rozwiązań<br>";
        }
    ?>
</body>
</html>