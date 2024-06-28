<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="number" name="valor1" />
        <input type="number" name="valor2" />
        <button type="submit">sumar</button>   
        
    </form>
</body>
</html>


<?php 

if ($_SERVER["REQUEST_METHOD"] =="POST" ){
   $v1=$_POST["valor1"];
   $v2=$_POST["valor2"];
    echo "<br> la suma es: ".($v1+$v2);
    
}



?>