<?php
header ( "Content-type:text/html;charset=utf-8" );
define('host', 'localhost');
define('user', 'root');
define('passwd', '');
define('dbName', 'share');
$handle = mysqli_connect(host, user, passwd, dbName);
$handle->query('set names utf8');

if (!$handle) {
    die('连接数据库失败！' . mysqli_connect_error());
}