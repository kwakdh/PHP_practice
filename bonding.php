<?php

/*
class A{

    private $pri = 10;
    protected $proVale = 100;
    public  $puVale = 1000;

}
class B extends A {
    function test(){
       echo $this->proVale."<br>";
    }
}

$objA = new A();
$objB = new B();

echo $objA->puVale."<br>";
//echo $objA->proVale."<br>";
//echo $objA->pri."<br>";

echo $objB->proVale."<br>";
echo $objB->pri."<br>";
echo $objB->puVale."<br>";*/






?>

<?php

 class A{

     static public $value =10;
     function getClassName(){
         return __CLASS__;
     }

 }


$good = new A();
$className = $good->getClassName();

//::앞에는 클래스 명이 들어가야 한다.
echo $className::$value;










?>
