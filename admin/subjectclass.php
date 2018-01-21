
<?php 
class subject
{
    private static $con=null;

    private static function connect(){
        self::$con=mysqli_connect('localhost','root','','pro_question');
        return self::$con;
    }

    private static function disconnect(){
        self::$con=mysqli_close();
        self::$con=null;
    }

    public function getAllsubject(){
        $con=subject::connect();
        $sql="select * from subject_tbl";
        $res=$con->query($sql);
        return $res;
        product::disconnect();
    }

public function selectsubject($id){
        $con=subject::connect();
        $sql="select * from subject_tbl where subject_id='". $id ."'";
        $res=$con->query($sql);
        return $res;
        product::disconnect();
    }


public function subdelete($id){
        $con=subject::connect();
        $sql="delete from subject_tbl where subject_id='". $id ."'";
        $res=$con->query($sql);
        return $res;
        product::disconnect();
    }
    public function deleteAll($arr)
    {
        $con=product::connect();
        $sql="delete from product_tbl where pk_pro_id In ($arr)";
        $res=$con->query($sql);
        return $res;
        product::disconnect();
    }
    public function subinsert($_subname){
        $con=subject::connect();
        $sql="insert into subject_tbl values('". NULL ."','". $_subname ."')";
        $res=$con->query($sql);
        return $res;
        product::disconnect();
    }
    
    public function subupdate($sub_id,$sub_name){
        $con=subject::connect();
        $sql="update subject_tbl set subject_name='". $sub_name ."' where subject_id='". $sub_id ."'";
        $res=$con->query($sql);
        return $res;
        user::disconnect();
    }
      public function subjectdeleteall($x)
    {
         $con=subject::connect();
        $sql="delete from subject_tbl where subject_id In ($x)";
         $res=$con->query($sql);
         return $res;
    }
}
?>