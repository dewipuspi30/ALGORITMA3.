<?php
$a= 5; $b=8; $c=6;
echo "var_dump($a)";
$hasil1=$a+$b;
$hasil2=$a+$c;
$hasil3=$a.$b.$c;
$hasil3=$a*$b*$c;
 
echo "\$hasil1:"; var_dump($hasil1); //int(13)
echo "<br \>"; // 
echo "\$hasil2:"; var_dump($hasil2); //float(9.5)
echo "<br \>";
echo "\$hasil3:"; var_dump($hasil3); //string(2) "58" 

echo "<br> tanpa vardump<br> "; // 

echo $hasil1; //int(13)
echo "<br \>"; // 
echo $hasil2; //float(9.5)
echo "<br \>";
echo $hasil3; //string(2) "58" 
