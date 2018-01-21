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
    
    public function insertuser($mail,$name,$pass,$_type,$img,$veri,$token)
    {
        $conn=database::connect(); //here connect is static function so we are calling function using class name
        $sql="insert into user_tbl values('". $mail ."','". $name ."','". $pass ."','".$_type."','". $img ."','". $veri ."','". $token ."')";
        $res=$conn->query($sql);
        return $res;
        database::disconnect();
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

    public function getquestions()
    {
        $conn=database::connect(); 
        $sql="select * from question_tbl " ;
        $res=$conn->query($sql);
        return $res;
        database::disconnect();
    }
      public function getnonquestions()
    {
        $conn=database::connect(); 
        $sql="select q.*,a.* from question_tbl q,answer_tbl a where q.question_id!=a.fk_question_id";
        $res=$conn->query($sql);
        return $res;
        database::disconnect();
    }
     public function notque($id)
    {
        $conn=database::connect(); 
        $i=0;
         $sql="select * from answer_tbl";
         $res=$conn->query($sql);
        while($row=$res->fetch_assoc())
        {
            if($row["fk_question_id"]==$id)
            {
                $i=1;
            }
        }
        
        return $i;
        database::disconnect();
    }

    public function selectquestion($_qid)
    {
        $conn=database::connect();
        $sql="select * from question_tbl where question_id='". $_qid ."'";
        $res=$conn->query($sql);
        return $res;
        database::disconnect();
    }
    public function selectquestion1($_qid)
    {
        $conn=database::connect();
        $sql="select * from question_tbl where question_id='". $_qid ."'";
        $res=$conn->query($sql);
        return $res;
        database::disconnect();
    }

     public function ansget($_qid)
    {
        $conn=database::connect();
        $sql="select * from answer_tbl where fk_question_id='". $_qid ."'";
        $res=$conn->query($sql);
        return $res;
        database::disconnect();
    }
    public function selectans($qid)
    {
            $cnt=0;
          $conn=database::connect();
            $sql="select * from answer_tbl where fk_question_id='". $qid ."'";
            $res=$conn->query($sql);
            while($row=$res->fetch_assoc())
            {
                if($qid==$row["fk_question_id"])
                {
                    $cnt=$cnt+1;
                }
            }
      return $cnt;
    }
    public function getlike()
    {
        $conn=database::connect(); 
        $sql="select l.*,q.* from like_table l,question_tbl q where l.fk_question_id=q.question_id";
        $res=$conn->query($sql);
        return $res;
        database::disconnect();
    }

}
?>