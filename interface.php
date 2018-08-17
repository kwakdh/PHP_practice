<?php
//인터페이스
// 인터페이스 구현시 반드시 인터페이스 구현을 다해야하는데
//모든 메서드를 구현 하지 못한다면 그 클래스는 일반 클래스가 아니라 추상클래스가 된다...!


interface Red{
    public function printRed();
}
interface Green{
    public function printGreen();
}
interface Blue{
    public function printBlue();
}

interface color extends Red, Green, Blue{
    public function printColor();
}

interface Black{
    public function printBlack();
}

class Printer implements color,Black{

    public function printRed()
    {
       echo "빨간 색"."<br>";
    }

    public function printBlue()
    {
        echo "파란 색"."<br>";
    }
    public function printGreen()
    {
        echo "초록 색"."<br>";
    }
    public function printColor()
    {
        echo " 색 출력 "."<br>";
        $this->printRed();
        $this->printBlue();
        $this->printGreen();

    }
    public function printBlack()
    {
        echo "검은 색"."<br>";
    }

}

$obj = new Printer();
echo $obj ->printColor();
echo $obj->printBlack();
















/*interface engine{

    const a = 1;
    public function go(); //abstract 반드시 생략
    abstract public function gone();

}

class A implements engine{
    public function go()
    {
     echo "gogogogogogo";
    }
    public function gone()
    {
    echo "gone";
    }
}


$obj = new A();

echo $obj->go("gggg");*/

?>