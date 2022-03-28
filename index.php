<?php
$Counter = 5;
while ($Counter <= 10) {
    $CounterB = 5;
    while ($CounterB <= $Counter) {
        echo "*";
        $CounterB++;
    }
    echo '<br/>';
    $Counter++;
}
?>
<br>

<br>

<?php
$a = 5;
while ($a <= 10) {
    $b = 10;
    while ($b >= $a) {
        echo "*";
        $b--;
    }
    echo "<br/>";
    $a++;
}
?>

<br>

<?php
$a = 0;
while ($a < 5) {
    $b = 0;
    while ($b < 10) {
        echo "*";
        $b++;
    }
    echo "<br/>";
    $a++;
}
?>



<br>

<?php
$a = 0;
while ($a < 5) {

    $b = 0;
    while ($b < 15) {

        echo "*";
        $b++;
    }
    echo "<br/>";
    $a++;
}
?>

<br>



<br>


<br>
<?php
$n = 5;
$i = 1;
while ($i <= $n) {

    $j = $n - 1;
    while ($j >= $i) {

        echo "&nbsp";
        $j--;
    }
    $k = 1;
    while ($k <= $i) {

        echo "*";
        $k++;
    }
    echo "<br/>";
    $i++;
}
?>
<br>



<br>

<?php
for ($i = 5; $i >= 1; $i--) {
    if ($i % 2 != 0) {
        for ($j = 5; $j >= $i; $j--) {
            echo "* ";
        }
        echo "<br>";
    }
}
for ($i = 2; $i <= 5; $i++) {
    if ($i % 2 != 0) {
        for ($j = 5; $j >= $i; $j--) {
            echo "*";
        }
        echo "<br>";
    }
}
?>

<br>
<!--  triangle -->
<?php

for ($a=1;$a <=5; $a++) { 
    for ($b=9 ;$b >=$a; $b--) { 
        echo"&nbsp ";
    }
  for($print=1;$print<=$a; $print++){
      echo"*";
  }
  echo"<br>";
}

?>
<br>
<?php
$n=5;
for($i=1;$i<=$n;$i++){
    for($j=5;$i>=1;$j--){
     echo"*";
    }
    echo"<br>";
}

?>