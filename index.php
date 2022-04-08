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
<br><br>

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

<br><br>

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
    $outer = 1;
    while ($outer <= 5) {
        $space = 9;
        while ($space >= $outer) {
            echo "&nbsp";
            $space--;
        }
        $print = 1;
        while ($print <= $outer) {
            echo "* ";
            $print++;
        }
        echo "<br>";
        $outer++;
    }
    ?>
    <br><br>
<br><br>
<?php
    $outer = 5;
    while ($outer >= 1) {
        $space = 9;
        while ($space >= $outer) {
            echo "&nbsp";
            $space--;
        }
        $print = 1;
        while ($print <= $outer) {
            echo "* ";
            $print++;
        }
        echo "<br>";
        $outer--;
    }
    ?>
    <br><br>

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
<br><br>
<?php
    $outer = 5;
    while ($outer >= 1) {
        $space = 10;
        while ($space >= $outer) {
            echo "&nbsp ";
            $space--;
        }
        $print = 1;
        while ($print <= $outer) {
            echo "*";
            $print++;
        }
        echo "<br>";
        $outer--;
    }
    ?>
    <br><br>
    
    <?php
    $R = 1;
    while ($R <= 5) {
        $C = 5;
        while ($C >= $R) {
            echo "* ";
            $C--;
        }
        echo "<br>";
        $R++;
    }
    $R1 = 1;
    while ($R1 <= 5) {
        $C1 = 1;
        while ($C1 <= $R1) {
            echo "* ";
            $C1++;
        }
        echo "<br>";
        $R1++;
    }
    ?>
    <br><br>
    <?php

    $R = 5;
    while ($R >= 2) {
        $space = 9;
        while ($space >= $R) {
            echo "&nbsp ";
            $space--;
        }
        $print = 1;
        while ($print <= $R) {
            echo "*";
            $print++;
        }
        echo "<br>";
        $R--;
    }
    $R1 = 2;
    while ($R1 <= 5) {
        $space1 = 9;
        while ($space1 >= $R1) {
            echo "&nbsp ";
            $space1--;
        }
        $print1 = 1;
        while ($print1 <= $R1) {
            echo "*";
            $print1++;
        }
        echo "<br>";
        $R1++;
    }
    ?>

    <br><br>
    <?php
    for($outer=1;$outer<=10;$outer++){
        for($space=9;$space>=$outer;$space--){
            echo"&nbsp ";
        }
        for($print=1;$print<=$outer;$print++){
            echo"* ";
        }
        echo"<br>";
    }
    for($R=0;$R<5;$R++){
        for($S=3;$S>$R;$S--){
            echo"&nbsp ";
        }
        for($C=1;$C<5;$C++){
            echo"* ";
        }
        echo"<br>";
    }
?>
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