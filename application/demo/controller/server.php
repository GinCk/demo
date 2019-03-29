<?php
$sql=Db::query('select * from comments');
$que=mysqli_query($sql);
while($row=mysqli_fetch_array($que)){
    $comments[] = array("user"=>$row[user],"comment"=>$row[comment],"addtime"=>$row[addtime]);
}
echo json_encode($comments);
?>