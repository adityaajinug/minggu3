<?php

echo "for loop <br>";
echo "<br>";
for ($i=1; $i<=5; $i++) {
    for ($j=1; $j<=$i; $j++) {
        echo $i;
    }echo "<br>";
}
echo "<br>";
echo "while loop <br>";
echo "<br>";
$i=1;
while ($i <=5)
{
   $j=0;
   while ($j < $i)
   {
      echo $i;
      $j++;
   }
   echo "<br>";
   $i++;
}
?>