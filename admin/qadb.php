<?php
class queans
{
    private static $conn=NULL;
    private static function connection()
    {
        self::$conn=mysqli_connect("localhost","root","","pro_question");
        return self::$conn;
    }
    private static function disconnect()
    {
        self::$conn=mysqli_close();
        self::$conn=null;
    }
    public function quegetdata()
    {
        $conn=queans::connection();
        $sql="select * from question_tbl";
         $res=$conn->query($sql);
         return $res;
    }
      public function queinsert($_title,$_desc,$_targetfile,$_date,$_email,$_drp)
        {
        $conn=queans::connection();
        $sql="insert into question_tbl values('". NULL ."','". $_title ."','". $_desc ."','". $_targetfile ."','". $_date ."','". $_email ."','". $_drp ."')";
        $res=$conn->query($sql);
        return $res;
        queans::disconnect();
    }
     public function ansgetdata()
    {
        $conn=queans::connection();
        $sql="select * from answer_tbl";
         $res=$conn->query($sql);
         return $res;
    }
   
    public function quedetail($qid)
    {
        $conn=queans::connection();
      $sql="select * from question_tbl where question_id='".$qid."'";
      $res=$conn->query($sql); 
      return $res;
    }

        public function quedelete($qid)
    {
        $conn=queans::connection();
      $sql="delete from question_tbl where question_id='".$qid."'";
      $res=$conn->query($sql); 
      return $res;
    }
     public function quedeleteall($x)
    {
         $conn=queans::connection();
        $sql="delete from question_tbl where question_id In ($x)";
         $res=$conn->query($sql);
         return $res;
    }


        public function ansdelete($aid)
    {
        $conn=queans::connection();
      $sql="delete from answer_tbl where ans_id='".$aid."'";
      $res=$conn->query($sql); 
      return $res;
    }

    public function ansdetail($aid)
    {
        $conn=queans::connection();
      $sql="select * from answer_tbl where ans_id='".$aid."'";
      $res=$conn->query($sql); 
      return $res;
    }
}