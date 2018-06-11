<?php

include "./database.php";
session_start();
if(!empty($_SESSION['account'])){
    $account = $_SESSION['account'];
} else {
    echo "<script>window.alert('请先登录')</script>";
    echo "<script>window.location.href='/share/front/login/login.html'</script>";
}

$description = $_POST['description'];

$result = 0;
$sql = "insert into message (account,description) values('$account','$description')";
$result = mysqli_query($handle, $sql);
echo "<script>window.location.href='/share/front/home/home.html'</script>";