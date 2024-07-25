<?php

$color=array("red","green","blue");

foreach($color as $x)
{
    echo "$x <br>";
}



$food=array("nasigooran","biriyani","kottu");

$arrlenght=count($food);

 echo "<br>";

for($i=0;$i<$arrlenght;$i++)
{
    echo $food[$i];
    echo "<br>";
}



echo "<br>";
echo "<br>";


$x = rand(1,5); // random integer

echo "x = $x <br/><br/>";

switch ($x)
{
case 1:
echo "Number 1";

break;


case 2:
echo "Number 2";


break;



case 3:
echo "Number 3";
break;


default:
echo "No number between 1 and 3";
break;
}



?>

