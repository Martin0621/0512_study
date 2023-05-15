<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=student";

$pdo=new PDO($dsn,'root','');

$sql="select * from students limit 1";


$row=$pdo->query($sql)->fetch();

echo "<pre>";
print_r($row);
echo "</pre>";

echo "<br>";

$row=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC);

echo "<pre>";
print_r($row);
echo "</pre>";

echo "<br>";

$row=$pdo->query($sql)->fetch(PDO::FETCH_NUM);

echo "<pre>";
var_dump($row);
echo "</pre>";

echo "<br>";


echo ($row)["name"];





echo "<br>";