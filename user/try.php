<html>
<body>
<?php
$cnn=new mysqli("localhost","root","","qa_proj");
$res=$cnn->query("select * from question_tbl where fk_email_id='jenny'");

while($row=$res->fetch_assoc())
{
    echo $row["question_desc"];
    echo '<br>';
    $tmp=$row["question_id"];
    
    
    //$con=new mysqli("localhost","root","","qa_proj");
    echo $tmp;
    $re=$cnn->query("select * from answer_tbl where fk_question_id='$tmp'");
        
    while($rows=$re->fetch_assoc())
    {
        echo'<br>';
        echo $rows["answer_desc"];
        echo'<br>';
    }
    echo '<br>';
    
    
}
?>
</body>
</html>