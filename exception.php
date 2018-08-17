<?php
// db ,isset 을 try catch 문으로 !
// 예외 처리 쓰는 이유....?
// ------------> 해피시나리오와 예외처리가 분리되서 소스코드의 가독성이 높아진다.
// 모든 소스코드에서 다 try 문으로 받는게 나을까 ? 모듈마다 try 문으로 하는게 나을까 ?
//-------------> case by case 입니다.



function exception_handler($exception){
  echo "Uncaught exception : ", $exception->getMessage()."<br>";
}

set_exception_handler('exception_handler');

throw new Exception("Uncaught Exception");
echo "Not Exception"."<br>";

















//설계하는사람이 코드를 부여한다.
//예외객체 생성 -> php엔진이 인지..,php엔진으로 throw함! -> catch문으로 감! 가서
/*class MyCustomeException extends Exception{}

function doStuff(){

    try{
        throw new InvalidArgumentException("You are doing it worng!",112);
    }
    //try 문에서 new 객체를 찍어서 던졌는데 예외처리 발생시
        //catch 문으로 간다 매개변수 $e를 가지고
    catch(Exception $e){
        throw new MyCustomeException("Something happened",911,$e);
    }

}

try{
    doStuff(); //doStuff 메서드를 불러온다. 하지만 내용이 예외처리라서 던져진 내용을 catch 문으로 던져서
               //밑에있는 catch 문에있는 do 문에 들어가서 프린트함.
               //do 내용이 끝나면 whlie 문으로 들어가서 getPrevious 문으로 간다.
}catch(Exception $e){
    do{printf("%s:%d %s(%d) [%s]<br>",$e->getFile(), $e->getLine(), $e->getMessage(), $e->getCode(),
             $e->getCode(), get_class($e));
    }while($e=$e->getPrevious());
     //getPrevious 는 예전걸로 돌아간다.
}

*/






















// 예외처리는 자바와 같다.
// 예외 -----> 프로그램이 죽지 않게...! 미리 예측해서 방어를 가능할 수있다.
// 예외도 객체다 !!!!!!!!!!!
// 1.예외를 감지하는 부분 필요 2.예외 발생 시 예외를 만들기 ---> 예외 객체 생성
// 3.예외 객체를 던지기!(예외가 발생시 ---> php 인터페이스에서 감지됨) 4.예외처리
// new해서 예외 객체 만들기. 예외 객체를 만들어서 exception클래스...! throw --- catch
// 해피시나리오 소스코드는 try 예외처리부분은 catch에 넣기 !
// finally -- 예외 상관 유무 무조건 실행하는 부분 !
// 변수의 자료형이 동적바인딩됨! catch문이 여러개 달리는데 현재 객체의 자료형을 보고 들어간다...!
// catch는 반드시 한개밖에 없을거라고 생각할 수있는데... pexcetion
// 타입인티 --> class,interface,callback (3가지)
/*
class PException extends Exception{

}

class ExceptionTest{
    public function ThrowException()
    {
        try {
            throw new PException();
        } catch (PException $e) {
            echo "Pexception"."<br>";
            throw $e;
        }catch(Exception $e){
            echo "Exception"."<br>";


        }
        finally{
            echo "finally"."<br>";
        }

    }
}
$obj = new ExceptionTest();
$obj->ThrowException();*/
?>