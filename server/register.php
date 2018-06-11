<?php
/**
* 配置数据库信息
*/
include "./database.php";

// 如果行为参数为register我们继续进行下面的操作

$account = $_POST['account'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];

    $sql = "select account from user where account='$account'";
    $result = $handle->query($sql);
    $data = $result->fetch_assoc();
    if($data) {
        echo "账号已存在";
    } else {
        $result=0;
        if($password1 == $password2){
        $sql = "insert into user (account, password) values('$account', '$password1')";
        $result = mysqli_query($handle, $sql);
        }
        echo $result ? "<script>window.alert('注册成功');window.location.href='../front/login/login.html'</script>" : '两次输入密码不同';
    }


?>