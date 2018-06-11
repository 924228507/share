<?php

include "./database.php";
session_start();
if(!empty($_SESSION['account'])){
    $account=$_SESSION['account'];
} else {
    echo "<script>window.alert('请先登录')</script>";
    echo "<script>window.location.href='/share/front/login/login.html'</script>";
}

$sql = "select * from message WHERE account = $account";
$result = $handle->query($sql);
$data = array();
while($row = $result->fetch_assoc()) {
    $data [] = $row;
}
$data = array_reverse($data);
echo json_encode($data);