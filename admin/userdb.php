<?php
class user
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
    public function usergetdata()
    {
        $conn=user::connection();
        $sql="select * from user_tbl";
         $res=$conn->query($sql);
         return $res;
    }
    public function useradmindetail($email)
    {
        $conn=user::connection();
      $sql="select * from user_tbl where pk_email_id='".$email."'";
      $res=$conn->query($sql); 
      return $res;
    }
       public function userdelete($_id)
    {
        $conn=user::connection();
        $sql="delete from user_tbl where pk_email_id='". $_id ."'";
         $res=$conn->query($sql);
         return $res;
    }
     public function userdeleteall($x)
    {
         $conn=user::connection();
        $sql="delete from user_tbl where pk_email_id In($x)";
         $res=$conn->query($sql);
         return $res;
    }
    public function userinsert($_email,$_name,$_pass,$_mno,$_type,$_targetfile,$token)
    {
      $conn=user::connection();
      $sql="insert into user_tbl values('". $_email ."','". $_name ."','". $_pass ."','". $_mno ."','". $_type ."','". $_targetfile ."','yes','". $token ."')";
      echo $sql;
      $res=$conn->query($sql); 
      return $res;
    }
}