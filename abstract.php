<?php


// 추상 클래스 ?! ---> 미완성 메서드 ! 그 클래스를 가지고 객체를 찍어낼 수 없다.
// 자식에게 추상메서드를 구현하라는 강제성을 가짐.
//abstract class A ----> 클래스 객체를 찍지 마라 ! 라는 강제성을 띔.

// class A{
//    abstract void prt() } --> 일반 클래스(완성형) 안에 추상메서드( 미완성 )가 있는 것은 말이 안된다.
//추상A -> 추상B ->일반C (C안에 추상메서드 구현하기 !!)  , A,B는 객체 찍을 수 없다.

//dbms 스키마를 파일로 주시는데 그 파일을 -- myq -u ... 생성 할수있기
//dbms접속 할수있게하기

abstract class abstractClass{

    abstract protected function getValue();
    abstract protected function preFixValue($prefix);

}
class nomal extends abstractClass{

    protected function getValue(){

    return"nomalClass";
    }

    public function preFixValue($prefix){

    return $prefix."<br>";

    }


}

$obj = new nomal();
echo $obj->preFixValue("gggg");







?>