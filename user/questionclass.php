<?php 
class question
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

    public function queinsert($_title,$_desc,$_targetfile,$_date,$_email,$_drp)
        {
        $con=question::connect();
        $sql="insert into question_tbl values('". NULL ."','". $_title ."','". $_desc ."','". $_targetfile ."','". $_date ."','". $_email ."','". $_drp ."')";
        $res=$con->query($sql);
        return $res;
        question::disconnect();
    }
      public function ansinsert($_desc,$_targetfile,$_date,$_id,$_email)
        {
        $con=question::connect();
        $sql="insert into answer_tbl values('". NULL ."','". $_desc ."','". $_targetfile ."','". $_date ."','". 0 ."','". $_id ."','". $_email ."')";
        $res=$con->query($sql);
        return $res;
        question::disconnect();
    }

}
?>