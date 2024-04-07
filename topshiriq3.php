<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3- Topshiriq</title>
</head>
<body>
    <!-- <?php
        // boolean 25-misol
        $x=$_GET['x'];
        $y=$_GET['y'];
        $t=$x<0 and $y>0;
        echo "Koordinatalari (x,y) bo'lgan nuqta, koordinata choragining ikkinchisida yotadi << $t >>";
    ?> -->
    <!-- <?php
        // boolean 26-misol
        $x=$_GET['x'];
        $y=$_GET['y'];
        $t=$x>0 & $y<0;
        echo "Koordinatalari (x,y) bo'lgan nuqta, koordinata choragining to'rtinchisida yotadi << $t >>";
    ?> -->
     <!-- <?php
        // boolean 27-misol
        $x=$_GET['x'];
        $y=$_GET['y'];
        $t=($x<0 and $y>0) or ($x<0 and $y<0);
        echo "Koordinatalari (x,y) bo'lgan nuqta, koordinata choragining ikkinchisida yoki uchinchisida yotadi << $t >>";
    ?> -->
    <!-- <?php
        // boolean 28-misol
        $x=$_GET['x'];
        $y=$_GET['y'];
        $t=($x>0 and $y>0) or ($x<0 and $y<0);
        echo "Koordinatalari (x,y) bo'lgan nuqta, koordinata choragining birinchisi yoki uchinchisida yotadi << $t >>";
    ?> -->
    <!-- <?php
        // boolean 29-misol
        $x=$_GET['x'];
        $y=$_GET['y'];
        $x1=$_GET['x1'];
        $y1=$_GET['y1'];
        $x2=$_GET['x2'];
        $y2=$_GET['y2'];
        $t=($x1<$x and $x<$y1) and ($y1<$y and $y<$y2);
        echo "Koordinatalari (x,y) bo'lgan nuqta, chap yuqori cho'qqisi (x1,y1) koordinatalarga ega bo'lgan va o'ng pastikisi (x2,y2) bo'lgan, tomonlari esa koordinata o'qlariga parallel bo'lgan to'rtburchak ichida yotadi muloxaza << $t >>";
    ?> -->
    <!-- <?php
        // boolean 30-misol
        $a=$_GET['a'];
        $b=$_GET['b'];
        $c=$_GET['c'];
        $t=($a>0 && $b>0 && $c>0) && ($a==$b && $a==$c && $b==$c);
        echo "a, b, c tomonli uchburchak teng tomonli bo'ladi muloxaza << $t >>";
    ?> -->
    <!-- <?php
        // boolean 31-misol
        $a=$_GET['a'];
        $b=$_GET['b'];
        $c=$_GET['c'];
        $t=($a>0 && $b>0 && $c>0) && ($a+$b>$c && $c+$b>$a && $a+$c>$b) && ($a==$b || $a==$c || $b==$c);
        echo "a, b, c tomonli uchburchak teng yonli bo'ladi muloxaza << $t >>";
    ?> -->
    <!-- <?php
        // boolean 32-misol
        $a=$_GET['a'];
        $b=$_GET['b'];
        $c=$_GET['c'];
        $t=($a>0 && $b>0 && $c>0) && ($a+$b>$c && $c+$b>$a && $a+$c>$b) && ($a*$a + $b*$b ==$c*$c || $a*$a + $c*$c ==$b*$b || $c*$c + $b*$b ==$a*$a);
        echo "a, b, c tomonli uchburchak to'g'ri burchakli bo'ladi muloxaza << $t >>";
    ?> -->
    <!-- <?php
        // boolean 33-misol
        $a=$_GET['a'];
        $b=$_GET['b'];
        $c=$_GET['c'];
        $t=($a>0 && $b>0 && $c>0) && ($a+$b>$c && $c+$b>$a && $a+$c>$b);
        echo "a, b, c tomonli uchburchak  bo'ladi muloxaza << $t >>";
    ?> -->
    <!-- <?php
        // boolean 34-misol
        $x=$_GET['x'];
        $y=$_GET['y'];
        $t=($x>0 && $x<9) && ($y>0 && $y<9) && ($x + $y)%2==1;
        echo "Berilgan (x, y) maydon oq muloxaza << $t >>";
    ?> -->
    <?php
        // boolean 35-misol
        $x1=$_GET['x1'];
        $y1=$_GET['y1'];
        $x2=$_GET['x2'];
        $y2=$_GET['y2'];
        $t=(($x1 + $y1)%2==1 && ($x2 + $y2)%2==1) || ($x1 + $y1)%2==0 && ($x2 + $y2)%2==0;
        echo "Berilgan  maydonlar birxil rangda muloxaza << $t >>";
    ?>
</body>
</html>