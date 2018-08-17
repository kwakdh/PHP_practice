<?php
//타깃이 객체 ! where 메모리에 있는...! -->문자열로 표현
// 그문자열을 파일로 저장할 수도있고 다른 곳에 저장 할 수도있다.
// 메모리상에 객체 저장 !
// 우리가 할 수있는 것? 객체를 공유 할 수있다. ! 파일로서... 네트워크로서...
// 데이터나 객체를 아주작은 데이터로 표기하는 법 --- 제이슨 (표준 : jason_parse)
// 제이슨 이전에 객체를 표기하는 법? xml!  (xml이 html 처럼 소스코드가 많아서..... 효율성이 떨어짐!)

// 프론트 엔드 --- 백 엔드  서로 데이터를 넘겨주고 싶을 때
// 결과 값 을 클래스로 만들어서 jasonEncode 로 해서 직렬화된 문자열을 프론트 엔드로 넘겨줌
// jason_parse 자바스크립트라는 객체를 만들어줌
// 서로 다른 언어 라도 객체간 공유가 가능한다.
// ajax 와 다르게 php 객체 만들어서 제이슨으로 인코딩해서 주면됨.
// 객체 이동, 통신이 가능함. ajax 와는 다른점
// 클래스 정의, 멤버들 정의 후.. ! ( 객체간의 정보 공유를 확실히 하고싶을 때에는 php-php 간으로 !)
// 저장, 통신할 때 ( 데이터 주고 받을 때 ) -- 객체단위,,,! 직렬화 시켜서 네트워크 통해서 바이트 코드를 쏜다.


class Test{

    public $value=18;
    function prtValue(){
        echo $this->value;
    }

}

$reStirng = 'O:4:"Test":1:{s:11:"Testvalue";i:18;}';
$obj = unserialize($reStirng);

echo $obj->prtValue();










/*
$obj= new Test();
echo  ejson_encod($obj);//자바스크립트로 넘기면 그대로 객체 생성 가능
echo serialize($obj);
*/
















// 객체 직렬화
//--------------> 객체를 한 라인으로 표기하기.
// 객체들은 멤버들로 구성 ..!
// 현재객체는 메모리 상에 있는데 그 객체가 파일에 저장됨.
// 한 객체를 직렬화화해서(문자열로 나옴) 그 파일로 저장되고 그 파일을 불러오기 위해서 다시 그 직렬화 가져와서 객체화를 시킨다.
// 이 때 객체 직렬화가 이용된다...
// 포토샵 pdf


// serialize : php에서 제공하는 함수. 객체를 직렬화 하는 기능(메모리상의 객체를 문자열로 변환)
// unserialize : 객체 복원화

/*class Test{

    private $i_v_1 ="variable 1";
    private $i_v_2 ="";

    function printAllVariable(){
        echo $this->i_v_1.":".$this->i_v_2."<br>";
    }

    function setVariable2($areValue){
        $this->i_v_2=$areValue;
    }

}

$obj= new Test();
$obj-> setVariable2("opaopa");

echo serialize($obj);

*/


?>