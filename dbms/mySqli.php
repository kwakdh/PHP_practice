<?php

//select문 하면 2차원 배열생성. 2차원 배열을 레코드 단위로 끊어와 ~
//레코드 단위로 끊어 온 것을 fetch_array나 fetch_assoc를 이용해서 컬럼 단위로 끊어서 가져오기.

// 두개의 차이점 ?

// fetch_all : 2차원 배열로 그대로 넘어옴
// fetch_array : 인덱스 값을 이용해서 !
// fetch_assoc : 연관 값을 이용해서 !

class db_info
{
    const db_url = "localhost";
    const user_id = "root";
    const password = "autoset";
    const db = "dahui";
}

 $conn = mysqli_connect(db_info::db_url, db_info::user_id, db_info::password,db_info::db);

 if($conn->connect_error){
     echo "Failed to connect to MySQL".$conn->connect_error;
 }
/*
try {
    $id = array("ycj", "dhk", "scp", "hr");
    $password = array("ycj", "dhk", "scp", "hr");
    $name = array("yyy", "ddd", "sss", "hhh");
    $level = array("king", "queen", "king", "king");
    $age = array(12, 22, 32, 42);

    for($i = 0;$i < 4; $i++){

        $sql = "insert into customer values('{$id[$i]}','{$password[$i]}','{$name[$i]}',
                  '{$level[$i]}',{$age[$i]})";
       // echo $sql."<br>";

        if(!$conn->query($sql))
            throw new Exception('Myqli_query error');
    }

}catch(Exception $e){
     echo "시스템 에러 ....!"."{$conn->error}";
}*/

$result = mysqli_query($conn, "select * from customer");

echo "current Field:{$result->current_field}"."<br>";  //현재 필드 번호
echo "Field count:{$result->field_count}"."<br>";// 한 레코드당 필드의 개수
echo "Num rows :{$result->num_rows}"."<br>"; // 레코드 개수


$record = $result->fetch_array();

/*for($i=0 ; $i< $result->field_count ; $i++) {

    echo "{$record[$i]}" . "&nbsp;";
    echo "<br>";

    foreach ($result->lengths as $i->$val) {
       //printf("Field %2d has Lenght %2d ", $i + 1, $val);
        echo "Filed {$i} has length {$val}";
        echo "<br>";
    }
}*/

$dbArray = $result ->fetch_all();

$row_num = $result->num_rows; //전체 레코드 개수
$col_num = $result->field_count; // 한 레코드당 필드 개수

for($i = 0 ; $i<$row_num;$i++){
    for($j=0;$j<$col_num;$j++){
        echo "[{$i}][{$j}]"."{$dbArray[$i][$j]}"."<br>";
        // [행][열] ---> 각 배열당
    }
    echo "<br>";
}
unset($dbArray);
$dbArray->free();

$conn->close();



?>