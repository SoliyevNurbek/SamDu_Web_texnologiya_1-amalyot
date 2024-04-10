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
    <!-- <?php
        // boolean 35-misol
        $x1=$_GET['x1'];
        $y1=$_GET['y1'];
        $x2=$_GET['x2'];
        $y2=$_GET['y2'];
        $t=(($x1 + $y1)%2==1 && ($x2 + $y2)%2==1) || ($x1 + $y1)%2==0 && ($x2 + $y2)%2==0;
        echo "Berilgan  maydonlar birxil rangda muloxaza << $t >>";
    ?> -->
    <!-- <?php
        // boolean 36-misol
        $x1=$_GET['x1'];
        $y1=$_GET['y1'];
        $x2=$_GET['x2'];
        $y2=$_GET['y2'];
        $t1=($x1 == $x2 && $y1 != $y2 ) || ($y1 == $y2 && $x1 != $x2);
        echo "Ruh bir yurishda bir maydondan ikkinchisiga o'ta
        oladi muloxaza << $t1 >>";
    ?> -->
    <!-- <?php
        // boolean 37-misol
        $x1=$_GET['x1'];
        $y1=$_GET['y1'];
        $x2=$_GET['x2'];
        $y2=$_GET['y2'];
        $t1=($x1 + $y1) == ($x2 + $y2);
        $t2=($x1 == $x2) && (($y1 + 1) == $y2 || ($y1 - 1) == $y2);
        $t3=($y1 == $y2) && (($x1 + 1) == $x2 || ($x1 - 1) == $x2);
        $t4=(($x1 - 1) == $x2 && ($y1 - 1) == $y2) || (($x1 + 1) == $x2 && ($y1 + 1) == $y2);
        $tx=$t1 || $t2 || $t3 || $t4 ;
        echo "Shoh bir yurishda bir maydondan ikkinchisiga o'ta oladi muloxaza << $tx >>";
    ?> -->
    <!-- <?php
        // boolean 38-misol
        $x1=$_GET['x1'];
        $y1=$_GET['y1'];
        $x2=$_GET['x2'];
        $y2=$_GET['y2'];
        $t1=($x1+$y1)==($x2 + $y2);
        $t2=abs($x1 - $y1) == abs($x2 - $y2);
        $t = $t1 || $t2;
        echo "Fil bir yurishda bir maydondan ikkinchisiga o'ta oladi muloxaza << $t >>";
    ?> -->
    <!-- <?php
        // boolean 39-misol
        $x1=$_GET['x1'];
        $y1=$_GET['y1'];
        $x2=$_GET['x2'];
        $y2=$_GET['y2'];

        $tfil1=($x1+$y1)==($x2 + $y2);
        $tfil2=abs($x1 - $y1) == abs($x2 - $y2);

        $fil = $tfil1 || $tfil2;
        $ruh=($x1 == $x2 && $y1 != $y2 ) || ($y1 == $y2 && $x1 != $x2);

        $farzin=$fil || $ruh ;
        echo "Farzin bir yurishda bir maydondan ikkinchisiga o'ta oladi muloxaza << $farzin >>";
    ?> -->
    <!-- <?php
        // boolean 40-misol
        $x1=$_GET['x1'];
        $y1=$_GET['y1'];
        $x2=$_GET['x2'];
        $y2=$_GET['y2'];

        $t=(abs($x2-$x1) == 1 && abs($y2-$y1) == 2) || (abs($x2-$x1) == 2 && abs($y2-$y1) == 1);
        echo "Ot bir yurishda bir maydondan ikkinchisiga o'ta oladi muloxaza << $t >>";
    ?> -->
    <!-- <?php 
    //if 11-misol
    $a=$_GET['a'];
    $b=$_GET['b'];
    echo "A dastlabki xolatda $a B dastlabki xolatda $b <br>";  
    if($a>$b){
        $b=$a;
    }
    else if($a<$b){
        $a=$b;
    }
    else{
        $a=$b=0;
    }
    echo "A o'zgartirilganda $a B o'zgartirilganda $b";   
    ?> -->
    <!-- <?php 
    //if 12-misol
    $a=$_GET['a'];
    $b=$_GET['b'];
    $c=$_GET['c'];
    
    $x=min($a,$b,$c);
    echo "Uchta sonning ichidagi eng kichik element $x";
    ?> -->
    <!-- <?php 
    //if 13-misol
    $a=$_GET['a'];
    $b=$_GET['b'];
    $c=$_GET['c'];
    if (($a >= $b && $a <= $c) || ($a >= $c && $a <= $b)) {
        echo "$a o'rtadagi son";
    } elseif (($b >= $a && $b <= $c) || ($b >= $c && $b <= $a)) {
        echo "$b o'rtadagi son";
    } else {
        echo "$c o'rtadagi son";
    }
    ?> -->
    <!-- <?php 
    //if 14-misol
    $a=$_GET['a'];
    $b=$_GET['b'];
    $c=$_GET['c'];
    $a1=min($a,$b,$c);
    $a2=max($a,$b,$c);
        echo "kichigi  $a1  kattasi $a2";
    ?> -->
    <!-- <?php 
    //if 15-misol
    $a=$_GET['a'];
    $b=$_GET['b'];
    $c=$_GET['c'];
    if (($c >= $a && $a >= $b) || ($a >= $c && $c >= $b)){
        echo "Yig'indisi eng katta bo'ladigan sonlar $c va $a";
    }
    elseif (($c >= $b && $b >= $a) || ($b >= $c && $c >= $a)){
        echo "Yig'indisi eng katta bo'ladigan sonlar $c va $b";
    }
    else {
        echo "Yig'indisi eng katta bo'ladigan sonlar $a va $b";
    }
    ?> -->
