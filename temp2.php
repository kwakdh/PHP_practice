<?php
/*class A{
    const c_v = 18;
    public $i_v = 19;
    static $s_v = 20;

    function test(){
        echo static::$s_v."<br>";
    }
}
class B extends A{
    static $s_v = 218;
    function test(){
        echo parent::test();
        echo self::$s_v."<br>";
    }
}

$b = new B();
$b ->test();*/



/*
class CI {

    private static $cValue = 1;
    public static function printClassName(){
        echo __CLASS__."<br>";
    }

    public function printClassValue(){
        echo CI::$cValue."<br>";
    }
    public function increaseClassValue(){
        CI::$cValue++;
    }
}

CI::printClassName();

$objA= new CI();
$objB= new CI();

$objA->increaseClassValue();
$objB->printClassValue()*/




/*
class A{
    public static function test(){
        echo __CLASS__;
   }
   public static function gg(){
        //여기서 스태틱은 본딩개념은 아니지만 상속 관계에서 타고 내려가기 때문에  본딩작용처럼 보인다.
        //그래서 여기서 static은 A클래스가 아니라 B클래스임.--> 타고내려가기때문에.....
       //인스턴스는 접근 방법이 없다. 하지만 클래스는 따로 접근이 가능하다 !
        static::test();
   }
}
class B extends A{
    public static function test(){
        echo __CLASS__;
    }
}

$b = new B();
$b->gg();*/

/*
class A{
    static function test(){
        echo"A 입니다.";
    }

    function thisTest(){
        static::test();
    }

}
class B extends A{

    static function test(){
        echo"B 입니다.";
    }

}
$b = new B();
$b->thisTest();*/

/*
class A{
    public $i = "변수1";
    const  v = "변수2";

    public function test(){
        echo $this->i."<br>";
        echo self::v."<br>";
    }


}
class B extends A{
    public $i = "변수3";
    const  v = "변수4";
}

$b = new B();
$b->test();*/

/*
class A{
    const good =10;
}
class B extends A{
    const good =100;

    static function prt(){
        echo self::good;
    }
}
$obj = new B();
$obj ->prt();*/


/*
class A{
    static $value = 'constant';
}

class B extends A
{
   public static $value2 = 'A constant value';
   public static function good(){

       echo parent::$value."<br>";
       echo self::$value2."<br>";

   }
}


$className = 'B';
$className::good();
//B:good();*/



?>