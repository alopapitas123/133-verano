<?php 
class comp{
    public $ram;
    public $ssd;
    public function __construct($ram, $ssd)
    {
        $this->ram=$ram;
        $this->ssd=$ssd;
    }
    public function mostrar()
    {
        echo "caractersiticas <br>";
        echo "memoria RAM: ".$this->ram."<br>";
        echo "memoria SSD: ".$this->ssd."<br>";
    }

}




public function __construct($ram, $ssd,$marc,$modelo)
{
    parent::__construct($ram,$ssd);
    $this->marc=$marc;
    $this->modelo=$modelo;
}
public function mostrar()
{
    parent::mostrar();
    echo "marca: ".$this->marca."<br>";
    echo "modelo: ".$this->modelo."<br>";

}



$obj1=new comp("4gb", "2 TERAS");
$obj1->mostrar();

$obj2=new comp("4gb", "2 TERAS");
$obj1->mostrar();




?>