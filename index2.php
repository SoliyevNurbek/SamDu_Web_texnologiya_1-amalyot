<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maxsus guruh 1-amalyot integer</title>
</head>
<body>
    <!-- <h3>Integer 1-misol</h3>
    <?php
    $l=$_GET['l'];
    echo "L ".$l." santimetr Metrda ".floor($l/100);
    ?> -->
    <!-- <h3>Integer 2-misol</h3>
    <?php
    $m=$_GET['m'];
    echo "M ".$m." kilogramm Tonnada ".floor($m/1000);
    ?> -->
    <!-- <h3>Integer 3-misol</h3>
    <?php
    $b=$_GET['b'];
    echo "Baytda  ".$b." Kb = ".floor($b/1024);
    ?> -->
    <!-- <h3>Integer 4-5-misollar</h3>
    <?php
    $a=$_GET['a'];
    $b=$_GET['b'];
    $c=floor($a/$b);
    $x=$a-$c*$b;
    echo "A kesmada B kesmani ".$c." joylashtiriladi A kesmada B kesmaning joylashmagan qismi = ".$x;
    ?> -->
    <!-- <h3>Integer 6-7-8-misollar</h3>
    <?php
    $a=$_GET['a'];
    echo "Berilgan son ".$a."<br>O'nliklar xonasi ".floor($a/10)." Birliklar xonasi ".$a%10;
    $y=floor($a/10)+$a%10;
    echo "<br>Raqamlari yig'indisi ".$y;
    $z=10*($a%10)+floor($a/10);
    echo "<br>Raqamlari teskarisidan hosil son ".$z;
    ?> -->
    <h3>Integer 9-10-misollar</h3>
    <?php
    $b=$_GET['b'];
    echo "Berilgan son ".$b."<br>";
    echo "Yuzlar xonasidagi raqam ".floor($b/100);
    $z3=floor($b/10)%10;
    $z1=$b%10;
    echo "<br>Birliklar xonasi ".$z1." O'nliklar xonasi ".$z3;
    ?>
</body>
</html>