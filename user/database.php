<?php
class database
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
   public function Login($_u,$_p)
    {
            $conn=database::connection();
            $sql="select * from user_tbl where 	email='". $_u ."' and password='". $_p ."' ";
            $res=$conn->query($sql);
            return $res;
    }
    public function Signup($_email,$_name,$_pass,$_mob,$_add,$_img,$_gender)
    {
         $conn=database::connection();
            $sql="insert into user_tbl values('".$_email."','". $_name ."','". $_pass."','". $_mob ."','". $_add ."','". $_img ."','". $_gender ."')";
            echo $sql;
            $res=$conn->query($sql);
            return $res;
    }
    public function changepassword($_oldpass,$_newpass,$_email)
    {
         $conn=database::connection();
         $sql="select * from user_tbl where email='".  $_email ."' and password='". $_oldpass ."'";
         $res=$conn->query($sql);
         if($res->num_rows==1)
         {
             while($row=$result->fetch_assoc())
             {
         
               echo '<h1> Password :- '. $row["password"] .'</h1>';
            }
         }
             else
         {
             echo "username/old pass is incorrect";
         }
     }
        
    
   
    public function productdisplay()
    {
         $conn=database::connection();
         $sql="select * from product_tbl";
         $res=$conn->query($sql);
         return $res;
    }
    public function profile($_email)
    {
         $conn=database::connection();
         $sql="select * from user_tbl where email='". $_email ."'";
         $res=$conn->query($sql);
         return $res;
    }
    public function pupdate($_name,$_pass,$_mob,$_add,$_img,$_gender,$_email)
    {
        $conn=database::connection();
         $sql="update user_tbl set name='". $_name."',password='". $_pass ."',mobile='". $_mob ."',address='". $_add ."',image='". $_img ."',gender='". $_gender ."' where email='". $_email."'";
         $res=$conn->query($sql);
         return $res;
    }
}


?>