<?php

//객체에 없는,..

//객체안에 메서드가 없을 경우 없는 메서드 호출용이 ' __call ' 이다
//---------> 매개변수 2개 : 메서드 이름 , 매개 변수( 1차원 배열 )
//----------->__call 매직 매서드 이용해서 오버로딩 가능 !!!!(+ func_num_args() 이용해서 오버로딩 가능 )
//

//__call, __callStatic --> 멤버 메서드 용 ( 매직 메서드 )



/*
class overloadingTest2{

    function __call($name, $parameter){

        $number= count($parameter);
        switch ($name){

            case "cyka":
                if($number==0){
                    echo $name."();"."<br>";
                }
                else if($number==2 &&gettype($parameter)=='integer'){
                    echo $name."({$parameter[0]},{$parameter[1]}";
                }
            break;
            default:
             echo "bb";
             break;
        }



       /* echo $name."<br>";

        if(count($parameter)==0){
            echo "";
        }
        else if(count($parameter)>=1){
            foreach ($parameter as $value){
                echo $value."  ";
            }
        }
    }


}

$obj = new overloadingTest2();
$obj->cyka();
$obj->cyka(1,2);*/

/*class overLoadingTest{

    static function __callStatic($name, $parameter)
    {
    echo $name."<br>";

        foreach ($parameter as $value) {
            echo $value."<br>";
         }
    }
}

overLoadingTest::hello(123,"hi","굼비야","살빼자","굼비야","굴비가 생각나는 구나");

*/



// __call :매직 메서드를 이용하여 overloading 가능

/*class overloadingEx{

    function __call($name, $argument)
    {
        echo $name."<br>";
        foreach ($argument as $value){
            echo $value."<br>";
        }

    }


}

$obj = new overloadingEx();
$obj->hello(1,"굼비","야식바이","화중지병","ㅎㅎ","지방");*/


















/*class Box{
    public $trash = array();

    function __set($name,$value){
        $this->trash[$name]=$value;
    }

    function __get($name){
        return $this->trash[$name];
    }

    function __isset($name){

    // print"isset ".$name."<br>";
    //return true;
      return isset($this->trash[$name]);

    }

    function __unset($name)
    {
        unset($this->trash[$name]);
      //  print "unset ".$name."<br>";
      //  return true;

    }

}


$obj3 = new Box();
$obj3->red = "레드";
echo $obj3->red."<br>";


$obj3->blue= "블루";
echo $obj3->blue."<br>";
echo isset($obj3->red);
unset($obj3->red);
echo " <AFTER unset>----------------------- ";
// unset($obj3->blue);

echo $obj3->red."<br>";




*/



//오버로딩
//php내부에서 제공하는 함수 func_num_args()와 func_get_args()가있음

//매직메서드 -->오버로딩에서 이용__set
//매직 function,method는 -- 특정한 사건이나 상황이 발생할 때 php 내부에서 호출한다 ...!!!
/*class overloadingTest{

    //현재 객체에 없는데 멤버를 집어넣고싶을 때..!
    function __set($name, $value) //정의되지 않은 멤버변수에 접근 할때 set 메서드로 온다 ...!
    {
        print $name.":".$value."<br>";
    }
    function __get($name)
    {
      // print $name."<br>";
       return 19;."<br>";
        return true;
    }

}

$obj = new overloadingTest();
$obj ->test = 21; // 이게 출력이 안되는 이유는 위에 test라는 변수가 선언되어 있기 때문이다
$obj->cyka = 18;
$var_a = $obj->opnet;
echo $var_a."<br>";

isset($obj->cyka);
unset($obj->opnet);*/




/*class A{
    public function test(){
        $num= func_num_args();
        $args=func_get_args();
        $sum=0;

        if($num<=3){
            foreach($args as $value){
                $sum += $value;
                echo $sum."<br>";
            }
        }
        else {
            echo "";
        }
    }
}
$obj = new A();
$obj->test(3,9);
$obj->test(1,2,5);*/





/*
class A{
    public function test(){
        echo func_num_args();  // 메소드내, 함수 내 ... 리턴 값은 현재 메소드나 함수에 넘어오는 인자값의 개수
                               // 오버로딩을 하기 위해서 리턴값이 몇개인가에 따라 출력하는 결과값을 다르게 주기....!
        $args=func_get_args(); // 그 실제 값을 획득하는 함수 ----> 1차원 배열이 리턴된다. 넘어온 매개변수의 값이 들어온다
        foreach ($args as $value){ //흐름제어문 !  좌항: 순회하고자 하는 배열 ,객체 ||| 우항: 각자의 엘리먼트의 값

            echo $value."<br>";

            //for($i=0;$i<func_num_args();$i++)
            //echo $args[$i]
        }
    }
}*/





// 자바에서 사용하는 오버로딩... 적용안된다 ! 그냥 첫번째 꺼 출력됨
/*class OverLoadingTest{
    function cyka(){
        echo "메서드1 ";
    }
    function cyka($arg1,$arg2){
        echo "메서드2 {$arg1},{$arg2} is invoked"."<br>";
    }
}
$obj = new OverLoadingTest();

//php는 매개변수 영향을 받지 않는다.
$obj->cyka();
$obj->ckya(1,2);*/

?>