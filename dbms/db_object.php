<?php

phpinfo();

//객체단위로 할 경우..... !
//멤버변수 명: 필드명 멤버변수 의 값: 필드 값
class db_info
{
    const db_url = "localhost";
    const user_id = "root";
    const password = "autoset";
    const db = "dahui";
}

if($conn->connect_error){
    echo "Failed to connect to MySQL".$conn->connect_error;
}
class customer_object{
}


$conn =new mysqli(db_info::db_url,db_info::user_id,db_info::password,db_info::db);
$result = $conn->query("select * from customer");

$obj = $result->fetch_object("customer_object");

$row_num = $result->num_rows;

while (mysqli_fetch_object("customer_object")!=null){

    for($i =0; $i <$row_num;$i++){
     foreach ($obj as $key => $value){
       echo "{$key}:{$value}"."<br>";
       }
    }
}
exit()


?>
