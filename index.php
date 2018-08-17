<?php

class PException extends Exception{

}

class ExceptionTest{
    public function ThrowException()
    {
        try {
            throw new PException();
        } catch(Exception $e){
            echo "Exception"."<br>";

        } catch (PException $e) {
            echo "Pexception"."<br>";
        }
        finally{
            echo "finally"."<br>";
        }

    }
}
$obj = new ExceptionTest();
$obj->ThrowException();
?>