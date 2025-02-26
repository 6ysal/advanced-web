<?php
$x = 10;
$y = 7;

echo "$x + $y = " . ($x + $y) . "<br>";
echo "$x - $y = " . ($x - $y) . "<br>";
echo "$x * $y = " . ($x * $y) . "<br>";
echo "$x / $y = " . ($x / $y) . "<br>";
echo "$x % $y = " . ($x % $y) . "<br>";
?>




<?php
$month = date("F"); 
if ($month == "August") {
    echo "It's August, so it's really hot.";
} else {
    echo "Not August, so at least it's not that hot.";
}
?>



<?php
for ($i = 1; $i <= 12; $i++) {
    echo "$i * $i = " . ($i * $i) . "<br>";
}
?>


<?php
echo "<table border='1' cellpadding='5' cellspacing='0'>";

for ($i = 1; $i <= 7; $i++) {  
    echo "<tr>";
    for ($j = 1; $j <= 7; $j++) { 
        echo "<td>" . ($i * $j) . "</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>

