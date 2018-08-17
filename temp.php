
<?php
//php 클래스
//클래스 정의 하기

//클래스 4대 구성요소 : 멤버변수 , 멤버메서드, 소멸자, 생성자
//소멸자 ? 객체가 날아가기전에 처리를 해주는 역할
//         죽는 타이밍을 알기 때문에 쓸때 용이한 점이 있음 (가비지컬렉터는 자동화되기때문에 언제죽는지 알수없다.)
//자바에서는 왜 가비지 컬렉터 사용 ?
//          프로그래머가 객체를 죽이는것을 까먹을 우려가 있기 때문에 자동화된 가비지 컬렉터가 중요함.(동적 메모리)
//php에선 자료형이 없다.... 동적바인딩 적용되기때문에  다형성이 필요가 없다 .
//생성자나 메서드앞에 접근제어자가 명시 안되어있으면 'public'
//
//생성자 2가지방법 -> constructor 또는 클래스명 이용해서 사용하기
// 클래스명이용하는 것은 기존버전이라서 최신버전과 호환하기위해서 !
//

 class firstClass{

     private $soo ; //변수 설정하기 ---> 지역 변수와 구분을 하기 위해서 앞에 접근제어자가 붙음
                     // 접근제어자는 'default'제외하고 3개가 존재 (private,public,protected)

     function __construct($arg){

         $this ->soo =$arg;
         //this? 현재 객체 내의 멤버변수를 가리킨다.
         //'this'앞에 $ 없으면 지역변수를 의미함.
         //자바는 .으로 접근하는반면 'php'는 ->로 인스턴스 접근 ::로 클래스 접근

     }
     function good2(){
         echo $this ->soo;
         echo "<br>";
     }

 }


  $good = new firstClass("다희"); //객체 생성

  $good ->good2(); //멤버메서드 호출


?>
<?php

// 생성자에서...
//오버로딩 지원안됨 ! (자료형이 동적바인딩)
//상속관계에서...
//원칙 : 자기 생성자만 호출 하는데
//만약 생성자가 없을 경우 상위 클래스로 이동을 하는데 제일 첫번째 마주치는 생성지만 호출함!

class A {

    function __construct(){
        echo "A 생성자"."<br>";
    }

    function __destruct()
    {

        echo "A 소멸자"."<br>";
    }


}

class B extends A{
    function __construct(){
        parent ::__construct(); //자바의 'super'기능과 같다.
        echo "B 생성자"."<br>";
    }

    function __destruct()
    {
        parent ::__destruct();
        echo "B 소멸자"."<br>";
    }


}
class C extends B{
    function __construct(){
        parent :: __construct();
        echo "C 생성자"."<br>";
    }

    function __destruct()
    {
      parent ::__destruct();
      echo "C 소멸자"."<br>";
    }
}

$good2 = new C();

unset($good2); // 이 객체를 동적으로 지움!
               // 소멸자가 호출되고 객체가 죽음

echo "ggggggggggggggggggg";

?>
