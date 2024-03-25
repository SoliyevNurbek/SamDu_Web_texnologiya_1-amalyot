<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maxsus guruh dasragi misollar</title>
</head>
<body>
 <!-- 1-misol
  <?php
    $a = $_GET['a'];
    $b = $_GET['b'];
    
  ?>
  <h2>Berilgan sonlar <?= $_GET['a']," ",$_GET['b']?> yig'indi : <?= $a+=$b?></h2> -->
  <!-- 3-misol
   <table border="1">
    <?php foreach (range(1,4) as $i) { ?>
    <tr>
        <?php foreach (range(1,4) as $j) { ?>
        <td><?php echo "$i$j"; ?></td>
        <?php  } ?>
    </tr>
    <?php } ?>
  </table> -->
<!-- 5-misol
 <?php
    $a = $_GET['a'];
    $b = $_GET['b'];
    $x=($a*$a+$b*$b)/2;
    
  ?>
  <h2>Berilgan sonlar <?= $_GET['a']," ",$_GET['b']?>O'rta kvadrati : <?= $x?></h2> -->
  <!-- 4-2-7-misol
  <?php
  $mevalar = [
    "nok" => 10,
    "banan" => 8,
    "olma" => 15,
    "apelsin" => 12,
    "uzum" => 20,
    "kiwi" => 5,
    "o'rik" => 7,
    "tarvuz" => 3,
    "qulupnay" => 25,
    "qovun" => 21
  ];
 foreach($mevalar as $k => $v){
    echo "$k <br>";
 }
 foreach($mevalar as $k => $v){
    if($v<10){
        echo "10 so'mdan arzon mevalar $k <br>";
    }   
 }
  ?> -->

  6-misol
  <?php
  $a="Ali";
  $b="vali";
  $c=$a.' '.$b;
  $suz=str_word_count($c);
  $belgi=strlen($c);
  ?>
   <h2>Berilgan satrlar <?= $a," ",$b?> So'zlar soni  : <?= $suz?> Belgilar soni  : <?= $belgi?></h2>
   
</body>
</html>