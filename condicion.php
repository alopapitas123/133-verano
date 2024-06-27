<?php 

$v1=7;
$v2=7;

if ($v1>$v2)
{echo "v1 es mayor";}
else if($v1<$v2)
{echo "v2 es mayor";}
else
{echo "son numeros iguales";}


echo "<br/>";
echo "EJERCICIO2";
echo "<br/>";

$c1="ConT";
$c2="cont";
$res= strcasecmp($c1,$c2);
if ($res==0)
{echo "son iguales <br/>";}
else if ($res>1)
{echo "cadena 1 es mayor a cadena 2 <br/> " ;}
else
{echo "cadena 2 es mayor a cadena 1 <br/>";}


?>