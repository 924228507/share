<?php

include "./database.php";

$account = $_POST['account'];
$password = $_POST['password'];

$sql = "select account,password from user where account=$account";
$result = mysqli_query($handle, $sql);//返回数据
$res = mysqli_fetch_assoc($result);
if(!$res){
    echo "<script>alert('无此用户！')</script>";
    echo "<script>window.location.href='../front/login/login.html'</script>";
}

if ($account == $res['account'] && $password == $res['password'])
{
    session_start();
    $_SESSION['account'] = $account;
    echo "<script>window.location.href='../front/home/home.html'</script>";
}else
    {
    echo "<script>alert('密码错误！')</script>";
    echo "<script>window.location.href='../front/login/login.html'</script>";
    }
