<?php

include "./database.php";

$sql = "select * from message";
$result = $handle->query($sql);
$data = array();
while($row = $result->fetch_assoc()) {
    $ss = $row['account'];
    
    $sql2 = "select id from user where account='$ss'";
    $result2 = $handle->query($sql2);
    $res = $result2->fetch_assoc();
    $row['username'] = $res['id'];
    $data [] = $row;
}
$data = array_reverse($data);
echo json_encode($data);