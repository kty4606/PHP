<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    // $localhost ="localhost";

    // echo $localhost;
    // echo 1+3;
    // echo "안녕하세요";

    $id = $_GET['id'];
    $pw = $_GET['pw'];
    $phone = $_GET['phone'];
    $remark = $_GET['remark'];
    $hobby = $_GET['hobby'];
    $specialty = $_GET['specialty'];

    echo "id = ".$id."<br/>";
    echo "pw = ".$pw."<br/>";
    echo "phone = ".$phone."<br/>";
    echo "remark = ".$remark."<br/>";
    echo "hobby = ".$hobby."<br/>";
    echo "specialty = ".$specialty."<br/>";


    $servername = "localhost";
    $username = "kty4606";
    $password = "eprapzm!2";

    $dbname ="kty4606";
    $conn = new mysqli($servername,$username,$password,$dbname);

    if( $conn -> connect_error){
        echo "디비 연결 실패";
    }else{
        echo "디비 연결 성공";
    }
    $sql =
    "insert into member
        (id,pw,phone,remark,hobby,specialty)
    values
        ('$id','$pw','$phone','$remark','$hobby','$specialty')";
    if( $conn -> query($sql) === TRUE){
        echo " 행 삽입 성공";
    }
    else{
        echo " 행 삽입 실패";
    }

    $conn->close();
?>
</body>
</html>