<?php 
function saludar($n){
    echo "hola $n";
}
saludar ("mono");

function suma($v1,$v2){
    return ($v1+$v2);
}

echo "la suma ".suma(1,2);




echo "<br/>";
$num=500;
$par="";
if ($num % 2 == 0)
{$par="par";}
else
{$par="impar";}

switch($par){
    case "par":
        echo "el numero $num es PAR";
        break;
    case "impar":
        echo "el numero $num es IMPAR";
        break;
    default:
        echo "NO ESTA DEFINIDO";
        break;
}


?>

