<?php
// 기본적으로 클론은 primitive 값+ array 만!
// 만약 array안에 reference값이 들어가있을 경우... reference값까지 복제하고 싶을 때 __clone 메서드 이용하기

class A{
    public $value=18;
}
class test{
    public $mList;
    public $mObj;

    function __construct(){
        $this->mObj= new A();
        $this->mObj->value=20;
    }
    function prtList(){
        echo $this->mObj->vlaue."<br>";
    }
    function __clone() //객체 자체 복사하고 싶을 때 !
    {
        $this->mObj= new A();
        $this->mObj->value=20;
    }
}

$obj= new test();
$copyObj= clone $obj; // __clone 사용하기 전 참조변수의 객체의 주솟값만 복사되고 객체자체는 복사되지 않는다.
                      //  $obj 와 $copyObj 가 class A를 가리키고 있다.
$obj->prtList();
$obj->mObj->value=200;
echo $copyObj->mObj->value;



/*class A{
    public $ma = 10;
    public $mb = 20;

    function __clone()
    {
       echo "클론 함수 존재"."<br>";
    }
    function setMB($argValue){
        $this->mb=$argValue;
    }
}

$obj= new A();
$obj->setMB(18);

$objClone= clone $obj; //객체 복제

echo "mb value of clone object".$objClone->mb;
*/




// object cloning : 객체 복제 !
// 객체안에 멤버변수로서 이 객체안에 객체를... 배열을 가지고있을 때..! 전부다 복사해야하는 문제 점이있다.
// --> 이런 문제점은 우리가 결정하는 것이다 !
// 특정 이벤트가 발생 했을 때 : 매직 메서드 ( __로 시작한다 )
// 매직 메서드 : 특정 상황이 발생될 때 php엔진이 호출하는 함수
// __set : 특정 멤버변수가 존재하지 않을 때..
// 매직메서드는 멤버젼수가 대상이다. 멤버변수가 없을 때 작동함.

//__call : 존재하지 않은 인스턴스 메서드가 호출될때 !!!!



?>