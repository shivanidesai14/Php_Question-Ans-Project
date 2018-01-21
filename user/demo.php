<?php
$_id=1;
$conn=new mysqli("localhost","root","","pro_question");
$sql="select q.*,u.* from question_tbl q,user_tbl u where  and q.fk_email_id=u.pk_email_id and q.question_id='". $_id ."'";
$result=$conn->query($sql);
$row1=$result->fetch_assoc();
echo '<div>'. $row1["question_desc"] .'</div>';
echo '<div>'. $row1["user_name"] .'</div>';

echo '<div>'. $row1["ans_desc"] .'</div>';




?>