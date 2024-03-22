<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maxsus guruh 1-amalyot if</title>
</head>
<body>
    <!-- <h2>If 1-misol</h2>
    <?php
    $a=$_GET['a'];
    if($a>0){
        echo "<h3> Birga oshirildi </h3>".++$a;
    }
    else{
        echo "<h3> O'zgarmadi </h3>".$a;
    }
    ?> -->
    <!-- <h2>If 2-misol </h2>
    <?php
    $a=$_GET['a'];
    if($a>0){
        echo "<h3> Birga oshirildi </h3>".++$a;
    }
    else{
        $a--;
        echo "<h3> Ikkiga kamaytirildi </h3>".--$a;
    }
    ?> -->
    <!-- <h2>If 3-misol </h2>
    <?php
    $a=$_GET['a'];
    if($a>0){
        echo "<h3> Birga oshirildi </h3>".++$a;
    }
    else if($a==0){
        $a=10;
        echo "<h3> Son 0 ga teng 10 ga o'zgartirildi </h3>".$a;
    }
    else if($a<0){
        $a--;
        echo "<h3> Ikkiga kamaytirildi </h3>".--$a;
    }
    ?> -->
    <!-- <h2>If 4-5-misol </h2>
    <?php
    $a=$_GET['a'];
    $b=$_GET['b'];
    $c=$_GET['c'];
    $mus=0;
    $man=0;
    if($a>0){
        $mus++;
    }
    else if($a<0){
        $man++;
    }
    if($b>0){
        $mus++;
    }
    else if($a<0){
        $man++;
    }
    if($c>0){
        $mus++;
    }
    else if($a<0){
        $man++;
    }
    if($man==0 and $mus==0){
        echo "<h3> Sonlar hammasi 0 ga teng </h3>";
    }
    echo "<h3> Musbat Sonlar = </h3>".$mus."<h3> Manfiy Sonlar = </h3>".$man;
    ?> -->
    <!-- <h2>If 6-7-misol </h2>
    <?php
    $a=$_GET['a'];
    $b=$_GET['b'];
    echo "Sonlarni tartib raqamlari : ".$a."-> 1! ".$b."-> 2!";
    if($a>$b){
        echo "<h3> Kattasi = </h3>".$a." 1!";
    }
    else if($a==$b){
        echo "<h3> Sonlar bir biriga teng = </h3>";
    }
    else{
        echo "<h3> Kattasi = </h3>".$b." 2!";
    }
    ?> -->
    <!-- <h2>If 8-misol </h2>
    <?php
    $a=$_GET['a'];
    $b=$_GET['b'];
    if($a>$b){
        echo "<h3> Kattasi = </h3>".$a."<h3> Kichigi = </h3>".$b;
    }
    else if($a==$b){
        echo "<h3> Sonlar bir biriga teng = </h3>";
    }
    else{
        echo "<h3> Kattasi = </h3>".$b."<h3> Kichigi = </h3>".$a;    }
    ?> -->
    <!-- <h2>If 9-misol </h2>
    <?php
    $a=$_GET['a'];
    $b=$_GET['b'];
    echo "Berilgan sonlar ".$a." ".$b;
    if($a>$b){
        $a=$b-1;
        echo "<h3> Kichigi a = </h3>".$a."<h3> Kattasi = </h3>".$b;
    }
    else if($a==$b){
        echo "<h3> Sonlar bir biriga teng = </h3>";
    }
    else{
        echo "<h3> Kichigi = </h3>".$a."<h3> Kattasi = </h3>".$b;    }
    ?> -->
    <h2>If 10-misol </h2>
    <?php
    $a=$_GET['a'];
    $b=$_GET['b'];
    $c=$a+$b;
    echo "Berilgan sonlar ".$a." ".$b;
    if($a!=$b){
        $a=$b=$c;
        echo "<h3> Yig'indiga o'zlashtirilgani = </h3>".$a." ".$b;
    }
    else if($a==$b){
        $a=$b=0;
        echo "<h3> 0 ga o'zlashtirilgani = </h3>".$a." ".$b;    }
    ?>
</body>
</html>