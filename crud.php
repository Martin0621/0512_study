<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=student";

$pdo=new PDO($dsn,'root','');

?>

<style>

table{
    border-collapse: collapse;
    width: 70%;
    min-width: 800px;
}

td{
    border: 1px solid lightblue;
}


</style>

<h1>學生列表</h1>
<table>
    <tr>
        <td>序號</td>
        <td>學號</td>
        <td>班級座號</td>
        <td>姓名</td>
        <td>出生年月日</td>
        <td>身分證號碼</td>
        <td>住址</td>
        <td>家長</td>
        <td>電話</td>
        <td>科別</td>
        <td>畢業國中</td>
    </tr>
<?php
$sql="select * from students ";
$rows=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
foreach($rows as $row){
?>
    <tr>
        <td><?=$row['id'];?></td>
        <td><?=$row['uni_id'];?></td>
        <td><?=$row['seat_num'];?></td>
        <td><?=$row['name'];?></td>
        <td><?=$row['birthday'];?></td>
        <td><?=$row['national_id'];?></td>
        <td><?=$row['address'];?></td>
        <td><?=$row['parent'];?></td>
        <td><?=$row['telphone'];?></td>
        <td><?=$row['major'];?></td>
        <td><?=$row['secondary'];?></td>
    <?php
}
   ?>
</table>