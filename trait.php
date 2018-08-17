<?php

// 12 - 3시 .... !

// dbms 접속은 무조건 oop
// my sql - .txt 파일을 insert table 콘솔로 넣기 -u - p root 넣기
// select insert delete update 쿼리문
// php.net 만 볼 수있다
// 파일 비워 놓기




//trait : 클래스 급이다... 자체적으로 객체화가 불가능하다(독립적으로 객체 생성이 불가능하다 !!!!!!!!!!!!!!!!!!!!!!!)
//-------------------> 안의 구성요소로서는 멤버변수 메서드 생성자 소멸자가 올 수 있다 .
//trait 클래스 안에서 사용된다. ' use '라는 예약어를 사용한다
// 복사 붙여넣기 기능임.
// class 와 trait 사이에 충돌이 일어날 수있다. trait 와 trait 사이에 충돌이 일어날 수있다
// 접근제어자도 복붙이랑 같음

//상속과 trait 중에서는 trait 값이 출력된다.








//-----------------------------------------------------------------------------------------------
//trait는 접근제어자를 변경할 수있다.
/*
trait abc{
    private function test1(){
        echo "A의 test1"."<br>";
    }

    private function test2(){
        echo "A의 test2"."<br>";
    }
}
class main{
    use abc{
     test1 as public;
     test2 as public;
    }
}

$obj = new main();
$obj ->test1();
$obj ->test2();
*/

//------------------------------------------------------------------------------
/*
trait A{

    public function smallTalk(){
        echo 'a';
    }


    public function BigTalk(){
        echo 'A';
    }
}


trait B{

    public function smallTalk(){
        echo 'b';
    }


    public function BigTalk(){
        echo 'B';
    }
}

class Talker{
    use A,B{

      A::smallTalk insteadof B; // B 클래스 대신 A 클래스에 있는 smalltalk 메서드 사용
      B::BigTalk insteadof A;

    }

}
$obj = new Talker();
$obj->smallTalk();
$obj->BigTalk();



*/



//--------------------------------------------------------------------------------------------------



/*trait TraitTest{
    function test1(){
        echo "trait - test1"."<br>";
    }

    function test2(){
        echo "trait - test2"."<br>";
    }
}

class base{
    function test2(){
        echo "base - test2"."<br>";
    }
}

class main extends base {
    use TraitTest;
    function test1(){
        echo "main - test1"."<br>";
    }

}

$obj= new main();
$obj->test1();
$obj->test2();



*/








/*
trait Arms{
    private $itemL = "trait - 팔, 왼손";
    private $itemR = "trait - 팔, 오른손";
    private $itemT = "trait - 팔, 수카수카";

    function prtArms(){
        echo $this->itemL."<br>";
        echo $this->itemR."<br>";
    }
}

trait Head{
    private $itemH = "trait - 머리";
    private $itemF = "trait - 다리";

    function prtHead(){
        echo $this->itemH."<br>";
    }

    function prtFoot(){
        echo $this->itemF."<br>";
    }
}

trait tbody{
    function prtBody(){
        echo "trait 몸체 "."<br>";
    }
}









*/



//-------------------------------------------------
/*trait IGoMoYa{

    private $test = "멤버변수";

    function __construct(){
        echo "생성자"."<br>";
    }
    function __destruct()
    {
      echo "소멸자"."<br>";
    }
    function test(){
        echo "메서드"."<br>";
    }

}

class main{
    use IGoMoYa;

    function __construct(){
        echo "메인 생성자"."<br>";
    }

    function __destruct(){
        echo "메인 소멸자"."<br>";
    }

}

echo "It's show time!!"."<br>";
$obj= new Main();
$obj ->test();*/

?>