<!-- <?php 
    //if 16-misol
    $a=$_GET['a'];
    $b=$_GET['b'];
    $c=$_GET['c'];
    if ($a <= $b && $b <= $c){
        $a1=$a*2;
        $b1=$b*2;
        $c1=$c*2;
        echo "Ikkilangan va o'sish tartibidagi sonlar $a1 : $b1 : $c1";
    }
    else {
        $a1=$a*(-1);
        $b1=$b*(-1);
        $c1=$c*(-1);
        echo "Ishorasi o'zgargan sonlar $a1 : $b1 : $c1";
    }
    ?> -->
    <!-- <?php 
    //if 17-misol
    $a=$_GET['a'];
    $b=$_GET['b'];
    $c=$_GET['c'];
    if (($a <= $b && $b <= $c) || ($a >= $b && $b >= $c)){
        $a1=$a*2;
        $b1=$b*2;
        $c1=$c*2;
        echo "Ikkilangan va o'sish tartibidagi sonlar $a1 : $b1 : $c1";
    }
    else {
        $a1=$a*(-1);
        $b1=$b*(-1);
        $c1=$c*(-1);
        echo "Ishorasi o'zgargan sonlar $a1 : $b1 : $c1";
    }
    ?> -->
    <!-- <?php 
    //if 18-misol
    $a=$_GET['a'];
    $b=$_GET['b'];
    $c=$_GET['c'];
    if ($a == $b && $b != $c){
        echo "3-index";
    }
    elseif ($c == $b && $b != $a) {
       echo "1-index";
    }
    elseif ($c == $a && $a != $b){
        echo "2-index";
    }
    else{
        echo "Teng sonlar yo'q ";
    }
    ?> -->
    <!-- <?php 
    //if 19-misol
    $a=$_GET['a'];
    $b=$_GET['b'];
    $c=$_GET['c'];
    $d=$_GET['d'];
    if ($a == $b && $b == $c && $c != $d){
        echo "4-index";
    }
    elseif ($d == $b && $b == $a && $d != $c) {
       echo "3-index";
    }
    elseif ($a == $c && $c == $d && $a != $b){
        echo "2-index";
    }
    elseif ($b == $c && $c == $d && $d != $a){
        echo "1-index";
    }
    else{
        echo "Teng sonlar yo'q ";
    }
    ?> -->
    <?php 
    //if 20-misol
    $a=$_GET['a'];
    $b=$_GET['b'];
    $c=$_GET['c'];
    if (abs($a-$b) > abs($a-$c)){
        $l=abs($a-$c);
        echo "A ga eng yaqin nuqta C oralaridagi masofa $l";
    }
    elseif (abs($a-$b) < abs($a-$c)){
        $l=abs($a-$b);
        echo "A ga eng yaqin nuqta B oralaridagi masofa $l";
    }
    else{
        echo "Error";
    }
    ?>


</body>
</html>