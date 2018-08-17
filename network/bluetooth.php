<?php
namespace network\Bluetooth;

//싱글 쿼테이션은 그대로 문자열 출력
// 더블 쿼테이션 안에서 $사용하고 싶을 때 {} 사용 !


class Connection{
    function __construct(){
        echo '\Bluetooth\connection 블 투 커넥션'."<br>";
    }
}

?>