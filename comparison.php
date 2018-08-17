<?php

// object comparison => 객체들을 비교 !
// ==  : 값이 같은 것 , === : 자료형이 같은 것
// ==  : 서로 다른 객체지만 안에 멤버변수의 값을 비교
// === : 참조변수가 동일한 객체를 가리키는 것( 객체의 주솟값이 같을 경우 )

class A{
    public $value ;

    function __construct($argValue){
        $this->value=$argValue;
    }
}

$obj1 = new A(18);
$obj2 = new A(218);
$obj3 = new A(18);
$obj4 =$obj1;


if($obj1 == $obj2){
    echo "true"."<br>";
} else{
    echo "false"."<br>";
}

if($obj1 == $obj3) {
    echo "true"."<br>";
} else{
    echo "false"."<br>";
}

if($obj1 === $obj2){
    echo "true"."<br>";
} else{
    echo "false"."<br>";
}

if($obj1 === $obj3) {
    echo "true"."<br>";
} else{
    echo "false"."<br>";
}


if($obj1 === $obj4) {
    echo "true"."<br>";
} else{
    echo "false"."<br>";
}
?>