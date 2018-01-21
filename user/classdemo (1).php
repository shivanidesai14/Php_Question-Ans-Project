<?php
class database
{
    private static $conn=null;

    public static function connect()
    {
        self::$conn=mysqli_connect("localhost","root","","pro_question");
        return self::$conn;
    }

    public static function disconnect()
    {
        mysqli_close(self::$conn);
        self::$conn=null;
    }    
    
    public function insertuser($mail,$name,$pass,$mob,$_type,$img,$veri,$token)
    {
        $conn=database::connect(); //here connect is static function so we are calling function using class name
        $sql="insert into user_tbl values('". $mail ."','". $name ."','". $pass ."','". $mob ."','".$_type."','". $img ."','". $veri ."','". $token ."')";
        $res=$conn->query($sql);
        return $res;
        database::disconnect();
    }

    public function changePassword($_oldpass,$_newpass,$_email){
        $conn=database::connect();
        $sql="select * from user_tbl where pk_email_id='". $_email ."' and user_pass='". $_oldpass ."'";
        $res=$con->query($sql);
        if($res->num_rows==1)
        {
            $sql="update user_tbl set user_pass='".$_newpass."' where pk_email_id='".$_email."'";
            $res=$con->query($sql);
            return $res;
        }
        else
        {
            echo "Incorrect Username and Password";
        }
    }
     public function forgetpassword($_email)
    {
         $conn=database::connect();
         $sql="select * from user_tbl where pk_email_id='".  $_email ."'";
         $res=$conn->query($sql);
         return $res;
          database::disconnect();
    }
    public function login($mail,$pass)
    {
        $conn=database::connect();
        $sql="select * from user_tbl where pk_email_id='". $mail ."' and user_pass='". $pass ."' ";
        $res=$conn->query($sql);
        return $res;
        database::disconnect();
    }

   public function selectusers($id)
    {
        $conn=database::connect(); 
        $sql="select * from user_tbl where pk_email_id='". $id ."' " ;
        $res=$conn->query($sql);
        $row=$res->fetch_assoc();
        if($res->num_rows==1)
        {
            $n=$row["user_pass"];
            
        }
        else
        {
            $n="No Record Found";
        }
        return $n;
        database::disconnect();
    }
    public function userget($_email)
    {
        $conn=database::connect(); 
        $sql="select * from user_tbl where pk_email_id='". $_email ."'" ;
        $res=$conn->query($sql);
        return $res;
        database::disconnect();
    }

    public function prodisplay()

    {
        $conn=database::connect(); 
        $sql="select * from product_tbl " ;
        $res=$conn->query($sql);
        return $res;
        database::disconnect();

    }


}
?>