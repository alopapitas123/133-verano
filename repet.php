<?php 
for ($i=1; $i<10;$i++)
{
    echo "termina en ".$i."segundos <br> ";
}

echo "FORECH <br>";
$vec= array("1","2","3","4","52");
foreach ($vec as $dato)
{echo "valor ".$dato. " es el valor <br>"; }

echo "while";
$index=0;
while($index <count($vec))
{echo "valor ".$vec [$index]."<br>" ;}
$index++;

?>