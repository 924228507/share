<?php

include "./database.php";
session_start();
if(!empty($_SESSION['account'])){
    $account=$_SESSION['account'];
} else {
    echo "<script>window.alert('请先登录')</script>";
    echo "<script>window.location.href='/share/front/login/login.html'</script>";
}

$sql = "select id,descr from user where account=$account";
$result = $handle->query($sql);
$data = $result->fetch_assoc();
echo json_encode($data);