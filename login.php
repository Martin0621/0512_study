<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=coffee";
$pdo=new PDO($dsn , 'root', '');

$acc=$_POST['acc'];
$pw=$_POST['password'];

$sql="select count(*) from `members` where `acc`='$acc' && `password`='$pw'";
echo $sql;

$chk=$pdo->query($sql)->fetchColumn();

if($chk){
    echo "登入成功";
}else{
    echo "登入失敗，帳號或密碼錯誤";
}

header("location:index.html");